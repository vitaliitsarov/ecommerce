<?php

namespace App\Console\Commands;

use Flowgistics\XML\XML;
use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Integration;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class SyncProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $integrations = Integration::get();

        Log::info('[Sync] Начало интеграции: ' . date('d-m-Y H:i:s'));

        foreach ($integrations as $integration) {
            $this->downloadFile($integration['url']);
        }
    }

    public function downloadFile(string $url): void
    {
        $file_name = storage_path('export/' . basename($url));

		if (!file_exists($file_name)) {
			$this->saveFile($file_name, $url);
		}

		if (Carbon::parse(date("d-m-Y H:i:s", filectime($file_name)))->addHours(1) > Carbon::now()) {
			$this->info("[Sync] Файл еще свежий.");
		} else {
			$this->saveFile($file_name, $url);
		}

        try {
			$this->proccess($file_name);
		} catch (\Exception $error) {
			Log::info('[Sync] Ошибка: ' . $error->getMessage());
		}

		Log::info('[Sync] Конец парсинга: ' . date('d-m-Y H:i:s'));
		$this->info("[Sync] Актуализация успешно закончена.");

    }

    public function proccess($file_name)
    {
        $xml = XML::import($file_name)->toArray();

        foreach ($xml['Data'] as $product) {
            $this->createProduct((array) $product);
        }
    }

    public function createProduct(array $product)
    {
        Product::updateOrCreate(
            [
                'article' => $product['kod']
            ],
            [
                'title' => $product['nazwa'],
                'body' => $product['description'],
                'vat' => $product['stawka_vat'],
                'price_netto' => $product['cena_netto'],
                'status' => Product::STATUS_ACTIVE,
                'ean' => $product['ean']
            ]
        );
    }

    public function saveFile($file_name, $url): bool
    {
		if (!file_put_contents($file_name, file_get_contents($url))) {
			$this->info("[XML] Ошибка при загрузки файла из сети.");
			return false;
		}
		$this->info("[XML] Файл успешно загружен.");
		return true;
    }

	// private function saveImages($dataSource): array
	// {
	// 	$images_json = collect();
	// 	$id_provider = $dataSource->get('id_provider');
	// 	Storage::makeDirectory("public/products/" . $id_provider);
	// 	chmod(storage_path("app/public/products/" . $id_provider), 0755);

	// 	$images_new = explode('*', $dataSource->get('images', []));
	// 	foreach ($images_new as $key_image => $value_image) {
	// 		try {
	// 			$filename = basename($value_image);
	// 			Image::make($value_image)->save(storage_path("app/public/products/" . $id_provider . "/" . $filename));
	// 			$images_json->put($key_image, "/storage/products/" . $id_provider . "/" . $filename);
	// 		} catch (\Exception $e) {
	// 			continue;
	// 		}
	// 	}

	// 	return $images_json->all();
	// }
}

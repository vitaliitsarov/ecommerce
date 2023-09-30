<?php

namespace App\Console\Commands;

use App\Models\Product;
use Flowgistics\XML\XML;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SyncImageProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-image-products';

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
        $url = 'https://bossoftoys.pl/images/products/xml/zdjecia.xml';

        $this->downloadFile($url);
    }

    public function downloadFile(string $url): void
    {
        $file_name = storage_path('export/' . basename($url));

        if (!file_exists($file_name)) {
            $this->saveFile($file_name, $url);
        }

        if (Carbon::parse(date("d-m-Y H:i:s", filectime($file_name)))->addHours(1) > Carbon::now()) {
            $this->info("[SyncImage] Файл еще свежий.");
        } else {
            $this->saveFile($file_name, $url);
        }

        try {
            $this->proccess($file_name);
        } catch (\Exception $error) {
            Log::info('[SyncImage] Ошибка: ' . $error->getMessage());
        }

        Log::info('[SyncImage] Конец парсинга: ' . date('d-m-Y H:i:s'));
        $this->info("[SyncImage] Актуализация успешно закончена.");

    }

    public function proccess($file_name)
    {
        $xml = XML::import($file_name)->toArray();

        foreach ($xml['Towar'] as $images) {
            $this->actualizationImage(
                json_decode(json_encode($images), true)
            );
        }
    }

    public function actualizationImage(array $product): void
    {
        if(Arr::has($product, 'gallery.image')) {
            $productModel = Product::where('article', $product['kod'])
                ->where('images', '=', null)
                ->first();

            if($productModel) {

                try {
                    $images = $this->saveImages(Arr::get($product, 'gallery.image'), $productModel);

                    $productModel->update(
                        [
                            'images' => $images,
                        ]
                    );
                } catch (\Exception $e) {
                    $this->error($e->getMessage());
                }

            }
        }
    }

    private function saveImages(array|string $images, Product $productModel): array
    {
        $images_json = collect();

        // Создаем директорию для хранения изображений
        if(Storage::makeDirectory("public/products/{$productModel->id}")) {
            $this->info('test');
            // Обработка массива или одиночного изображения
            $images = is_array($images) ? $images : [$images];

            foreach ($images as $key => $image) {
                try {
                    $filename = basename($image);

                    // Сохраняем изображение локально
                    $imageContents = $this->savePhoto($image, $productModel);

                    if ($imageContents !== false) {
                        $localPath = storage_path("app/public/products/{$productModel->id}/{$filename}");
                        File::put($localPath, $imageContents);

                        // Добавляем путь к изображению в коллекцию
                        $images_json->put($key, "/storage/products/{$productModel->id}/{$filename}");
                    }
                } catch (\Exception $e) {
                    $this->info($e->getMessage());
                    continue;
                }
            }
        };


        return $images_json->all();
    }

    public function savePhoto($value_image, $productModel)
    {
        try {
            // Отправляем GET-запрос к удаленному источнику
            $response = Http::get($value_image);

            // Проверяем, что запрос был успешным (код 200)
            if ($response->successful()) {
                $imageContents = $response->body();

                // Сохраняем изображение локально с оригинальным именем файла
                $filename = basename($value_image);
                $localPath = storage_path("app/public/products/{$productModel->id}/{$filename}");
                Storage::put("public/products/{$productModel->id}/{$filename}", $imageContents);


                // Возвращаем путь к сохраненному изображению
                return "/storage/products/{$productModel->id}/{$filename}";
            } else {
                // Обработка ошибки, если запрос не успешен
                return false;
            }
        } catch (\Exception $e) {
            // Обработка других исключений, если возникнут
            return false;
        }
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
}

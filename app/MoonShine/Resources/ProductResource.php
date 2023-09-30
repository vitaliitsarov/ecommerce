<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Decorations\Block;
use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Image;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Filters\TextFilter;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ProductResource extends Resource
{
	public static string $model = Product::class;

	public static string $title = 'Товары';

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    protected bool $showInModal = true;

    protected string $routeAfterSave = 'index'; // index, show, edit

    public function fields(): array
	{
		return [
            Block::make('Block title', [
                ID::make(),
                Image::make('Изображение', 'images'),
                Text::make('Заголовок', 'title'),
                SwitchBoolean::make('Показать на сайте', 'status')
                    ->onValue(Product::STATUS_ACTIVE)
                    ->offValue(Product::STATUS_INACTIVE),
            ])
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [
            TextFilter::make('Заголовок', 'title'),
            TextFilter::make('Ean-код', 'ean'),
            TextFilter::make('Артикул', 'article'),
        ];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function metrics(): array
    {
        return [
            ValueMetric::make('Всего товара')
                ->value(Product::count()),
        ];
    }
}

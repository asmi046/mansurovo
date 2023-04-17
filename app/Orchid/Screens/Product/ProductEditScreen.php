<?php

namespace App\Orchid\Screens\Product;

use Orchid\Screen\Screen;

use App\Models\Product;
use App\Models\Category;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Actions\ModalToggle;


use App\Orchid\Layouts\Product\ProductImageTable;

use Illuminate\Http\Request;

class ProductEditScreen extends Screen
{
    /**
     * Permission
     *
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'per.product'
        ];
    }

    /**
     * Query data.
     *
     * @return array
     */

     public $product;
     public $product_cat;

    public function query($id): iterable
    {
        $product = Product::where('id',$id)->first();
        $cat = $product->product_category;
        return [
            "product" => $product,
            "product_cat"=> $cat
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование продукта: '.$this->product->title;
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([

                Input::make('title')
                    ->title('Заголовок')
                    ->value($this->product->title)
                    ->help('Заголовок категории')
                    ->horizontal(),

                Input::make('slug')
                    ->title('Окончание ссылки')
                    ->value($this->product->slug)
                    ->help('Slug категории')
                    ->horizontal(),

                Relation::make('category')
                    ->fromModel(Category::class, 'title', 'title')
                    ->title('Категории товара')
                    ->value($this->product_cat)
                    ->help('Выберите категорию'),

                TextArea::make('quote')->title('Цитата')->value($this->product->quote),
                Quill::make('description')->title('Описание')->value($this->product->description),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Основные поля'),

            Layout::rows([
                Input::make('seo_title')
                    ->title('SEO заголовок')
                    ->value($this->product->seo_title)
                    ->help('SEO заголовок')
                    ->horizontal(),

                TextArea::make('seo_description')
                    ->title('SEO описание')
                    ->value($this->product->seo_description)
                    ->help('SEO описание')
                    ->horizontal(),
                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('SEO поля'),

            Layout::rows([

                Picture::make('img1')->title('Загрузить изображение №1')->targetRelativeUrl()->value($this->product->img1),
                Picture::make('img2')->title('Загрузить изображение №2')->targetRelativeUrl()->value($this->product->img2),
                Picture::make('img3')->title('Загрузить изображение №3')->targetRelativeUrl()->value($this->product->img3),
                Picture::make('img4')->title('Загрузить изображение №4')->targetRelativeUrl()->value($this->product->img4),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Изображения'),

        ];
    }

    public function save_info(Product $product, Request $request) {

        $new_data = $request->validate([
            'title' => ['required', 'string'],
            'slug' => [],
            'quote' => [],
            'category' => ['required', 'string'],
            'img1' => ['required', 'string'],
            'img1' => [],
            'img1' => [],
            'img1' => [],
            'description' => [],
            'seo_title' => [],
            'seo_description' => [],
        ]);


        Product::where('id', $product->id)->update($new_data);
        Toast::info("Продукт сохранен");
    }
}

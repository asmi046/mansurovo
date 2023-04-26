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

class ProductCreateScreen extends Screen
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

    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Создание товара';
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
                    ->help('Заголовок категории')
                    ->horizontal(),

                Input::make('slug')
                    ->title('Окончание ссылки')
                    ->help('Slug категории')
                    ->horizontal(),

                Relation::make('category')
                    ->fromModel(Category::class, 'title', 'title')
                    ->title('Категории товара')
                    ->help('Выберите категорию'),

                Input::make('subtype')
                    ->title('Подкатегория')
                    ->help('Дополнительное деление кнутри категории'),


                TextArea::make('quote')->title('Цитата'),
                Quill::make('description')->title('Описание'),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Основные поля'),

            Layout::rows([
                Input::make('seo_title')
                    ->title('SEO заголовок')
                    ->help('SEO заголовок')
                    ->horizontal(),

                TextArea::make('seo_description')
                    ->title('SEO описание')
                    ->help('SEO описание')
                    ->horizontal(),
                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('SEO поля'),

            Layout::rows([

                Picture::make('img1')->title('Загрузить изображение №1')->storage('public')->targetRelativeUrl(),
                Picture::make('img2')->title('Загрузить изображение №2')->storage('public')->targetRelativeUrl(),
                Picture::make('img3')->title('Загрузить изображение №3')->storage('public')->targetRelativeUrl(),
                Picture::make('img4')->title('Загрузить изображение №4')->storage('public')->targetRelativeUrl(),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Изображения'),

        ];
    }

    public function save_info(Request $request) {

        $new_data = $request->validate([
            'title' => ['required', 'string'],
            'slug' => [],
            'quote' => [],
            'category' => ['required', 'string'],
            'subtype' => [],
            'img1' => ['required', 'string'],
            'img2' => [],
            'img3' => [],
            'img4' => [],
            'description' => [],
            'seo_title' => [],
            'seo_description' => [],
        ]);


        Product::create($new_data);

        Toast::info("Продукт добавлен");

        return redirect()->route('platform.product');
    }
}

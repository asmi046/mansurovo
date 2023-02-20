<?php

namespace App\Orchid\Screens\Product;

use Orchid\Screen\Screen;

use App\Models\Product;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use Illuminate\Http\Request;

class ProductCreateScreen extends Screen
{
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
        return 'Создание категории';
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

                Picture::make('img1')->title('Загрузить изображение №1')->targetRelativeUrl(),
                Picture::make('img2')->title('Загрузить изображение №2')->targetRelativeUrl(),
                Picture::make('img3')->title('Загрузить изображение №3')->targetRelativeUrl(),
                Picture::make('img4')->title('Загрузить изображение №4')->targetRelativeUrl(),

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
            'img1' => ['required', 'string'],
            'img1' => [],
            'img1' => [],
            'img1' => [],
            'description' => [],
            'seo_title' => [],
            'seo_description' => [],
        ]);


        Category::create($new_data);

        Toast::info("Категория добавлена");

        return redirect()->route('platform.product');
    }
}

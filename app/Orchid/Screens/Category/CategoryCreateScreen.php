<?php

namespace App\Orchid\Screens\Category;

use Orchid\Screen\Screen;

use App\Models\Category;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Picture;

use Illuminate\Http\Request;

class CategoryCreateScreen extends Screen
{
            /**
     * Permission
     *
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'per.category'
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

                Input::make('name')
                    ->title('Имя категории')
                    ->help('Для связки с товаром')
                    ->horizontal(),

                Input::make('title')
                    ->title('Заголовок')
                    ->help('Заголовок категории')
                    ->horizontal(),

                Input::make('slug')
                    ->title('Окончание ссылки')
                    ->help('Slug категории')
                    ->horizontal(),

                TextArea::make('quote')->title('Цитата'),

                Quill::make('description')->title('Описание'),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ]),

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

                Picture::make('img')->title('Загрузить основное изображение записи')->storage('public')->targetRelativeUrl(),
                Picture::make('banner')->title('Загрузить баннер записи')->storage('public')->targetRelativeUrl(),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Изображения'),
        ];
    }

    public function save_info(Request $request) {

        $new_data = $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'slug' => [],
            'img' => ['required'],
            'banner' => ['required'],
            'quote' => [],
            'description' => [],
            'seo_title' => [],
            'seo_description' => [],
        ]);

        Category::create($new_data);

        Toast::info("Категория добавлена");

        return redirect()->route('platform.category');
    }
}

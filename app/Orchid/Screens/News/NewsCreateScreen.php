<?php

namespace App\Orchid\Screens\News;

use Orchid\Screen\Screen;

use App\Models\News;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\TextArea;

use Illuminate\Http\Request;

class NewsCreateScreen extends Screen
{

    /**
     * Permission
     *
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'per.news'
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
        return 'Добавление новости';
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
                    ->help('Заголовок новости')
                    ->required()
                    ->horizontal(),

                DateTimer::make('news_data')
                    ->value(date("d.m.Y' H:i:s"))
                    ->enableTime()
                    ->horizontal()
                    ->title('Дата публикации'),



                Input::make('slug')
                    ->title('Ссылка')
                    ->help('Отображаемая ссылка (заполнится автоматически)')
                    ->horizontal(),

                TextArea::make('quote')
                    ->title('Цитата')
                    ->required()
                    ->horizontal()
                    ->help('Отрывок для карточки в разделе'),

                Quill::make('description')
                    ->title('Текст новости')
                    ->required()

                    ->help('Полный текст новости (отображается на самой странице)'),

                Picture::make('thumb')->title('Изображение')->storage('public')->required()->targetRelativeUrl(),

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
        ];
    }

    public function save_info(Request $request) {

        $new_data = $request->validate([

            'news_data' => [],
            'title' => ['required', 'string'],
            'slug' => [],
            'thumb' => ['required', 'string'],
            'quote' => ['required', 'string'],
            'description' => ['required', 'string'],
            'seo_title' => [],
            'seo_description' => [],
        ]);


        News::create($new_data);

        Toast::info("Новость добавлена добавлена");

        return redirect()->route('platform.news');
    }
}

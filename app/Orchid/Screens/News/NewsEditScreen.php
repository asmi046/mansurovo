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
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\DateTimer;


use App\Orchid\Layouts\Product\ProductImageTable;

use Illuminate\Http\Request;

class NewsEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */

     public $news;

    public function query($id): iterable
    {
        $news = News::where('id', $id)->first();

        return [
            "news" => $news
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование новости: '.$this->news->title;
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
                    ->value($this->news->title)
                    ->required()
                    ->horizontal(),

                DateTimer::make('news_data')
                    ->value(date("Y-m-d' H:i:s", strtotime($this->news->news_data)))
                    ->enableTime()
                    ->horizontal()
                    ->title('Дата публикации'),



                Input::make('slug')
                    ->title('Ссылка')
                    ->value($this->news->slug)
                    ->help('Отображаемая ссылка (заполнится автоматически)')
                    ->horizontal(),

                TextArea::make('quote')
                    ->title('Цитата')
                    ->required()
                    ->horizontal()
                    ->value($this->news->quote)
                    ->help('Отрывок для карточки в разделе'),

                Quill::make('description')
                    ->title('Текст новости')
                    ->required()
                    ->value($this->news->description)
                    ->help('Полный текст новости (отображается на самой странице)'),

                Picture::make('thumb')->title('Изображение')->storage('public')->value($this->news->thumb)->required()->targetRelativeUrl(),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Основные поля'),

            Layout::rows([
                Input::make('seo_title')
                    ->title('SEO заголовок')
                    ->value($this->news->seo_title)
                    ->help('SEO заголовок')
                    ->horizontal(),

                TextArea::make('seo_description')
                    ->title('SEO описание')
                    ->value($this->news->seo_description)
                    ->help('SEO описание')
                    ->horizontal(),
                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('SEO поля'),
        ];
    }

    public function save_info(News $news, Request $request) {

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


        News::where('id', $news->id)->update($new_data);

        Toast::info("Новость сохранена");
    }
}

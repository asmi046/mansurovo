<?php

namespace App\Orchid\Screens\Category;

use Orchid\Screen\Screen;

use App\Models\Category;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Picture;

use Illuminate\Http\Request;

class CategoryEditScreen extends Screen
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

     public $category;

    public function query($id): iterable
    {
        return [
            "category" => Category::where('id',$id)->first()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование категории: '.$this->category->title;
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
                    ->value($this->category->title)
                    ->help('Для связки с товаром')
                    ->horizontal(),

                Input::make('title')
                    ->title('Заголовок')
                    ->value($this->category->title)
                    ->help('Заголовок категории')
                    ->horizontal(),

                Input::make('slug')
                    ->title('Окончание ссылки')
                    ->value($this->category->slug)
                    ->help('Slug категории')
                    ->horizontal(),

                TextArea::make('quote')->title('Цитата')->value($this->category->quote),

                Quill::make('description')->title('Описание')->value($this->category->description),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ]),

            Layout::rows([
                Input::make('seo_title')
                    ->title('SEO заголовок')
                    ->value($this->category->seo_title)
                    ->help('SEO заголовок')
                    ->horizontal(),

                TextArea::make('seo_description')
                    ->title('SEO описание')
                    ->value($this->category->seo_description)
                    ->help('SEO описание')
                    ->horizontal(),
                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('SEO поля'),

            Layout::rows([

                Picture::make('img')->title('Загрузить основное изображение записи')->targetRelativeUrl()->value($this->category->img),
                Picture::make('banner')->title('Загрузить баннер записи')->targetRelativeUrl()->value($this->category->banner),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Изображения'),
        ];
    }

    public function save_info(Category $category, Request $request) {

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


        Category::where('id', $category->id)->update($new_data);
        Toast::info("Категория сохранена");
    }
}

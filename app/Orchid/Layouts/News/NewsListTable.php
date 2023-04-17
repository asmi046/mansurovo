<?php

namespace App\Orchid\Layouts\News;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

use Orchid\Screen\Fields\Group;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

use Orchid\Support\Color;

class NewsListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'news';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'id'),
            TD::make('thumb', 'Фото')->render(
                function($element) {
                    return "<img width='50' height='50' src='".($element->thumb?$element->thumb:asset("img/noPhoto.jpg"))."'>";
                }
            ),
            TD::make('title', 'Заголовок')->width('35%'),
            TD::make('quote', 'Цитата')->width('35%'),

            TD::make('action', 'Действие')->render(function($element) {
                return  Group::make([
                    Link::make('Редактировать')->route('platform.news_edit',$element->id),
                    Button::make('Удалить')->method('delete_field', [$element->id])->type(Color::DANGER())
                ]);
            })

        ];
    }
}

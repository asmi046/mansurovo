<?php

namespace App\Orchid\Layouts\Vacancy;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

use Orchid\Screen\Fields\Group;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

use Orchid\Support\Color;

class VacancyListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'vacancy';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'id'),
            TD::make('name', 'Наименование'),
            TD::make('place', 'Площадка'),
            TD::make('grafic', 'График работы'),

            TD::make('action', 'Действие')->render(function($element) {
                return  Group::make([
                    Link::make('Редактировать')->route('platform.vacancy_edit',$element->id),
                    Button::make('Удалить')->method('delete_field', [$element->id])->type(Color::DANGER())
                ]);
            })

        ];
    }
}

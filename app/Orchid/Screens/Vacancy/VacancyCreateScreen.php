<?php

namespace App\Orchid\Screens\Vacancy;

use Orchid\Screen\Screen;

use App\Models\Vacancy;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use Illuminate\Http\Request;

class VacancyCreateScreen extends Screen
{
        /**
     * Permission
     *
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'per.vacancy'
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
        return 'Добавление вакансии';
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
                    ->title('Наименование')
                    ->help('Название вакансии')
                    ->horizontal(),

                Input::make('place')
                    ->title('Площадка')
                    ->help('Место работы')
                    ->horizontal(),

                Input::make('grafic')
                    ->title('График работы')
                    ->help('График работы')
                    ->horizontal(),

                Input::make('price')
                    ->title('Заработная плата')
                    ->help('Заработная плата')
                    ->horizontal(),

                Quill::make('ob')->title('Обязанности'),
                Quill::make('treb')->title('Требования'),
                Quill::make('usl')->title('Услуги'),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Основные поля'),
        ];
    }

    public function save_info(Request $request) {

        $new_data = $request->validate([
            'name' => ['required', 'string'],
            'place' => ['required', 'string'],
            'grafic' => ['required', 'string'],
            'price' => [],
            'ob' => [],
            'treb' => [],
            'usl' => [],
        ]);


        Vacancy::create($new_data);

        Toast::info("Категория добавлена");

        return redirect()->route('platform.vacancy');
    }
}

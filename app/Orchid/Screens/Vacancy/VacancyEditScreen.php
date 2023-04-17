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
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Actions\ModalToggle;


use App\Orchid\Layouts\Product\ProductImageTable;

use Illuminate\Http\Request;

class VacancyEditScreen extends Screen
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

     public $vacancy;

    public function query($id): iterable
    {
        $vacancy = Vacancy::where('id', $id)->first();

        return [
            "vacancy" => $vacancy
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование вакансии: '.$this->vacancy->title;
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
                    ->value($this->vacancy->name)
                    ->help('Название вакансии')
                    ->horizontal(),

                Input::make('place')
                    ->title('Площадка')
                    ->value($this->vacancy->place)
                    ->help('Место работы')
                    ->horizontal(),

                Input::make('grafic')
                    ->title('График работы')
                    ->value($this->vacancy->grafic)
                    ->help('График работы')
                    ->horizontal(),

                Input::make('price')
                    ->title('Заработная плата')
                    ->value($this->vacancy->price)
                    ->help('Заработная плата')
                    ->horizontal(),

                Quill::make('ob')->title('Обязанности')->value($this->vacancy->ob),
                Quill::make('treb')->title('Требования')->value($this->vacancy->treb),
                Quill::make('usl')->title('Услуги')->value($this->vacancy->usl),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())
            ])->title('Основные поля'),
        ];
    }

    public function save_info(Vacancy $vacancy, Request $request) {

        $new_data = $request->validate([
            'name' => ['required', 'string'],
            'place' => ['required', 'string'],
            'grafic' => ['required', 'string'],
            'price' => [],
            'ob' => [],
            'treb' => [],
            'usl' => [],
        ]);


        Vacancy::where('id', $vacancy->id)->update($new_data);
        Toast::info("Вакансия сохранена");
    }
}

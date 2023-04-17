<?php

namespace App\Orchid\Screens\Vacancy;

use Orchid\Screen\Screen;

use App\Models\Vacancy;
use App\Orchid\Layouts\Vacancy\VacancyListTable;

use Orchid\Screen\Actions\Link;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;

class VacancyListScreen extends Screen
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
        return [
            "vacancy" => Vacancy::paginate(15)
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Вакансии';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить вакансию')->route('platform.vacancy_create')->type(Color::SUCCESS())
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            VacancyListTable::class
        ];
    }


    public function delete_field($id) {
        $dell_elem = Vacancy::where('id', $id)->first();
        if ($dell_elem ) {
            $dell_elem->delete();
            Toast::info("Вакансия удалена");
        } else {
            Toast::info("Ошибка при удалении");
        }
    }
}

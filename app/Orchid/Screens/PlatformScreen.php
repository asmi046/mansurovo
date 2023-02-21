<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

use App\Models\Vacancy;
use App\Models\Category;
use App\Models\Product;

class PlatformScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'metrics' => [
                'vacancy'    => ['value' => Vacancy::all()->count()],
                'tovars' => ['value' => Product::all()->count()],
                'categorys'   => ['value' => Category::all()->count()],
            ],

        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Агрокомплекс Мансурово';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Сайт - Агрокомплекс Мансурово';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Перейти на сайт')
                ->href(route("home"))
                ->icon('globe-alt'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'Вакансии'    => 'metrics.vacancy',
                'Товаров' => 'metrics.tovars',
                'Категорий' => 'metrics.categorys',
            ]),
        ];
    }
}

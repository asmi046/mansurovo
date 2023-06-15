<?php

namespace App\Orchid\Screens\Semena;

use Orchid\Screen\Screen;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\SimpleMDE;
use App\Models\Option;


class SemenaBuyScreen extends Screen
{

    public $kp;

    /**
     * Permission
     *
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'per.product'
        ];
    }

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $kp = Option::where('name', "semenabuy")->first();
        // dd($kp);
        return [
            "kp" => $kp
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Коммерческое предложение по семенам';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Quill::make('value')->toolbar(["text", "color", "header", "list", "format", "media"])->title('Текст КП')->value($this->kp->value),
                Matrix::make('options')
    ->columns([
        'Attribute',
        'Value',
        'Units',
    ])
                ])
        ];
    }
}

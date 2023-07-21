<?php

namespace App\Orchid\Screens\Semena;

use Orchid\Screen\Screen;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\SimpleMDE;
use App\Models\Option;

use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;

use Illuminate\Http\Request;

use Orchid\Support\Facades\Toast;

class SemenaBuyScreen extends Screen
{

    public $semenabuy_bottom_text;
    public $semenabuy_top_text;
    public $semenabuy_table;

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
        $semenabuy_bottom_text = Option::where('name', "semenabuy_bottom_text")->first();
        $semenabuy_top_text = Option::where('name', "semenabuy_top_text")->first();
        $semenabuy_table = Option::where('name', "semenabuy_table")->first();

        return [
            "semenabuy_bottom_text" => $semenabuy_bottom_text?$semenabuy_bottom_text->value:"",
            "semenabuy_top_text" => $semenabuy_top_text?$semenabuy_top_text->value:"",
            "semenabuy_table" => $semenabuy_table?$semenabuy_table->value_json:""
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
                Quill::make('semenabuy_top_text')->toolbar(["text", "color", "header", "list", "format", "media"])->title('Текст КП (верх)')->value($this->semenabuy_top_text),

                Matrix::make('semenabuy_table')->columns([
                    'Наименование культуры, сорт',
                    'Год урожая',
                    'Категория семян',
                    'Регион допуска',
                    'Количество, тн',
                    'Цена без обработки, руб/тн',
                    'Обработка препаратом (Имидор Про (0,75л/т)+ Тебу 60 (0,4 л/т)+ Нагро (0,5 л/т)',

                ])->value($this->semenabuy_table),

                Quill::make('semenabuy_bottom_text')->toolbar(["text", "color", "header", "list", "format", "media"])->title('Текст КП (низ)')->value($this->semenabuy_bottom_text),

                Button::make('Сохранить')->method('save_info')->type(Color::SUCCESS())

                ])
        ];
    }

    public function save_info(Request $request) {

        Option::where('name', "semenabuy_bottom_text")->update(['value' => $request->input("semenabuy_bottom_text")]);
        Option::where('name', "semenabuy_top_text")->update(['value' => $request->input("semenabuy_top_text")]);
        Option::where('name', "semenabuy_table")->update(['value_json' => $request->input("semenabuy_table")]);

        Toast::info("Данные  сохранены");
    }
}

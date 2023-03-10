<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work;

class WorkController extends Controller
{
    public function index() {
        $work = Work::all();
        return view('work', ['works' => $work]);
    }

    // Страница растеневодства

    public function rastenevodstvo_show() {
        return view('rastenevodstvo');
    }

    // Страница животноводство

    public function givotnovodstvo_show() {
        return view('givotnovodstvo');
    }

    // Страница конезавод

    public function konezavod_show() {
        return view('konezavod');
    }
}

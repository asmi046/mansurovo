<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class WorkController extends Controller
{
    public function index() {
        return view('work');
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

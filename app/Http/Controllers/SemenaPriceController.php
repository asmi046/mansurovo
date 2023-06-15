<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemenaPriceController extends Controller
{
    public function index() {

        return view("semena-buy");
    }
}

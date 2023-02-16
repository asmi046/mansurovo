<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vacancy;

class CareerController extends Controller
{
    public function index() {
        $all_vak = Vacancy::all();
        return view('career', ["vacancy" => $all_vak]);
    }
}

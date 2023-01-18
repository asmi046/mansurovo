<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;



class IndexController extends Controller
{

    public function index() {
        return view('index');
    }
}

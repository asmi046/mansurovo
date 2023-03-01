<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Models\News;



class IndexController extends Controller
{

    public function index() {
        $main_year = date("Y");

        $main_news = News::where("news_data", '>', $main_year."-01-01")->take(4)->get();

        // dd($main_year, $main_news);

        return view('index', ['news' => $main_news]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function newspage($slug) {

        $news = News::where('slug', $slug)->first();

        if($news == null) abort('404');

        return view('newspage', ['info' => $news]);
    }

    public function index(Request $request) {

        $all_news = News::select("news_data")->orderBy('news_data', 'desc')->groupBy('news_data')->get();
        $all_news_year = [];

        foreach($all_news as $elem) {
            $all_news_year[strval(date("Y", strtotime($elem->news_data)))] = date("Y", strtotime($elem->news_data));
        }

        if (empty($request->input('current_yer')))
            $main_year = date("Y");
        else
            $main_year = $request->input('current_yer');


        $next_year = $main_year+1;
        $main_news = News::where("news_data", '>', $main_year."-01-01")->where("news_data", '<', $next_year."-01-01")->get();

        return view('news', ['news' => $main_news, 'all_yer' => $all_news_year, 'current_yer' => $main_year]);
    }
}

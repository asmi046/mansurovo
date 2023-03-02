<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Vacancy;
use App\Models\News;

class SearchController extends Controller
{
    public function index(Request $request) {

        $search_query = $request->input('search');

        $product_search = Product::with("product_category")->where('title', "LIKE", "%".$search_query."%")
                                    ->orWhere('quote', "LIKE", "%".$search_query."%")
                                    ->orWhere('description', "LIKE", "%".$search_query."%")->get();

        $news_search = News::where('title', "LIKE", "%".$search_query."%")
                                    ->orWhere('quote', "LIKE", "%".$search_query."%")
                                    ->orWhere('description', "LIKE", "%".$search_query."%")->get();

        $vacancy_search = Vacancy::where('name', "LIKE", "%".$search_query."%")
                                    ->orWhere('place', "LIKE", "%".$search_query."%")
                                    ->orWhere('usl', "LIKE", "%".$search_query."%")
                                    ->orWhere('treb', "LIKE", "%".$search_query."%")
                                    ->orWhere('usl', "LIKE", "%".$search_query."%")->get();

        // dd($product_search, $news_search, $vacancy_search);

        return view('search', [
            "search_query" => $search_query,
            "product" => $product_search,
            "news" => $news_search,
            "vacancy" => $vacancy_search
        ]);
    }
}

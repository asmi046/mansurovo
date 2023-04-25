<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function show_page($slug, $slug_p) {
        $product_info = Product::where('slug', $slug_p)->first();
        $cat_info = Category::where("slug", $slug)->first();

        return view('product_page', ["product_info" => $product_info, "cat_info" => $cat_info]);
    }

    public function show_cat($slug, Request $request) {


        if (empty($request->input('subtype')))
            $main_subtype = "%";
        else
            $main_subtype = $request->input('subtype');

        $cat_info = Category::where("slug", $slug)->first();
        $products = $cat_info->cat_product()->where('subtype', 'LIKE', $main_subtype)->orWhere('subtype', NULL)->get();

        $subtype = $cat_info->cat_product()->select('subtype')->groupBy('subtype')->get();

        return view('category', ["cat_info" => $cat_info, "products" => $products, 'category_slug'=>$slug, "subtype" =>$subtype, "main_subtype" => $main_subtype]);
    }

    public function index() {
        $all_cat = Category::all();
        return view('product', ["categories" => $all_cat]);
    }
}

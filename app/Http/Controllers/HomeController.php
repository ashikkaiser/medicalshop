<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductStock;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('frontend.index.index', compact('categories', 'products'));
    }
    public function product(Product $product)
    {
        // dd(session()->get('cart')[0]['variant']->variant);
        return view('frontend.index.product', compact('product'));
    }
    public function variantProduct(Request $request){
       $data =  ProductStock::where('product_id',$request->product_id)->where('uid',$request->value)->get();
       $product = Product::find($request->product_id);
        // return view('frontend.product.ajax',compact('data','product'));
        return $data;
    }
    public function AjaxProduct(Request $request){
       $data =  ProductStock::find($request->value);
    //    $product = Product::find($request->product_id);
        // return view('frontend.product.ajax',compact('data','product'));
        return $data;
    }
}

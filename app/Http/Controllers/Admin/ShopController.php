<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('backend.shop.index');
    }
    public function create(){
        return view('backend.shop.create');
    }
    public function store(Request $request){
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->title = $request->title;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        $shop->shop_logo = $request->shop_logo->store('uploads/shop');
        $shop->shop_favicon = $request->shop_favicon->store('uploads/shop');
        $shop->meta_decription = $request->meta_decription;
        $shop->meta_keyword = $request->meta_keyword;
        $shop->save();
        return redirect()->route('shop.index')->with('success', 'New Shop Created Succesfully!!');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.category.index',compact('categories'));
    }
    public function store(Request $request){
         $category = new Category();
         $category->name = $request->name;
         $category->slug = Str::slug($request->name);
         $category->meta_title= $request->meta_title;
         $category->meta_dec = $request->meta_dec;
         $category->save();
         return redirect()->route('category.index')->with('success','category added');

    }

    public function update(){

    }
    public function destroy(){

    }
}

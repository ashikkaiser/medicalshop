<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }
    public function create()
    {
        $Allshop = Shop::all();
        return view('backend.product.create', compact('Allshop'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $product = new Product();
        $product->shop = $request->shop;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->added_by = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->current_stock = $request->current_stock;
        $product->photos = $request->photos->store('uploads/products/photos');
        $product->unit = $request->unit;
        $product->meta_tag = $request->meta_tag;
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        
        if($product->meta_title == null) {
            $product->meta_title = $product->name;
        }

        if($product->meta_description == null) {
            $product->meta_description = $product->description;
        }
        $choice_options = array();
        if ($request->has('choice_no')) {
            foreach ($request->choice_no as $key => $no) {
                $str = 'choice_options_' . $no;
                $item['attribute_id'] = $no;
                $data = array();
                foreach (explode(',', $request[$str][0]) as $key => $eachValue) {
                    array_push($data, $eachValue);
                }
                $item['values'] = $data;
                array_push($choice_options, $item);
            }
        }
        if (!empty($request->choice_no)) {
            $product->attributes = $request->choice_no;
        } else {
            $product->attributes =array();
        }

        $product->choice_options =$choice_options;
        $product->save();
        $options = array();
        if ($request->has('choice_no')) {
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_' . $no;
                $data = array();
                foreach (explode(',', $request[$name][0]) as $key => $item) {
                    array_push($data, $item);
                }
                array_push($options, $data);
            }
        }
        $combinations = combinations($options);
        if (count($combinations[0]) > 0) {
            $product->variant_product = 1;
            foreach ($combinations as $key => $combination) {
                $str = '';
                foreach ($combination as $key => $item) {
                    if ($key > 0) {
                        $str .= '-' . str_replace(' ', '', $item);
                    } else {
                        $str .= str_replace(' ', '', $item);
                    }
                }
                $product_stock = ProductStock::where('product_id', $product->id)->where('variant', $str)->first();
                if ($product_stock == null) {
                    $product_stock = new ProductStock;
                    $product_stock->product_id = $product->id;
                }

                $product_stock->variant = $str;
                $product_stock->uid = explode("-",$str)[0];
                $product_stock->price = $request['price_' . str_replace('.', '_', $str)];
                $product_stock->sku = $request['sku_' . str_replace('.', '_', $str)];
                $product_stock->qty = $request['qty_' . str_replace('.', '_', $str)];
                $product_stock->save();
            }
        }
        
        return redirect()->route('products.index');
    }
    public function sku_combination(Request $request)
    {
        $options = array();
        $unit_price = $request->unit_price;
        $product_name = $request->name;

        if ($request->has('choice_no')) {
            foreach ($request->choice_no as $key => $no) {
                $name = 'choice_options_' . $no;
                $my_str = implode('', $request[$name]);
                array_push($options, explode(',', $my_str));
            }
        }

        $combinations = combinations($options);
        return view('partials.sku_combinations', compact('combinations', 'unit_price', 'product_name'));
    }



    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    
}

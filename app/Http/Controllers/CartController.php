<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductStock;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $data = array();
        $data['id'] = $product->id;
        $str = $request->variant;
        $data['variant_id']= $request->variant;
        $data['variant'] = ProductStock::find($request->variant);

        // if($product->tax_type == 'percent'){
        //     $tax = ($price*$product->tax)/100;
        // }
        // elseif($product->tax_type == 'amount'){
        //     $tax = $product->tax;
        // }
        $data['quantity'] = $request->quantity;
        $data['price'] = $data['variant']->price;
        $data['uid'] = $data['variant']->uid;
        // $data['tax'] = $tax;
        if ($request->quantity == null) {
            $data['quantity'] = 1;
        }
        if ($request->session()->has('cart')) {
            $foundInCart = false;
            $cart = collect();

            foreach ($request->session()->get('cart') as $key => $cartItem) {
                if ($cartItem['id'] == $request->id) {
                    if ($cartItem['variant']->id == $str) {
                        $foundInCart = true;
                        $cartItem['quantity'] += $request['quantity'];
                    }
                }
                $cart->push($cartItem);
            }

            if (!$foundInCart) {
                $cart->push($data);
            }
            $request->session()->put('cart', $cart);
        } else {
            $cart = collect([$data]);
            $request->session()->put('cart', $cart);
        }
        // return $request->all();
    }

    public function removeFromCart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart', collect([]));
            $cart->forget($request->key);
            $request->session()->put('cart', $cart);
        }
        return 0;
    }
    public function updateNavCart(Request $request)
    {
        return view('frontend.cart.cart');
    }
}

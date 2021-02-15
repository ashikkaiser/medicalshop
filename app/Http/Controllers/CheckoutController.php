<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {

        return view('frontend.cart.checkout');
    }
    public function shoppingcart()
    {
        return view('frontend.cart.shoppingcart');
    }
    public function checkout(Request $request)
    {
        if ($request->has('create_account')) {
            $user = new User();
            $user->firstname= $request->firstname;
            $user->lastname= $request->lastname;
            $user->company = $request->company;
            $user->country = $request->country;
            $user->address = $request->address;
            $user->zip = $request->zip;
            $user->city = $request->city;
            $user->phone = $request->phone;
            $user->email= $request->email;
            if($user->save()){
                $order = new Order();
                $order->item= session()->get('cart');
                $order->status = 'unpaid';
                if($order->save()){
                    
                }

            }

        }
    }
}

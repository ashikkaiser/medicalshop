<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.layouts.app');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/order-{product:slug}-online', 'HomeController@product')->name('Singleproduct');
Route::post('/ajax-product-dose', 'HomeController@variantProduct')->name('variantProduct');
Route::post('/ajax-product-details', 'HomeController@AjaxProduct')->name('AjaxProduct');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/shopping-cart', 'CheckoutController@shoppingcart')->name('shoppingcart');


Route::resource('category', 'Admin\CategoryController');
Route::resource('products', 'Admin\ProductController');
Route::post('ajax/sku_combination', 'Admin\ProductController@sku_combination')->name('ajax.sku_combination');
Route::resource('shop', 'Admin\ShopController');


Route::post('/cart/addToCart', 'CartController@addToCart')->name('cart.addToCart');
Route::post('/cart/removeFromCart', 'CartController@removeFromCart')->name('cart.removeFromCart');
Route::post('/cart/updateNavCart', 'CartController@updateNavCart')->name('cart.updateNavCart');




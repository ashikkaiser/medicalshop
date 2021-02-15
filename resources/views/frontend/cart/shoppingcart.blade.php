@extends('frontend.layouts.app')
@section('content')
    <section class="section--shopping-cart">
        <div class="container shopping-container">
            <h2 class="page__title">Shopping Cart</h2>
            <div class="shopping-cart__content">
                <div class="row m-0">
                    <div class="col-12 col-lg-8">
                        <div class="shopping-cart__products">
                            <div class="shopping-cart__table">
                                <div class="shopping-cart-light">
                                    <div class="shopping-cart-row">
                                        <div class="cart-product">Product</div>
                                        <div class="cart-price">Price</div>
                                        <div class="cart-quantity">Quantity</div>
                                        <div class="cart-total">Total</div>
                                        <div class="cart-action"> </div>
                                    </div>
                                </div>
                                <div class="shopping-cart-body">
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach (Session::get('cart') as $key => $cartItem)
                                        @php
                                        $product = \App\Models\Product::find($cartItem['id']);
                                        $total = $total + $cartItem['price']*$cartItem['quantity'];

                                        @endphp
                                        <div class="shopping-cart-row">
                                            <div class="cart-product">
                                                <div class="ps-product--mini-cart"><a href="product-default.html"><img
                                                            class="ps-product__thumbnail"
                                                            src="{{ $product->photos }}" alt="alt"></a>
                                                    <div class="ps-product__content">
                                                        <h5><a class="ps-product__name" style="min-width: 168px" href=""> {{ $product->name }}</a>
                                                        </h5>
                                                        <p class="ps-product__unit">{{ $cartItem['variant']->variant }}</p>
                                                        <p class="ps-product__meta">Price: <span
                                                                class="ps-product__price">{{ $cartItem['price'] }}</span></p>
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                    class="icon-minus"></i></button>
                                                            <input class="quantity" min="0" name="quantity" value="{{ $cartItem['quantity'] }}"
                                                                type="number">
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                        <span class="ps-product__total">Total: <span>${{ $cartItem['price'] }} </span></span>
                                                    </div>
                                                    <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                </div>
                                            </div>
                                            <div class="cart-price"><span class="ps-product__price">${{ $cartItem['price'] }}</span>
                                            </div>
                                            <div class="cart-quantity">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                            class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="{{ $cartItem['quantity'] }}" type="number">
                                                    <button class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                            class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="cart-total"> <span class="ps-product__total">${{ $cartItem['price']*$cartItem['quantity'] }} </span>
                                            </div>
                                            <div class="cart-action" onclick="removeFromCart({{ $key }})"> <i class="icon-trash2"></i></div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="shopping-cart__step"><a class="clear-item" href="javascript:void(0);">Clear all
                                    items</a><a class="button right" href="javascript:void(0);"><i class="icon-sync">
                                    </i>Update Cart</a><a class="button left" href="shop-view-grid.html"><i
                                        class="icon-arrow-left"></i>Continue Shopping</a></div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="shopping-cart__block">
                                        <h3 class="block__title">Using A Promo Code?</h3>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Coupon code">
                                            <div class="input-group-append">
                                                <button class="btn">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="shopping-cart__block">
                                        <h3 class="block__title">Calculate Shipping</h3>
                                        <div class="input-group">
                                            <select class="single-select2 select2-hidden-accessible" name="state"
                                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option value="uk" data-select2-id="3">United Kingdom</option>
                                                <option value="vn">Viet Nam</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Town/ City">
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Postcode/ ZIP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="shopping-cart__right">
                            <div class="shopping-cart__total">
                                <p class="shopping-cart__subtotal"><span>Subtotal</span><span class="price">${{ $total }}</span>
                                </p>
                                <p class="shopping-cart__shipping">Shipping<br><span>FREE SHIPPING</span><br>Estimate for
                                    <b>United Kingdom</b>
                                </p>
                                <p class="shopping-cart__subtotal"><span><b>TOTAL</b></span><span
                                        class="price-total">${{ $total }}</span></p>
                            </div><a class="btn shopping-cart__checkout" href="{{ route('checkout') }}">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('script')



@endsection

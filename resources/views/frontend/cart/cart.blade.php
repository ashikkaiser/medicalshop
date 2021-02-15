
    <div class="mini-cart--content">
        <div class="mini-cart--overlay"></div>
        <div class="mini-cart--slidebar cart--box">
            <div class="mini-cart__header">
                <div class="cart-header-title">
                    <h5>Shopping Cart({{ Session::get('cart')->count() }})</h5><a class="close-cart"
                        href="javascript:void(0);"><i class="icon-arrow-right"></i></a>
                </div>
            </div>
            <div class="mini-cart__products">
                <div class="out-box-cart">
                    <div class="triangle-box">
                        <div class="triangle"></div>
                    </div>
                </div>
                <ul class="list-cart">
                    @php
                    $total = 0;
                    @endphp
                    @foreach (Session::get('cart') as $key => $cartItem)
                        @php
                        $product = \App\Models\Product::find($cartItem['id']);
                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                        // $product_name_with_choice = $product->getTranslation('name');
                        // if ($cartItem['variant'] != null) {
                        // $product_name_with_choice = $product->getTranslation('name').' -
                        // '.$cartItem['variant'];

                        // }
                        @endphp
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img
                                        class="ps-product__thumbnail" src="{{ $product->photos }}" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name"
                                        href="product-default.html">{{ $product->name }}</a>
                                    <p class="ps-product__unit">{{ $cartItem['variant']->variant }}</p>
                                    <p class="ps-product__meta"> <span
                                            class="ps-product__price">{{ $cartItem['price'] }}</span><span
                                            class="ps-product__quantity">(x{{ $cartItem['quantity'] }})</span>
                                    </p>
                                </div>
                                <div class="ps-product__remove" onclick="removeFromCart({{ $key }})"><i
                                        class="icon-trash2"></i>
                                </div>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
            <div class="mini-cart__footer row">
                <div class="col-6 title">TOTAL</div>
                <div class="col-6 text-right total">$ {{ $total }}</div>
                <div class="col-12 d-flex"><a class="view-cart" href="{{ route('shoppingcart') }}">View
                        cart</a><a class="checkout" href="{{ route('checkout') }}">Checkout</a></div>
            </div>
        </div>
    </div>

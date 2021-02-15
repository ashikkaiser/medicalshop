
@foreach ($data as $item)
<div class="section-shop--listing">
    <div class="product-item">
        <div class="ps-product--list">
            <div class="ps-product__left">
                <div class="ps-product__extent">
                    {{-- <a href="product-default.html">
                        <img class="ps-product__thumbnail" src="{{ $product->photos }}" alt="alt" />
                    </a> --}}
                    
                    <div class="ps-product__footer">
                        <div class="def-number-input number-input safari_only">
                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="icon-minus"></i>
                            </button>
                            <input class="quantity" onclick="change()" min="0" name="quantity" value="1" type="number" />
                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="icon-plus"></i>
                            </button>
                        </div>
                        <div class="ps-product__total">Total: <span>{{ $item->price }}</span>
                        </div>
                    </div>
                </div>
                <div class="ps-product__content">
                   
                    <a class="ps-product__name" href="#">{{ str_replace('-',' ',$item->variant) }}</a>
                   
                    <div class="ps-product__des">
                        <ul class="ps-list--rectangle">
                            <li> <span><i class="icon-square"></i></span>Dose: {{ $item->uid }}</li>
                            <li> <span><i class="icon-square"></i></span>Pill: {{ explode("-",$item->variant)[1] }}</li>
                            <li> <span><i class="icon-square"></i></span>Package delivery insurance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ps-product__right">
                <div class="ps-product__price">${{ $item->price }}</div>
                <div class="ps-product__unit">250g</div>
                <div  class="btn ps-product__addcart" onclick="addToCart();"><i  class="icon-cart"></i>Add to cart </div>
                {{-- <button class="btn ps-product__addcart" onclick="addToCart()" data-toggle="modal" data-target="#popupAddToCart"><i
                        class="icon-cart"></i>Add to cart</button> --}}
              
            </div>
        </div>
    </div>
</div>
@endforeach

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.html" rel="apple-touch-icon">
    <link href="favicon.html" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    
    <meta name="description" content="">
    <title>Farmart - Html Template</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ env('THEME') }}fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Dogfalo/materialize@master/extras/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ env('THEME') }}plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{ env('THEME') }}css/style.css">
</head>

<body>
    @include('frontend.layouts.header')
    <main class="no-main">

        <section class="section-shop">
            {{-- <div class="shop__header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="owl-carousel shop__header--carousel owl-loaded owl-drag owl-hidden"
                                data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0"
                                data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1"
                                data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1"
                                data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-2310px, 0px, 0px); transition: all 1s ease 0s; width: 5390px;">
                                        <div class="owl-item cloned" style="width: 770px;"><a
                                                href="shop-categories.html"><img src="img/shop/shop-grid-side-02.jpg"
                                                    alt=""></a></div>
                                        <div class="owl-item cloned" style="width: 770px;"><a
                                                href="shop-categories.html"><img src="img/shop/shop-grid-side-03.jpg"
                                                    alt=""></a></div>
                                        <div class="owl-item" style="width: 770px;"><a href="shop-categories.html"><img
                                                    src="img/shop/shop-grid-side-01.jpg" alt=""></a></div>
                                        <div class="owl-item active" style="width: 770px;"><a
                                                href="shop-categories.html"><img src="img/shop/shop-grid-side-02.jpg"
                                                    alt=""></a></div>
                                        <div class="owl-item" style="width: 770px;"><a href="shop-categories.html"><img
                                                    src="img/shop/shop-grid-side-03.jpg" alt=""></a></div>
                                        <div class="owl-item cloned" style="width: 770px;"><a
                                                href="shop-categories.html"><img src="img/shop/shop-grid-side-01.jpg"
                                                    alt=""></a></div>
                                        <div class="owl-item cloned" style="width: 770px;"><a
                                                href="shop-categories.html"><img src="img/shop/shop-grid-side-02.jpg"
                                                    alt=""></a></div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                            class="icon-chevron-left"></i></button><button type="button"
                                        role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button>
                                </div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot active"><span></span></button></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="shop__header__promo">
                                <div class="promo-item mb-2"><a href="shop-with-banner.html"><img
                                            src="img/shop/shop-grid-promo-01.jpg" alt=""></a></div>
                                <div class="promo-item"><a href="shop-all-brands.html"><img
                                            src="img/shop/shop-grid-promo-02.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="shop__header mobile">
                <div class="owl-carousel shop__header--carousel owl-loaded owl-drag" data-owl-auto="true"
                    data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                    data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                    data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-822px, 0px, 0px); transition: all 1s ease 0s; width: 2877px;">
                            <div class="owl-item cloned" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-2.jpg" alt=""></a></div>
                            <div class="owl-item cloned" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-3.jpg" alt=""></a></div>
                            <div class="owl-item active" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-1.jpg" alt=""></a></div>
                            <div class="owl-item" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-2.jpg" alt=""></a></div>
                            <div class="owl-item" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-3.jpg" alt=""></a></div>
                            <div class="owl-item cloned" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-1.jpg" alt=""></a></div>
                            <div class="owl-item cloned" style="width: 411px;"><a href="shop-categories.html"><img
                                        src="img/shop/shop-grid-mobile-side-2.jpg" alt=""></a></div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                class="icon-chevron-left"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="icon-chevron-right"></i></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button></div>
                </div>
                <div class="container">
                    <div class="shop__header__promo">
                        <div class="promo-item"><a href="shop-with-banner.html"><img
                                    src="img/shop/shop-grid-mobile-promo-1.jpg" alt=""></a></div>
                        <div class="promo-item"><a href="shop-all-brands.html"><img
                                    src="img/shop/shop-grid-mobile-promo-2.jpg" alt=""></a></div>
                    </div>
                </div>
            </div> --}}
            <div class="container">
                @yield('content')
            </div>
        </section>






        <section class="section-recent--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Your Recent Viewed</h3><a class="ps-block__view"
                        href="shop-categories.html">View all <i class="icon-chevron-right"></i></a>
                </div>
                <div class="recent__content">
                    <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="true" data-owl-loop="true"
                        data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                        data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5"
                        data-owl-item-lg="8" data-owl-item-xl="8" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1395px, 0px, 0px); transition: all 1s ease 0s; width: 2676px;">
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_28b.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_16a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_31a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_15a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_5a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_32a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_1a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_2a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_30a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_10a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_18a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_28b.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item active" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_16a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item active" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_31a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item active" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_15a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_5a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_32a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_1a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_2a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_30a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_10a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_18a.jpg"
                                            alt="alt"></a></div>
                                <div class="owl-item cloned" style="width: 116.333px;"><a class="recent-item"
                                        href="shop-categories.html"><img src="img/products/01-Fresh/01_28b.jpg"
                                            alt="alt"></a></div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                    class="icon-chevron-left"></i></button><button type="button" role="presentation"
                                class="owl-next"><i class="icon-chevron-right"></i></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                role="button" class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid quickview-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="true"
                                        data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true"
                                        data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                                        data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1"
                                        data-owl-duration="1000" data-owl-mousedrag="on">




                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                                <div class="owl-item">
                                                    <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                            src="img/products/01-Fresh/01_1a.jpg" alt="alt"></div>
                                                </div>
                                                <div class="owl-item">
                                                    <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                            src="img/products/01-Fresh/01_2a.jpg" alt="alt"></div>
                                                </div>
                                                <div class="owl-item">
                                                    <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                            src="img/products/01-Fresh/01_4a.jpg" alt="alt"></div>
                                                </div>
                                                <div class="owl-item">
                                                    <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                            src="img/products/01-Fresh/01_9a.jpg" alt="alt"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav"><button type="button" role="presentation"
                                                class="owl-prev"><i class="icon-chevron-left"></i></button><button
                                                type="button" role="presentation" class="owl-next"><i
                                                    class="icon-chevron-right"></i></button></div>
                                        <div class="owl-dots"><button role="button"
                                                class="owl-dot"><span></span></button><button role="button"
                                                class="owl-dot"><span></span></button><button role="button"
                                                class="owl-dot active"><span></span></button><button role="button"
                                                class="owl-dot"><span></span></button></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview__product">
                                        <div class="product__header">
                                            <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                            <div class="product__meta">
                                                <div class="product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select
                                                            class="rating-stars" style="display: none;">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected="selected">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        <div class="br-widget"><a href="#" data-rating-value="1"
                                                                data-rating-text="1" class="br-selected"></a><a href="#"
                                                                data-rating-value="2" data-rating-text="2"
                                                                class="br-selected"></a><a href="#"
                                                                data-rating-value="3" data-rating-text="3"
                                                                class="br-selected"></a><a href="#"
                                                                data-rating-value="4" data-rating-text="4"
                                                                class="br-selected br-current"></a><a href="#"
                                                                data-rating-value="5" data-rating-text="5"></a>
                                                            <div class="br-current-rating">4</div>
                                                        </div>
                                                    </div><span>4 customer reviews</span>
                                                </div>
                                                <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__price"><span class="sale">$5.49</span><span
                                                    class="price">$6.90</span><span class="off">25% Off</span></div>
                                            <p class="product__unit">300g</p>
                                            <div class="alert__success">Availability: <span>34 in stock</span></div>
                                            <ul>
                                                <li>Type: Organic</li>
                                                <li>MFG: Jun 4, 2020</li>
                                                <li>LIFE: 30 days</li>
                                            </ul>
                                        </div>
                                        <div class="product__action">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                        class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                        class="icon-plus"></i></button>
                                            </div>
                                            <button class="btn product__addcart"> <i class="icon-cart"></i>Add to
                                                cart</button>
                                            <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                            <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                        </div>
                                        <div class="product__footer">
                                            <div class="ps-social--share"><a class="ps-social__icon facebook"
                                                    href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span
                                                        class="ps-social__number">0</span></a><a
                                                    class="ps-social__icon facebook" href="#"><i
                                                        class="fa fa-facebook-square"></i><span>Like</span><span
                                                        class="ps-social__number">0</span></a><a
                                                    class="ps-social__icon twitter" href="#"><i
                                                        class="fa fa-twitter"></i><span>Like</span></a><a
                                                    class="ps-social__icon" href="#"><i
                                                        class="fa fa-plus-square"></i><span>Like</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef
                                Topside" successfully added to you cart. <a href="shopping-cart.html">View cart(3)</a>
                            </div>
                            <hr>
                            <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                            <div class="cart__content">
                                <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="true" data-owl-loop="true"
                                    data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true"
                                    data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2"
                                    data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000"
                                    data-owl-mousedrag="on">





                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="owl-item">
                                                <div class="cart-item">
                                                    <div class="ps-product--standard"><a
                                                            href="product-default.html"><img
                                                                class="ps-product__thumbnail"
                                                                src="img/products/01-Fresh/01_35a.jpg" alt="alt"></a>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i
                                                                    class="icon-store"></i>Farmart</p><a
                                                                href="product-default.html">
                                                                <h5 class="ps-product__name">Extreme Budweiser Light Can
                                                                </h5>
                                                            </a>
                                                            <p class="ps-product__unit">500g</p>
                                                            <div class="ps-product__rating">
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="rating-stars" style="display: none;">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4" selected="selected">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                    <div class="br-widget"><a href="#"
                                                                            data-rating-value="1" data-rating-text="1"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="2" data-rating-text="2"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="3" data-rating-text="3"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="4" data-rating-text="4"
                                                                            class="br-selected br-current"></a><a
                                                                            href="#" data-rating-value="5"
                                                                            data-rating-text="5"></a>
                                                                        <div class="br-current-rating">4</div>
                                                                    </div>
                                                                </div><span>(4)</span>
                                                            </div>
                                                            <p class="ps-product-price-block"><span
                                                                    class="ps-product__sale">$8.90</span><span
                                                                    class="ps-product__price">$9.90</span><span
                                                                    class="ps-product__off">15% Off</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="cart-item">
                                                    <div class="ps-product--standard"><a
                                                            href="product-default.html"><img
                                                                class="ps-product__thumbnail"
                                                                src="img/products/01-Fresh/01_16a.jpg" alt="alt"></a>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i class="icon-store"></i>Karery
                                                                Store</p><a href="product-default.html">
                                                                <h5 class="ps-product__name">Honest Organic Still
                                                                    Lemonade</h5>
                                                            </a>
                                                            <p class="ps-product__unit">100g</p>
                                                            <div class="ps-product__rating">
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="rating-stars" style="display: none;">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5" selected="selected">5</option>
                                                                    </select>
                                                                    <div class="br-widget"><a href="#"
                                                                            data-rating-value="1" data-rating-text="1"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="2" data-rating-text="2"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="3" data-rating-text="3"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="4" data-rating-text="4"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="5" data-rating-text="5"
                                                                            class="br-selected br-current"></a>
                                                                        <div class="br-current-rating">5</div>
                                                                    </div>
                                                                </div><span>(14)</span>
                                                            </div>
                                                            <p class="ps-product-price-block"><span
                                                                    class="ps-product__price-default">$1.99</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="cart-item">
                                                    <div class="ps-product--standard"><a
                                                            href="product-default.html"><img
                                                                class="ps-product__thumbnail"
                                                                src="img/products/01-Fresh/01_12a.jpg" alt="alt"></a>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i class="icon-store"></i>John
                                                                Farm</p><a href="product-default.html">
                                                                <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                                            </a>
                                                            <p class="ps-product__unit">100g</p>
                                                            <div class="ps-product__rating">
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="rating-stars" style="display: none;">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                    <div class="br-widget"><a href="#"
                                                                            data-rating-value="1" data-rating-text="1"
                                                                            class="br-selected br-current"></a><a
                                                                            href="#" data-rating-value="2"
                                                                            data-rating-text="2"></a><a href="#"
                                                                            data-rating-value="3"
                                                                            data-rating-text="3"></a><a href="#"
                                                                            data-rating-value="4"
                                                                            data-rating-text="4"></a><a href="#"
                                                                            data-rating-value="5"
                                                                            data-rating-text="5"></a>
                                                                        <div class="br-current-rating">1</div>
                                                                    </div>
                                                                </div><span>(0)</span>
                                                            </div>
                                                            <p class="ps-product-price-block"><span
                                                                    class="ps-product__price-default">$4.49</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="cart-item">
                                                    <div class="ps-product--standard"><a
                                                            href="product-default.html"><img
                                                                class="ps-product__thumbnail"
                                                                src="img/products/01-Fresh/01_15a.jpg" alt="alt"></a>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i
                                                                    class="icon-store"></i>Farmart</p><a
                                                                href="product-default.html">
                                                                <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                                            </a>
                                                            <p class="ps-product__unit">300g</p>
                                                            <div class="ps-product__rating">
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="rating-stars" style="display: none;">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3" selected="selected">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                    <div class="br-widget"><a href="#"
                                                                            data-rating-value="1" data-rating-text="1"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="2" data-rating-text="2"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="3" data-rating-text="3"
                                                                            class="br-selected br-current"></a><a
                                                                            href="#" data-rating-value="4"
                                                                            data-rating-text="4"></a><a href="#"
                                                                            data-rating-value="5"
                                                                            data-rating-text="5"></a>
                                                                        <div class="br-current-rating">3</div>
                                                                    </div>
                                                                </div><span>(6)</span>
                                                            </div>
                                                            <p class="ps-product-price-block"><span
                                                                    class="ps-product__sale">$6.99</span><span
                                                                    class="ps-product__price">$9.90</span><span
                                                                    class="ps-product__off">25% Off</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="cart-item">
                                                    <div class="ps-product--standard"><a
                                                            href="product-default.html"><img
                                                                class="ps-product__thumbnail"
                                                                src="img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg"
                                                                alt="alt"></a>
                                                        <div class="ps-product__content">
                                                            <p class="ps-product__type"><i class="icon-store"></i>Sun
                                                                Farm</p><a href="product-default.html">
                                                                <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                                            </a>
                                                            <p class="ps-product__unit">200g</p>
                                                            <div class="ps-product__rating">
                                                                <div class="br-wrapper br-theme-fontawesome-stars">
                                                                    <select class="rating-stars" style="display: none;">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4" selected="selected">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                    <div class="br-widget"><a href="#"
                                                                            data-rating-value="1" data-rating-text="1"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="2" data-rating-text="2"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="3" data-rating-text="3"
                                                                            class="br-selected"></a><a href="#"
                                                                            data-rating-value="4" data-rating-text="4"
                                                                            class="br-selected br-current"></a><a
                                                                            href="#" data-rating-value="5"
                                                                            data-rating-text="5"></a>
                                                                        <div class="br-current-rating">4</div>
                                                                    </div>
                                                                </div><span>(6)</span>
                                                            </div>
                                                            <p class="ps-product-price-block"><span
                                                                    class="ps-product__sale">$4.90</span><span
                                                                    class="ps-product__price">$3.99</span><span
                                                                    class="ps-product__off">15% Off</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation"
                                            class="owl-prev"><i class="icon-chevron-left"></i></button><button
                                            type="button" role="presentation" class="owl-next"><i
                                                class="icon-chevron-right"></i></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('frontend.layouts.footer')
   
    <script src="{{ env('THEME') }}plugins/jquery.min.js"></script>
    <script src="{{ env('THEME') }}plugins/popper.min.js"></script>
    <script src="{{ env('THEME') }}plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ env('THEME') }}plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ env('THEME') }}plugins/jquery.matchHeight-min.js"></script>
    <script src="{{ env('THEME') }}plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="{{ env('THEME') }}plugins/select2/dist/js/select2.min.js"></script>
    <script src="{{ env('THEME') }}plugins/slick/slick.js"></script>
    <script src="{{ env('THEME') }}plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/Dogfalo/materialize@master/extras/noUiSlider/nouislider.min.js"></script>
    <!-- custom code-->
    @yield('script')
    {{-- <script>
        $("#option-choice-form").submit(function(e) {
            return false;
        });

        function addToCart() {
            // if(checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type: "POST",
                url: "{{ route('cart.addToCart') }}",
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {
                    $('#addToCart-modal-body').html(null);
                    $('.c-preloader').hide();
                    $('#modal-size').removeClass('modal-lg');
                    $('#addToCart-modal-body').html(data.view);
                    //    updateNavCart();
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) + 1);
                }
            });
        } else {
            // AIZ.plugins.notify('warning', 'Please choose all the options');
        }

    </script> --}}
    <script>
        updateNavCart()
        function updateNavCart(){
            $.post("{{ route('cart.updateNavCart') }}", {_token: "{{ csrf_token() }}" }, function(data){
                $('#cart_items').html(data);
            });
        }
        function removeFromCart(key){
            $.post("{{ route('cart.removeFromCart') }}", {_token: "{{ csrf_token() }}", key:key}, function(data){
                updateNavCart();
                // $('#cart-summary').html(data);
                // // AIZ.plugins.notify('success', 'Item has been removed from cart');
                // $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
                $('#cartcount').html(parseInt($('#cartcount').html()) -1);
            });
        }
    </script>
    <script src="{{ env('THEME') }}js/main.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>

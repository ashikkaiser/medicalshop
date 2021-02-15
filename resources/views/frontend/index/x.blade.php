@extends('frontend.layouts.app')
@section('content')
    <section class="section--product-type section-product--default">
        <div class="container">
            <div class="product__header">
                <h3 class="product__name">GENERIC {{ $product->name }}</h3>
            </div>
            <div class="product__detail">
                <form id="option-choice-form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="ps-product--vertical">
                            <img class="ps-product__thumbnail" src="{{ $product->photos }}" alt="alt">
                            <div class="ps-product__content">
                                <h5>{{ $product->name }}</h5>
                                <p class="ps-product-price-block">
                                <div class="ps-product--detail">
                                    <div class="ps-product__variable">
                                        <span>Dose: <span class="ps-product__attribute-value">Select Dose</span></span>
                                        <div class="ps-product__type">
                                            <input type="hidden" value="" id="doseID">
                                            @foreach (Dose($product) as $dose)
                                                <span class="ps-product__attribute attribute-text" for="exampleCheck1" data-value="{{ $dose }}">{{ $dose }}</span>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="ps-product__variable"><span>Color:</span>
                                        <select class="form-control">
                                            <option>Blue</option>
                                            <option>Orange</option>
                                        </select><span class="ps-product__clear">Clear</span>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div id="product"></div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="ps-product--extention">
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-truck"></i></div>
                                    <div class="extention__content"> <b class="text-black">Free Shipping </b>apply to all
                                        orders over <span class="text-success">$100</span></div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-leaf"></i></div>
                                    <div class="extention__content">Guranteed <b class="text-black">100% Organic </b>from
                                        natural farmas </div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item border-none">
                                    <div class="extention__icon"><i class="icon-repeat-one2"></i></div>
                                    <div class="extention__content"> <b class="text-black">1 Day Returns </b>if you change
                                        your mind</div>
                                </div>
                            </div>
                            <div class="extention__block extention__contact">
                                <p> <span class="text-black">Hotline Order: </span>Free 7:00-21:30</p>
                                <h4 class="extention__phone">970978-6290</h4>
                                <h4 class="extention__phone">970343-8888</h4>
                            </div>
                            <p class="extention__footer">Become a Vendor? <a href="register.html">Register now</a></p>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $('.ps-product__attribute').on('click', function() {

                var value = $(this).attr('data-value')
                $('#doseID').val(value)
                axios.post("{{ route('variantProduct') }}",{product_id: "{{ $product->id }}",value:value}).then(res => {
                    $('#product').html(res.data)
                })
            })

        </script>
        <script>
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
    
        </script>
        <script>
          function change(){
              console.log('s')
          }
        </script>
    @endsection

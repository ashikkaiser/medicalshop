@extends('frontend.layouts.app')
@section('content')
    <div class="shop__content">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="ps-shop--sidebar">
                    <div class="sidebar__category">
                        <div class="sidebar__title">ALL CATEGORIES</div>
                        <ul class="menu--mobile">
                            @foreach ($categories as $item)
                                <li class="category-item"> <a href="#">{{ $item->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-12 col-lg-9">



                <div class="filter__mobile">
                    <div class="viewtype--block">
                        <div class="viewtype__sortby">
                            <div class="select">
                                <select class="single-select2-no-search select2-hidden-accessible" name="state"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="popularity" selected="selected" data-select2-id="3">Sort
                                        by popularity</option>
                                    <option value="price">Sort by price</option>
                                    <option value="sale">Sort by sale of</option>
                                </select>
                            </div>
                        </div>
                        <div class="viewtype__select"> <span class="text ps-mobile-filter"><i
                                    class="icon-equalizer"></i>Filter</span>
                            <div class="type"><a href="shop-view-grid.html"><span class="active"><i
                                            class="icon-icons"></i></span></a><a href="shop-view-listing.html"><span><i
                                            class="icon-list4"></i></span></a></div>
                        </div>
                    </div>
                </div>

                <div class="result__sort">
                    <div class="viewtype--block">
                        <div class="viewtype__sortby">
                            <div class="select">
                                <select class="single-select2-no-search select2-hidden-accessible" name="state"
                                    data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    <option value="popularity" selected="selected" data-select2-id="6">Sort
                                        by popularity</option>
                                    <option value="price">Sort by price</option>
                                    <option value="sale">Sort by sale of</option>
                                </select>
                            </div>
                        </div>
                        <div class="viewtype__select"> <span class="text">View: </span>
                            <div class="select">
                                <select class="single-select2-no-search select2-hidden-accessible" name="state"
                                    data-select2-id="7" tabindex="-1" aria-hidden="true">
                                    <option value="25" selected="selected" data-select2-id="9">25 per page
                                    </option>
                                    <option value="12">12 per page</option>
                                    <option value="5">5 per page</option>
                                </select>
                            </div>
                            <div class="type"><a href="shop-view-grid.html"><span><i class="icon-icons"></i></span></a><a
                                    href="shop-view-extended.html"><span class="active"><i
                                            class="icon-grid3"></i></span></a><a href="shop-view-listing.html"><span><i
                                            class="icon-list4"></i></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="result__header mobile">
                    <h4 class="title">29<span>Product Found</span></h4>
                </div>
                <div class="result__content">
                    <div class="section-shop">
                        <div class="row">
                            @foreach ($products as $item)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="ps-product--standard">
                                    <a href="{{ route('Singleproduct',$item->slug) }}">
                                        <img  class="ps-product__thumbnail" src="{{ $item->photos }}"
                                            alt="alt">
                                        </a>
                                       
                                    <div class="ps-product__content">
                                        <h5><a class="ps-product__name" href="{{ route('Singleproduct',$item->slug) }}">{{ $item->name }}</a></h5>
                                        <span class="ps-badge ps-product__offbadge">{{ $item->discount }}% Off </span>
                                        <p class="ps-product__unit">{{implode('|',Dose($item))  }}</p>
                                       
                                        <p class="ps-product-price-block"><span
                                                class="ps-product__price-default">${{ $item->unit_price }} PER PILL</span>
                                        </p>
                                     
                                    </div>
                                    <div class="ps-product__footer">
                                        <a class="ps-product__addcart" href="{{ route('Singleproduct',$item->slug) }}"><i class="icon-cart"></i>Select Pack</a>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            

                        </div>
                    </div>
                    <div class="ps-pagination blog--pagination">
                        <ul class="pagination">
                            <li class="chevron"><a href="#"><i class="icon-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

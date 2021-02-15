<div class="leftbar">
    <div class="sidebar">
        <div class="logobar">
            <a href="{{ url('/') }}" class="logo logo-large"><img src="/assets/images/logo.svg" class="img-fluid"
                    alt="logo"></a>
            <a href="{{ url('/') }}" class="logo logo-small"><img src="/assets/images/small_logo.svg" class="img-fluid"
                    alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="/home">
                        <img src="/assets/images/svg-icon/dashboard.svg" class="img-fluid"
                            alt="dashboard"><span>Dashboard</span><i class=" pull-right"></i>
                    </a>

                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="/assets/images/svg-icon/dashboard.svg" class="img-fluid"
                            alt="dashboard"><span>Shop Management</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('category.index') }}">Shop Category</a></li>
                        <li><a href="{{ route('products.index') }}">All Products</a></li>
                        <li><a href="{{ route('products.create') }}">Create Products</a></li>
                        <li><a href="{{ route('shop.create') }}">Create shop</a></li>
                        
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>

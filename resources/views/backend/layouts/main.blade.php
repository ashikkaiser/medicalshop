<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords"
        content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">
    <!-- Start CSS -->
    @yield('style')
    <link href="{{ asset('/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/plugins/pnotify/css/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        .form-control {
            background-color: #f2f4fa !important;
            color: black !important
        }

        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;

            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;

            z-index: 2000;
            position: fixed;
            height: 90px;
            width: 90px;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .pace.pace-inactive .pace-activity {
            display: none;
        }

        .pace .pace-activity {
            position: fixed;
            z-index: 2000;
            display: block;
            position: absolute;
            left: -30px;
            top: -30px;
            height: 90px;
            width: 90px;
            display: block;
            border-width: 30px;
            border-style: double;
            border-color: #29d transparent transparent;
            border-radius: 50%;

            -webkit-animation: spin 1s linear infinite;
            -moz-animation: spin 1s linear infinite;
            -o-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
        }

        .pace .pace-activity:before {
            content: ' ';
            position: absolute;
            top: 10px;
            left: 10px;
            height: 50px;
            width: 50px;
            display: block;
            border-width: 10px;
            border-style: solid;
            border-color: #29d transparent transparent;
            border-radius: 50%;
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(359deg);
            }
        }

        @-moz-keyframes spin {
            100% {
                -moz-transform: rotate(359deg);
            }
        }

        @-o-keyframes spin {
            100% {
                -moz-transform: rotate(359deg);
            }
        }

        @keyframes spin {
            100% {
                transform: rotate(359deg);
            }
        }

    </style>
    <!-- End CSS -->
</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close"
                class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg"
                    class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Payment Reminders</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Stock Updates</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Open for New Products</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Enable SMS</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Newsletter Subscription</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Show Map</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">e-Statement</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Monthly Report</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        @include('backend.layouts.leftbar')
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        @include('backend.layouts.rightbar')
        {{-- @yield('content') --}}
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start JS -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.3.5/dist/sweetalert2.all.min.js"
        integrity="sha256-rcFEivPFt1SFgtwZ1QpFNKE+jBTtOzT5yfXn55ZtmmE=" crossorigin="anonymous"></script>

    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('/assets/js/detect.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/js/vertical-menu.js') }}"></script>
    <script src="{{ asset('/assets/plugins/pnotify/js/pnotify.custom.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/switchery/switchery.min.js') }}"></script>
    @yield('script')
    @include('backend.layouts.partials._script')
    <!-- Core JS -->
    <script src="{{ asset('/assets/js/core.js') }}"></script>
    {{-- <script src="{{ asset('/js/loader.js') }}"></script> --}}



    <!-- End JS -->
</body>

</html>

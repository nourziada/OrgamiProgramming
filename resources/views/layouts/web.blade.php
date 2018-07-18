<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>عالم الاوريقامي | فن طي الورق الياباني</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700%7CPacifico" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/isotope.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vertical-menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navigation.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/custom-code/jquery.fancybox.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">

    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custome.css')}}">
    <link rel="stylesheet" href="{{asset('css/nour.css')}}">
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

{{--<!-- promo popup wraper -->--}}
{{--<div class="zoom-anim-dialog mfp-hide xs-promoPopup">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-6 xs-padding-0">--}}
                {{--<div class="promo-image-container">--}}
                    {{--<img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/promo-images.png" alt="">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 align-self-center">--}}
                {{--<div class="promo-text-container">--}}
                    {{--<div class="promo-text-content">--}}
                        {{--<h3>SUBSCRIBE NEWSLETTER</h3>--}}
                        {{--<h4>Connect to Marketpress</h4>--}}
                        {{--<p>Get exclusive discounts and coupons</p>--}}
                    {{--</div>--}}
                    {{--<form action="#" method="POST" class="xs-newsletter newsLetter-v2">--}}
                        {{--<label for="xs-promo-email"></label>--}}
                        {{--<input type="email" name="EMAIL" id="xs-promo-email" placeholder="Enter your email....">--}}
                        {{--<button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>	<!-- END promo popup wraper -->--}}
<!-- topBar section -->

<div class="xs-top-bar d-md-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="xs-social-list">
                            <li class="xs-list-text">تابعونا على</li>
                            <li><a href="{{ $webSettings->fb }}"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="{{ $webSettings->twitter }}"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="{{ $webSettings->insta }}"><i class="fa fa-instagram"></i></a></li>
                        </ul><!-- .xs-social-list END -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="xs-top-bar-info right-content">


                    <li><a href="#" data-toggle="modal" data-target=".xs-modal">دخول</a></li>
                </ul><!-- .xs-top-bar-info END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div>

<!-- xs Login modal -->
<div class="modal xs-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="icon icon-cross"></span>
            </button>
            <ul class="nav nav-tabs xs-tab-nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#login" role="tab" data-toggle="tab">
                        دخول
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#signup" role="tab" data-toggle="tab">
                        تسجيل
                    </a>
                </li>
            </ul><!-- xs-tab-nav -->
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
                    <form action="#" method="POST" class="xs-customer-form">
                        <div class="input-group input-group-append">
                            <input type="text" class="form-control" placeholder="اسم المستخدم">
                            <i class="icon icon-profile-male input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="كلمة المرور">
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">دخول</button>
                        {{--<p>or</p>--}}
                        {{--<a href="#" class="btn btn-info btn-block">تسجيل الدخول عبر الفيسبوك</a>--}}
                        {{--<a href="#" class="btn btn-danger btn-block">تسجيل الدخول عبر جوجل بلس</a>--}}
                    </form><!-- .xs-customer-form END -->
                </div><!-- tab-pane #login -->
                <div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
                    <form action="#" method="POST" class="xs-customer-form">
                        <div class="input-group input-group-append">
                            <input type="text" class="form-control" placeholder="اسم المستخدم">
                            <i class="icon icon-profile-male input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني">
                            <i class="icon icon-envelope2 input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="كلمة المرور">
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="تاكيد كلمة المرور">
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">دخول</button>
                        {{--<p>او</p>--}}
                        {{--<a href="#" class="btn btn-info btn-block">التسجيل عبر فيسبوك</a>--}}
                        {{--<a href="#" class="btn btn-danger btn-block">التسجيل عبر جوجل بلس</a>--}}
                    </form><!-- .xs-customer-form END -->
                </div><!-- tab-pane #signup -->
            </div><!-- tab-content -->
        </div>
    </div>
</div><!-- End xs modal --><!-- End topBar section -->

<!-- header section -->
<header class="xs-header v-yellow">
    <!-- nav bar section -->
    <div class="xs-navBar">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 xs-order-1" id="main-logo-ld">
                    <div class="xs-logo-wraper">
                        <a href="{{ route('index') }}">
                            <img src="{{asset('assets/logo.png')}}" width="90" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-3 xs-order-3 xs-menus-group" id="main-menu-lg">
                    <nav class="xs-menus">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div><!-- .nav-header END -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li @if($active == 'index') class="active" @endif><a href="{{ route('index') }}">الرئيسية</a></li>
                                <li @if($active == 'about') class="active" @endif><a href="{{ route('about') }}">فن الاوريجامي</a></li>
                                <li @if($active == 'articles') class="active" @endif><a href="{{ route('articles') }}">المقالات</a></li>
                                <li @if($active == 'training') class="active" @endif><a href="{{ route('training') }}">التدريب</a></li>
                                <li @if($active == 'publications') class="active" @endif><a href="{{ route('publications') }}">المطبوعات</a></li>
                                <li @if($active == 'club') class="active" @endif><a href="{{ route('club') }}"><span class="menu-label">جديد</span>نادي الاوريجامي</a></li>
                                <li @if($active == 'videos') class="active" @endif><a href="{{ route('videos') }}">المرئيات التعليمية </a></li>
                                <li @if($active == 'news') class="active" @endif><a href="{{ route('news') }}">الاخبار</a></li>
                                <li @if($active == 'teams') class="active" @endif><a href="{{ route('teams') }}">الادارة</a></li>
                                <li @if($active == 'community') class="active" @endif><a href="{{ route('community') }}">خدمة المجتمع</a></li>
                                <li><a href="#" id="color-store">المتجر</a></li>

                            </ul>
                        </div><!-- .nav-menus-wrapper END -->
                    </nav><!-- .xs-menus END -->
                </div>
                <div class="col-lg-1 col-sm-5 xs-order-2 xs-wishlist-group">
                    <div class="xs-wish-list-item">


                        <div class="dropdown dropright xs-miniCart-dropdown">
                            <a href="#" class="dropdown-toggle xs-single-wishList" data-toggle="dropdown" aria-expanded="false">
                                <span class="xs-item-count highlight">3</span>
                                <i class="icon icon-bag"></i>
                            </a>
                            <ul class="dropdown-menu fadeIns xs-miniCart-menu">
                                <li class="mini_cart_item media">
                                    <a class="d-flex mini-product-thumb">
                                        <img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="mini-cart-title"><a href="#">اسم المنتج</a></h4>
                                        <span class="quantity">2 ×
                                        <span class="amount">$100</span>
                                    </span>
                                    </div>
                                    <button class="btn-cancel pull-right">x</button>
                                </li>
                                <li class="mini_cart_item media">
                                    <a class="d-flex mini-product-thumb">
                                        <img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="mini-cart-title"><a href="#">عنوان المنتج</a></h4>
                                        <span class="quantity">1 ×
                                        <span class="amount">$90</span>
                                    </span>
                                    </div>
                                    <button class="btn-cancel pull-right">x</button>
                                </li>
                                <li class="mini_cart_item media">
                                    <a class="d-flex mini-product-thumb">
                                        <img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart3.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="mini-cart-title"><a href="#">المنتج</a></h4>
                                        <span class="quantity">2 ×
                                        <span class="amount">$150</span>
                                    </span>
                                    </div>
                                    <button class="btn-cancel pull-right">x</button>
                                </li>
                                <li class="mini-cart-btn">
                                    <a class="badge badge-pill badge-primary" href="#">مشاهدة السلة</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End nav bar section -->

    <!-- nav down section -->

    <!-- <div class="nav-cover"></div> -->
</header>
<!-- End header section -->

@yield('content')

<div class="xs-copyright copyright-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="xs-copyright-text">
                    © 2018 <a href="">origami-ksa</a> All Rights Reserved
                </div><!-- .xs-copyright-text END -->
            </div>
            <div class="col-md-6">
                <ul class="xs-social-list version-2">
                    <li><a href="{{ $webSettings->fb }}"><i class="icon icon-facebook"></i>Facebook</a></li>
                    <li><a href="{{ $webSettings->twitter }}"><i class="icon icon-twitter"></i>Twitter</a></li>
                    <li><a href="{{ $webSettings->insta }}"><i class="icon icon-instagram"></i> Instagram</a></li>
                </ul><!-- .xs-social-list END -->
            </div>
        </div>
    </div>
</div>
<!-- js file start -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/modernizr.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/Popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.menu-aim.jfancyboxs')}}"></script>
<script src="{{asset('assets/js/vertical-menu.js')}}"></script>
<script src="{{asset('assets/js/tweetie.js')}}"></script>
<script src="{{asset('assets/js/echo.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="{{asset('assets/js/spectragram.min.js')}}"></script>
<script src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>		<!-- End js file -->
<script src="{{ asset('assets/custom-code/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/js.js') }}"></script>	<!-- End js file -->
</body>

</html>
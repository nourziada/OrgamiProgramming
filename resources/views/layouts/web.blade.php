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

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

            @auth

                <div class="col-lg-6 col-sm-6 custom-top-header">
                    <nav class="xs-menus xs_nav-landscape">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div><!-- .nav-header END -->
                        <div class="nav-menus-wrapper" style="transition-property: none;"><span class="nav-menus-wrapper-close-button">✕</span>
                            <ul class="nav-menu">
                                <li class=""><a href="#">{{ Auth::user()->name }}</a>
                                    <ul class="nav-dropdown nav-submenu" style="right: 0px; display: none;">
                                        <li><a href="{{ route('profile') }}">حسابي</a></li>
                                        <li><a href="{{ route('profile') }}">طلباتي</a></li>
                                        <li><a href="{{ route('cart') }}">السلة</a></li>
                                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- .nav-menus-wrapper END -->
                    </nav>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            @else

            <div class="col-lg-6 col-sm-6 custom-top-header">
                <ul class="xs-top-bar-info right-content">


                    <li><a href="#" data-toggle="modal" data-target=".xs-modal">تسجيل الدخول</a></li>
                </ul><!-- .xs-top-bar-info END -->
            </div>
            @endauth



            <div class="col-lg-6 col-sm-6">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <ul class="xs-social-list">
                            <li class="xs-list-text">تابعونا على</li>
                            
                            <li><a href="{{ $webSettings->fb }}"><i class="icon icon-facebook"></i></a></li>
                            {{--<li><a href="{{ $webSettings->twitter }}"><img src="{{ asset('assets/img/logo_m.png') }}"></a></li>--}}
                            <li><a href="{{ $webSettings->twitter }}"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="{{ $webSettings->insta }}"><i class="fa fa-instagram"></i></a></li>
                        </ul><!-- .xs-social-list END -->
                    </div>
                </div>
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
                        تسجيل الدخول
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
                    <form method="POST" action="{{ route('login') }}" class="xs-customer-form">
                        {{ csrf_field() }}
                        <div class="input-group input-group-append">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني" name="email" required>
                            <i class="icon icon-envelope2 input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="كلمة المرور" name="password" required>
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <a href="{{ route('password.request') }}" style="color: #f8877c;">هل نسيت كلمة المرور ؟</a>
                        <button type="submit" class="btn btn-primary btn-block">دخول</button>
                        {{--<p>or</p>--}}
                        {{--<a href="#" class="btn btn-info btn-block">تسجيل الدخول عبر الفيسبوك</a>--}}
                        {{--<a href="#" class="btn btn-danger btn-block">تسجيل الدخول عبر جوجل بلس</a>--}}
                    </form><!-- .xs-customer-form END -->
                </div><!-- tab-pane #login -->
                <div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
                    <form method="POST" action="{{ route('register') }}" class="xs-customer-form">
                        {{ csrf_field() }}
                        <div class="input-group input-group-append">
                            <input type="text" class="form-control" placeholder="اسم المستخدم" name="name" required>
                            <i class="icon icon-profile-male input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني" name="email" required>
                            <i class="icon icon-envelope2 input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="كلمة المرور" name="password" required>
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <div class="input-group input-group-append">
                            <input type="password" class="form-control" placeholder="تاكيد كلمة المرور" name="password_confirmation" required>
                            <i class="icon icon-key2 input-group-text"></i>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">تسجيل الاشتراك</button>
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
                            <img src="{{ Voyager::image($webSettings->logo) }}" width="85" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-3 xs-order-3 xs-menus-group" id="main-menu-lg" style="padding-right: 0px;">
                    <nav class="xs-menus">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div><!-- .nav-header END -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li @if($active == 'index') class="active" @endif><a href="{{ route('index') }}">الرئيسية</a></li>

                                @if($navPages[0]->hidden == 1)
                                <li @if($active == 'about') class="active" @endif><a href="{{ route('about') }}">{{ $navPages[0]->name }}</a></li>
                                @endif

                                @if($navPages[1]->hidden == 1)
                                <li @if($active == 'articles') class="active" @endif><a href="{{ route('articles') }}">{{ $navPages[1]->name }}</a></li>
                                @endif

                                @if($navPages[2]->hidden == 1)
                                <li @if($active == 'training') class="active" @endif><a href="{{ route('training') }}">{{ $navPages[2]->name }}</a></li>
                                @endif

                                @if($navPages[3]->hidden == 1)
                                <li @if($active == 'publications') class="active" @endif><a href="{{ route('publications') }}">{{ $navPages[3]->name }}</a></li>
                                @endif

                                @if($navPages[4]->hidden == 1)
                                <li @if($active == 'club') class="active" @endif><a href="{{ route('club') }}"><span class="menu-label">جديد</span>{{ $navPages[4]->name }}</a></li>
                                @endif

                                @if($navPages[5]->hidden == 1)
                                <li @if($active == 'videos') class="active" @endif><a href="{{ route('videos') }}">{{ $navPages[5]->name }} </a></li>
                                @endif

                                @if($navPages[6]->hidden == 1)
                                <li @if($active == 'news') class="active" @endif><a href="{{ route('news') }}">{{ $navPages[6]->name }}</a></li>
                                @endif

                                @if($navPages[7]->hidden == 1)
                                <li @if($active == 'teams') class="active" @endif><a href="{{ route('teams') }}">{{ $navPages[7]->name }}</a></li>
                                @endif

                                @if($navPages[8]->hidden == 1)
                                <li @if($active == 'community') class="active" @endif><a href="{{ route('community') }}">{{ $navPages[8]->name }}</a></li>
                                @endif

                                @if($navPages[9]->hidden == 1)
                                <li @if($active == 'products') class="active" @endif><a href="{{ route('products') }}" id="color-store">{{ $navPages[9]->name }}</a></li>
                                @endif

                            </ul>
                        </div><!-- .nav-menus-wrapper END -->
                    </nav><!-- .xs-menus END -->
                </div>
                <div class="col-lg-1 col-sm-5 xs-order-2 xs-wishlist-group">
                    <div class="xs-wish-list-item">


                        <div class="dropdown dropright xs-miniCart-dropdown">
                            <a href="{{ route('cart') }}" class="xs-single-wishList">
                                <span class="xs-item-count highlight" id="headerCartCount">{{ Cart::count() }}</span>
                                <i class="icon icon-bag"></i>
                            </a>
                            {{--<ul class="dropdown-menu fadeIns xs-miniCart-menu">--}}
                                {{--<li class="mini_cart_item media">--}}
                                    {{--<a class="d-flex mini-product-thumb">--}}
                                        {{--<img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart1.jpg" alt="">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<h4 class="mini-cart-title"><a href="#">اسم المنتج</a></h4>--}}
                                        {{--<span class="quantity">2 ×--}}
                                        {{--<span class="amount">$100</span>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<button class="btn-cancel pull-right">x</button>--}}
                                {{--</li>--}}
                                {{--<li class="mini_cart_item media">--}}
                                    {{--<a class="d-flex mini-product-thumb">--}}
                                        {{--<img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart2.jpg" alt="">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<h4 class="mini-cart-title"><a href="#">عنوان المنتج</a></h4>--}}
                                        {{--<span class="quantity">1 ×--}}
                                        {{--<span class="amount">$90</span>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<button class="btn-cancel pull-right">x</button>--}}
                                {{--</li>--}}
                                {{--<li class="mini_cart_item media">--}}
                                    {{--<a class="d-flex mini-product-thumb">--}}
                                        {{--<img src="http://demo.xpeedstudio.com/html/marketpress/assets/images/mini-cart/mini-cart3.jpg" alt="">--}}
                                    {{--</a>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<h4 class="mini-cart-title"><a href="#">المنتج</a></h4>--}}
                                        {{--<span class="quantity">2 ×--}}
                                        {{--<span class="amount">$150</span>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<button class="btn-cancel pull-right">x</button>--}}
                                {{--</li>--}}
                                {{--<li class="mini-cart-btn">--}}
                                    {{--<a class="badge badge-pill badge-primary" href="#">مشاهدة السلة</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
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

<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/modernizr.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/Popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.menu-aim.js')}}"></script>
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

<script>
    /*=============================================================
			 31. input number increase
	=========================================================================*/

    var $this = $( '.xs_input_number' );
    $this.append( '<span class="sub"><img src="{{asset('assets/images/minus.png')}}" alt="" /></span>' );
    $this.append( '<span class="add"><img src="{{asset('assets/images/plus.png')}}" alt="" /></span>' );
    $( '.xs_input_number' ).each( function( ) {
        var spinner = $(this),
            input = spinner.find( 'input[type="number"]' ),
            add = spinner.find( '.add' ),
            sub = spinner.find( '.sub' );
        input.parent().on( 'click', '.sub', function( event ) {
            event.preventDefault();
            /* Act on the event */
            if ( input.val() > parseInt( input.attr( 'min' ) ) )
                input.val( function( i, oldval ) { return --oldval; } );
        });
        input.parent().on( 'click', '.add', function ( ) {
            event.preventDefault( );
            if ( input.val() < parseInt( input.attr( 'max' ) ) )
                input.val( function( i, oldval ) { return ++oldval; } );
        });
    });
</script>


@if(Session::has('successRegistration'))
    <script type="text/javascript">
        swal({
            title: "تم تسجيل عضويتك بنجاح في موقعنا ",
            text: "",
            icon: "success"
        });


    </script>
@endif

@if(Session::has('successLogin'))
    <script type="text/javascript">
        swal({
            title: "تم تسجيل دخولك بنجاح ",
            text: "",
            icon: "success"
        });


    </script>
@endif

@if(Session::has('errorLogin'))
    <script type="text/javascript">
        swal({
            title: "البريد الالكتروني او كلمة المرور خاطئة",
            text: "",
            icon: "error"
        });


    </script>
@endif


@if(Session::has('successSendPassword'))
    <script type="text/javascript">
        swal({
            title: "تم ارسال رسالة استعادة كلمة المرور الى بريدك الالكتروني ",
            text: "",
            icon: "success"
        });


    </script>
@endif

@if(Session::has('errorSendPassword'))
    <script type="text/javascript">
        swal({
            title: "عذراً البريد الالكتروني الذي أدخلته خاطىء",
            text: "",
            icon: "error"
        });


    </script>
@endif

@if(Session::has('successReset'))
    <script type="text/javascript">
        swal({
            title: "تمت اعادة تعيين كلمة المرور بنجاح",
            text: "",
            icon: "success"
        });


    </script>
@endif

@if(Session::has('errorReset'))
    <script type="text/javascript">
        swal({
            title: "خطأ ! راجع البريد الالكتروني وكلمة المرور",
            text: "",
            icon: "error"
        });


    </script>
@endif


@if(Session::has('successOrder'))
    <script type="text/javascript">
        swal({
            title: "تم طلب المنتجات بنجاح ، يمكنك معاينة الطلبات من بروفايلك",
            text: "",
            icon: "success"
        });


    </script>
@endif

@if(Session::has('successProfile'))
    <script type="text/javascript">
        swal({
            title: "تم تحديث بيانات حسابك بنجاح",
            text: "",
            icon: "success"
        });


    </script>
@endif


<script>
    $('.slider').each(function() {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function() {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }

        $('.next_btn').on('click', function() {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function() {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });

        $.each($slides, function(index) {
            var $button = $('<a class="slide_btn"></a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
</script>
</body>

</html>
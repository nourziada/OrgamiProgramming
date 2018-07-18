@extends('layouts.web')
@section('content')


    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                    <li class="breadcrumb-item"><a href="product-category.html">All Categories</a></li>
                    <li class="breadcrumb-item"><a href="product-category.html">Computer & Office</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Computer</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- product info section -->
    <!-- Modal -->
    <div class="xs-section-padding xs-product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xs-sync-slider-preview">
                        <ul class="xs-social-tigger">
                            <li><a href="https://plus.google.com/discover" class="xs-google-plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.facebook.com/" class="xs-facebook"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" class="xs-twitter"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="xs-instagram"><i class="icon icon-instagram"></i></a></li>
                            <li><a class="tigger-icon" href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                        <div class="sync-slider-preview owl-carousel">
                            <div class="item">
                                <img src="assets/images/big_img/headphone.png" alt="Product">
                            </div>
                            <div class="item">
                                <img src="assets/images/big_img/kindle.png" alt="Product">
                            </div>
                            <div class="item">
                                <img src="assets/images/big_img/laptop-image.png" alt="Product">
                            </div>
                            <div class="item">
                                <img src="assets/images/big_img/lenovo-yoga-720-15-png-01.png" alt="Product">
                            </div>
                        </div>
                    </div>
                    <div class="sync-slider-thumb owl-carousel">
                        <div class="item">
                            <img src="assets/images/160x96/product_1_160x96.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/images/160x96/product_2_160x96.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/images/160x96/product_3_160x96.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/images/160x96/product_4_160x96.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="summary-content single-product-summary">
                        <h3 class="entry-title">Hitech Innovations</h3>
                        <h4 class="product-title">Apple 27-inch iMac with Retina 5K display: 3.4GHz quad-core Intel Core i5 (MNE92PA/A)</h4>
                        <span class="star-rating color-green">
                        <span class="value">(200 Customers review)</span>
                    </span>
                        <ul class="xs-list check">
                            <li>Backlight: LED</li>
                            <li>1200 watts peak</li>
                            <li>Multimedia Speakers</li>
                            <li>Front-facing subwoofer</li>
                            <li>Refresh Rate: 120Hz (Effective)</li>
                            <li>Powerful High Resulation Retina Display</li>
                            <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″.</li>
                        </ul>
                        <span class="price highlight">
                        <del>$590.00</del>
                        $370.00
                    </span>
                        <div class="xs-add-to-chart-form row">
                            <div class="col-md-8">
                                <form action="#">
                                    <div class="w-quantity quantity xs_input_number">
                                        <input type="number" min="1" max="100" value="1" />
                                    </div>
                                    <div class="w-quantity-btn">
                                        <input type="hidden" name="add-to-cart" value="605">
                                        <button type="submit" class="single_add_to_cart_button btn btn-primary">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="xs-wishlist-and-compare"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="xs-wishlist-and-compare"><i class="icon icon-shuffle-arrow" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end product info section -->



@stop
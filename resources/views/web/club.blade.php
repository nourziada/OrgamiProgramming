@extends('layouts.web')
@section('content')


    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">نادي الاوريجامي</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <h3 class="title-custom-right">اسماء المنتسبي للنادي</h3>
                    <ul class="traning-list">
                        @forelse($names as $name)
                        <li>
                            <a href="#">
                                <div class="img-user"><img src="{{ asset('assets/custom-img/user.svg') }}" width="20" alt=""></div>
                                <div class="name-user">{{ $name->name }}</div>
                            </a>
                        </li>
                        @empty
                        @endforelse

                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <h3 class="title-custom-right">اعمال النادي</h3>
                    <!-- sidebar content -->
                    <div class=" custom-olbom">
                        <div class="row">
                            <div class="row mb-4">

                                @forelse($images as $image)
                                    <div class="col-6 col-lg-4">

                                        <a class="d-block mb-4" data-fancybox="images" href="{{ Voyager::image($image->image) }}" data-width="1536" data-height="2304">
                                            <img class="img-fluid" src="{{ Voyager::image($image->image) }}" style="width: 100%;height: 220px;">
                                        </a>



                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>

                    </div>
                    <!-- End sidebar content -->
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->


@stop
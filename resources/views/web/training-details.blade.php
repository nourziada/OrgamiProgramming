@extends('layouts.web')
@section('content')

    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">التدريب</li>
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
                    <div class="training-dt-user">
                        <div class="img-user"><img src="{{ asset('assets/custom-img/user.svg') }}" width="100" alt=""></div>
                        <div class="user-name">{{ $tr->name }}</div>
                        <div class="desc-user">{{ $tr->short_desc }}</div>
                    </div>
                    <div class="training-dt-user training-dt-user-dt">

                        <div class="desc-user">{{ $tr->content }}</div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-8">

                    <!-- sidebar content -->
                    <div class=" custom-olbom">
                        <div class="row">
                            <div class="row mb-4">
                                @if($tr->video != null)
                                    <div class="col-6 col-lg-4">

                                        <!-- format video -->
                                        <article class="post format-video hentry xs-blog-post-details">
                                            <a href="{{ $tr->video }}" data-fancybox="gallery">
                                                <div class="post-media post-image">
                                                    <img src="{{ asset('assets/custom-img/1257e89d63d90a3.jpg') }}" class="img-responsive" alt="" style="    height: 220px;">
                                                    <div class="post-video">

                                                        <i class="fa fa-play"></i>

                                                    </div>
                                                    <div class="xs-overlay bg-black"></div>
                                                </div><!-- .post-media END -->
                                            </a>

                                        </article><!-- .post  END -->
                                    </div>

                                @endif

                            @forelse(json_decode($tr->images) as $image)
                                <div class="col-6 col-lg-4">


                                    <a class="d-block mb-4" data-fancybox="images" href="{{ Voyager::image($image) }}" data-width="1536" data-height="2304">
                                        <img class="img-fluid" src="{{ Voyager::image($image) }}" style="width: 100%;height: 220px;">
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
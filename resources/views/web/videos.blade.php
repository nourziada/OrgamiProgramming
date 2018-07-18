@extends('layouts.web')
@section('content')


    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">المرئيات التعليمية</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">
        <div class="container">
            <div class="row">

                @forelse($videos as $video)
                <div class="col-md-4 col-lg-4">

                    <!-- format video -->
                    <article class="post format-video hentry xs-blog-post-details">
                        <a href="{{ $video->link }}" data-fancybox="gallery">
                            <div class="post-media post-image">
                                <img src="{{ Voyager::image($video->image) }}" class="img-responsive" alt="">
                                <div class="post-video">

                                        <i class="fa fa-play"></i>

                                </div>
                                <div class="xs-overlay bg-black"></div>
                            </div><!-- .post-media END -->
                        </a>
                        <div class="post-body">
                            <div class="entry-header">

                                <h3 class="entry-title xs-post-entry-title">
                                    <a href="blog-single.html">
                                        {{ $video->title }}
                                    </a>
                                </h3>
                            </div><!-- header end -->

                        </div><!-- post-body end -->
                    </article><!-- .post  END -->
                </div>

                @empty
                @endforelse


            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->



@stop
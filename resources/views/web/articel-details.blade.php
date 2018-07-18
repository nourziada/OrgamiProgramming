@extends('layouts.web')
@section('content')

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a283d195fcf41c2"></script>

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    @if($active == 'articles')
                    <li class="breadcrumb-item"><a href="{{ route('articles') }}">المقالات</a></li>
                    @elseif($active == 'news')
                        <li class="breadcrumb-item"><a href="{{ route('news') }}">الاخبار</a></li>
                    @elseif($active == 'community')
                        <li class="breadcrumb-item"><a href="{{ route('community') }}">التطوع وخدمة المجتمع</a></li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">{{ $articel->title }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- blog single post -->
    <div class="xs-section-padding xs-blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <!-- format standard -->
                    <article class="post format-standard hentry xs-blog-post-details">
                        <div class="post-media post-image">
                            <img src="{{ Voyager::image($articel->image) }}" class="img-responsive" alt="">
                        </div><!-- .post-media END -->

                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <div class="xs-post-meta-list">
									<span class="post-author">
										<i class="fa fa-user"></i><a href="#"> Admin</a>
									</span>
                                        <span class="post-meta-date"><i class="fa fa-calendar"></i> {{ $articel->created_at->toDateString() }}</span>

									</span>
                                    </div>
                                </div>
                                <h2 class="entry-title xs-post-entry-title">
                                    {{ $articel->title }}
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">

                                <p>
                                    {!! nl2br($articel->content) !!}
                                </p>


                                <div class="xs-post-footer">
                                    {{--<div class="post-tags">--}}
                                        {{--<h5 class="xs-post-sub-heading">اشارات ذات صلة</h5>--}}
                                        {{--<div class="xs-blog-post-tag">--}}
                                            {{--<a href="#">Hopes</a>--}}
                                            {{--<a href="#">Medical</a>--}}
                                        {{--</div>--}}
                                    {{--</div><!-- Post tags end -->--}}

                                    <div class="share-items">
                                        @if($active == 'articles')
                                        <h5 class="xs-post-sub-heading">مشاركة المقال</h5>
                                        @elseif($active == 'news')
                                            <h5 class="xs-post-sub-heading">مشاركة الخبر</h5>
                                        @elseif($active == 'community')
                                            <h5 class="xs-post-sub-heading">مشاركة المقال</h5>
                                        @endif
                                        <ul class="xs-social-list square">
                                            <div class="addthis_inline_share_toolbox"></div>
                                        </ul>
                                    </div><!-- Share items end -->
                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- .xs-entry-content END -->


                        </div><!-- post-body end -->
                    </article><!-- .post  END -->
                    <!-- format standard closed -->


                </div>

            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog single post -->

    <!-- news section -->
    <section class="bg-gray padding-50px">
        <div class="container">
            <div class="xs-content-header version-2">
                @if($active == 'articles')
                <h2 class="xs-content-title">مقالات أخرى</h2>

                <a href="{{ route('articles') }}" class="xs-simple-btn">مشاهدة الكل</a>
                @elseif($active == 'news')
                    <h2 class="xs-content-title">أخبار أخرى</h2>
                    <a href="{{ route('news') }}" class="xs-simple-btn">مشاهدة الكل</a>
                @elseif($active == 'community')
                    <h2 class="xs-content-title">مقالات أخرى</h2>

                    <a href="{{ route('community') }}" class="xs-simple-btn">مشاهدة الكل</a>
                @endif
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @forelse($randomArticels as $articel)
                <div class="col-md-6 col-lg-4">
                    <div class="xs-single-news">
                        <div class="entry-thumbnail">
                            <img class="news-image" src="{{ Voyager::image($articel->image) }}" data-echo="{{ Voyager::image($articel->image) }}" alt="">
                        </div><!-- .entry-thumbnail END -->
                        <div class="xs-news-content">
                            <div class="entry-header">
                                <div class="entry-meta">
                                <span class="tags-links">

                                </span>
                                </div>
                                <h4 class="entry-title"><a
                                            @if($active == 'articles')
                                            href="{{ route('article.details',$articel->id) }}"
                                            @elseif($active == 'news')
                                            href="{{ route('news.details',$articel->id) }}"
                                            @elseif($active == 'community')
                                            href="{{ route('community.details',$articel->id) }}"
                                            @endif
                                    >{{ $articel->title }}</a></h4>
                            </div><!-- .entry-header END -->
                            <div class="post-meta">
                                <span class="share-links"><i class="icon icon-calendar"></i>
                                    <a
                                            @if($active == 'articles')
                                            href="{{ route('article.details',$articel->id) }}"
                                            @elseif($active == 'news')
                                            href="{{ route('news.details',$articel->id) }}"
                                            @elseif($active == 'community')
                                            href="{{ route('community.details',$articel->id) }}"
                                            @endif>{{ $articel->created_at->toDateString() }}</a></span>
                            </div><!-- .post-meta END -->
                        </div><!-- .xs-news-content END -->
                    </div><!-- .xs-single-news END -->
                </div>
                @empty
                @endforelse

            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- End news section -->

    @include('includes.news-letter')

@stop
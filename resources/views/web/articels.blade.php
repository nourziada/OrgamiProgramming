@extends('layouts.web')
@section('content')


    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>

                    @if($active == 'articles')
                    <li class="breadcrumb-item active" aria-current="page">المقالات</li>
                    @elseif($active == 'news')
                        <li class="breadcrumb-item active" aria-current="page">الأخبار</li>
                    @elseif($active == 'community')
                        <li class="breadcrumb-item active" aria-current="page">التطوع وخدمة المجتمع</li>
                        @endif
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="blog-post-list">
                        <div class="row">

                            @forelse($articels as $articel)
                            <div class="col-lg-4 col-md-6">
                                <!-- format standard -->
                                <article class="post format-standard hentry xs-blog-post-details">
                                    <div class="post-media post-image">
                                        <img src="{{ Voyager::image($articel->image) }}" class="img-responsive news-image" alt="">
                                    </div><!-- .post-media END -->
                                    <div class="post-body">
                                        <div class="entry-header">
                                            <div class="post-meta">
                                                <div class="xs-post-meta-list">
                                                        <span class="post-author">
                                                            <i class="fa fa-user"></i><a href="#"> Admin</a>
                                                        </span>
                                                    <span class="post-meta-date"><i class="fa fa-calendar"></i> {{ $articel->created_at->toDateString() }}</span>

                                                </div>
                                            </div>
                                            <h2 class="entry-title xs-post-entry-title">
                                                <a @if($active == 'articles')
                                                   href="{{ route('article.details',$articel->id) }}"
                                                @elseif($active == 'news')
                                                    href="{{ route('news.details',$articel->id) }}"
                                                   @elseif($active == 'community')
                                                   href="{{ route('community.details',$articel->id) }}"
                                                @endif
                                                >
                                                    {{ $articel->title }}
                                                </a>
                                            </h2>
                                        </div><!-- header end -->

                                        <div class="entry-content">
                                            <p>
                                                {{ str_limit($articel->content,93) }}
                                            </p>
                                        </div><!-- .xs-entry-content END -->
                                        <div class="xs-btn-wraper">
                                            <a
                                                    @if($active == 'articles')
                                                    href="{{ route('article.details',$articel->id) }}"
                                                    @elseif($active == 'news')
                                                    href="{{ route('news.details',$articel->id) }}"
                                                    @elseif($active == 'community')
                                                    href="{{ route('community.details',$articel->id) }}"

                                                    @endif
                                                    class="btn btn-primary">قراءة المزيد</a>
                                        </div>
                                    </div><!-- post-body end -->
                                </article><!-- .post  END -->
                            </div>

                            @empty
                            @endforelse

                        </div>



                        <!-- format gallery -->


                        <ul class="pagination justify-content-center">
                            {{ $articels->links() }}
                        </ul>
                    </div>
                </div>

            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->


    @include('includes.news-letter')


@stop
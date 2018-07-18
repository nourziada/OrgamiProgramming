@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">عن فن الاوريجامي</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    @php $count = 0; @endphp
    @forelse($abouts as $about)
    <section class="xs-section-padding @if($count % 2 == 0) about-content-left @else bg-gray about-content-right @endif  padding-50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="xs-about-content">
                        <div class="about-info">
                            {{--<h4>ماذا تعرف عن</h4>--}}
                            <h5>{{ $about->title }}</h5>
                            <p>
                                {!! nl2br($about->content) !!}
                            </p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ Voyager::image($about->image) }}" alt="">
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section>

    @php $count++ @endphp
    @empty
    @endforelse


    @include('includes.news-letter')

@stop
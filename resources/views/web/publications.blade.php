@extends('layouts.web')
@section('content')


    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">المطبوعات</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->
    <section class="bg-gray xs-section-padding padding-50px-bottom">
        <div class="container">


            <div class="row version-6">

                @forelse($publications as $pub)
                <div class="col-md-3 col-sm-6">
                    <div class="xs-product-wraper">
                        <img src="{{ Voyager::image($pub->image) }}" alt="Lamp">
                        <div class="xs-product-content">
                            <span class="product-categories">
                            </span>
                            <h4 class="product-title medium"><a target="_blank" href="{{ $pub->file }}">{{ $pub->title }}</a> </h4>


                        </div><!-- .xs-product-content END -->
                    </div>
                </div>
                @empty
                @endforelse

            </div>

            <div class="xs-btn-wraper justify-content-center xs-mt-30">
                <ul class="pagination justify-content-center">
                    {{ $publications->links() }}
                </ul>
            </div>
        </div><!-- .container END -->
    </section>


    @include('includes.news-letter')


@stop
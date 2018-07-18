@extends('layouts.web')
@section('content')

    <!--breadcumb start here-->
    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">المتدربين</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <!-- blog list section -->
    <div class="xs-blog-list xs-section-padding padding-50px">
        <div class="container">
            <div class="row">

                @forelse($trainers as $tr)
                <div class="col-md-12 col-lg-3 users-training">
                    <div class="training-dt-user">
                        <div class="img-user"><img src="{{ asset('assets/custom-img/user.svg') }}" width="100" alt=""></div>
                        <div class="user-name"><a href="{{ route('training.id',$tr->id) }}">{{ $tr->name }}</a></div>
                        <div class="desc-user">{{ $tr->slug }}</div>
                    </div>
                </div>
                @empty
                @endforelse


            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- End blog list section -->



@stop
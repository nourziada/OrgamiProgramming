@extends('layouts.web')
@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الإدارة</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->

    <section class="xs-section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="xs-heading v-medium">
                        <h3 class="xs-heading-title">أعضاء الادارة</h3>
                    </div><!-- .xs-heading .v-medium end -->
                </div>
            </div><!-- .row END -->
            <div class="row ">

                @forelse($teams as $team)
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team xs-product-wraper" style="padding: 10px 5px;">
                        <div class="team-thumb">
                            <img src="{{ Voyager::image($team->image) }}" alt="" style="height: 240px;">
                            <div class="xs-overlay bg-black"></div>
                            <div class="team-hover-content">
                                <ul class="xs-social-list">
                                    <li><a href="{{ $team->fb }}"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="{{ $team->twitter }}"><i class="icon icon-twitter"></i></a></li>
                                    <li><a href="mailto:{{ $team->email }}"><i class="icon icon-envelope"></i></a></li>
                                    <li style="    margin-right: 14px;"><a href="tel:{{ $team->mobile }}"><i class="icon icon-phone"></i></a></li>
                                </ul><!-- .xs-social-list END -->
                            </div><!-- .team-hover-content END -->
                        </div><!-- .team-thumb END -->
                        <div class="team-info" style="padding: 0px;padding-top: 15px;">

                            <h4 class="team-name">{{ $team->name }}</h4>
                            <h3 class="team-designation">{{ $team->job_title }}</h3>

                            <div class="entry-content">
                                <p>
                                    {{ $team->content }}
                                </p>
                            </div>
                        </div><!-- .team-info END -->
                    </div><!-- .xs-single-team END -->
                </div>
               @empty
                @endforelse

            </div><!-- .row end -->
        </div><!-- .container END -->
    </section>

    @include('includes.news-letter')
    @stop
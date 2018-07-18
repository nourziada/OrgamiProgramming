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

    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="xs-heading v-medium">
                        <h3 class="xs-heading-title">أعضاء الادارة</h3>
                    </div><!-- .xs-heading .v-medium end -->
                </div>
            </div><!-- .row END -->
            <div class="row">

                @forelse($teams as $team)
                <div class="col-md-6 col-lg-3">
                    <div class="xs-single-team">
                        <div class="team-thumb">
                            <img src="{{ Voyager::image($team->image) }}" alt="">
                            <div class="xs-overlay bg-black"></div>
                            <div class="team-hover-content">
                                <ul class="xs-social-list">
                                    <li><a href="{{ $team->fb }}"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="{{ $team->twitter }}"><i class="icon icon-twitter"></i></a></li>
                                </ul><!-- .xs-social-list END -->
                            </div><!-- .team-hover-content END -->
                        </div><!-- .team-thumb END -->
                        <div class="team-info">
                            <h3 class="team-designation">{{ $team->job_title }}</h3>
                            <h4 class="team-name">{{ $team->name }}</h4>
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
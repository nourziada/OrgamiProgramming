@extends('layouts.web')

@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">استرجاع كلمة المرور</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--breadcumb end here--><!-- End welcome section -->


    <!-- contact us section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="xs-heading v-big">
                        <h2 class="xs-heading-title xs-mb-10">نسيت كلمة المرور</h2>
                        <hr>
                        <p>يمكنك من خلال الصفحة التالية استرجاع كلمة المرور عبر بريدك الالكتروني</p>
                    </div><!-- .xs-heading END -->
                    <form method="POST" action="{{ route('password.email') }}" >
                        {{ csrf_field() }}

                        <div class="form-group">
                            <h3 class="h3">البريد الالكتروني</h3>
                            <input type="email" class="form-control" id="xs_contact_email" name="email" required>
                        </div>

                        <div class="xs-btn-wraper">
                            <input type="submit" name="submit" value="استعادة" id="xs_contact_submit" class="btn btn-primary badge badge-pill btn-lg">
                        </div>
                    </form><!-- .xs-contact-form #xs-contact-form END -->
                </div>
            </div>
        </div>
    </section><!-- End contact us section -->


@endsection

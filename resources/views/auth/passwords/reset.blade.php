@extends('layouts.web')

@section('content')

    <div class="xs-breadcumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">اعادة تعيين كلمة المرور</li>
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
                        <h2 class="xs-heading-title xs-mb-10">اعادة تعيين كلمة المرور</h2>
                        <hr>
                    </div><!-- .xs-heading END -->
                    <form method="POST" action="{{ route('password.request') }}" >
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">


                        <div class="form-group">
                            <h3 class="h3">البريد الالكتروني</h3>
                            <input type="email" class="form-control" id="xs_contact_email" name="email" required>
                        </div>

                        <div class="form-group">
                            <h3 class="h3">كلمة المرور الجديد</h3>
                            <input type="password" class="form-control" id="xs_contact_email" name="password" required>
                        </div>

                        <div class="form-group">
                            <h3 class="h3">تأكيد كلمة المرور</h3>
                            <input type="password" class="form-control" id="xs_contact_email" name="password_confirmation" required>
                        </div>

                        <div class="xs-btn-wraper">
                            <input type="submit" name="submit" value="اعادة تعيين كلمة المرور" id="xs_contact_submit" class="btn btn-primary badge badge-pill btn-lg">
                        </div>
                    </form><!-- .xs-contact-form #xs-contact-form END -->
                </div>
            </div>
        </div>
    </section><!-- End contact us section -->


@endsection

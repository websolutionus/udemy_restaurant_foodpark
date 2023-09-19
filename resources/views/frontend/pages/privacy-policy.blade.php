@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BREADCRUMB START
        ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>privacy policy</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="javascript:;">privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            BREADCRUMB END
        ==============================-->


    <!--================================
            PRIVACY POLICY START
        =================================-->
    <section class="fp__terms_condition mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__career_det_text">
                        {!! @$privacyPolicy->content !!}
                        <a href="{{ url('/') }}" class="common_btn">go home</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================================
            PRIVACY POLICY END
        =================================-->
@endsection

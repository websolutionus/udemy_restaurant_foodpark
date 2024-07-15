@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BANNER START
        ==============================-->
    @include('frontend.home.components.slider')
    <!--=============================
            BANNER END
        ==============================-->


    <!--=============================
            WHY CHOOSE START
        ==============================-->
    @include('frontend.home.components.why-choose')
    <!--=============================
            WHY CHOOSE END
        ==============================-->


    <!--=============================
            OFFER ITEM START
        ==============================-->
    @include('frontend.home.components.offer-item')

    <!--=============================
        OFFER ITEM END
        ==============================-->


    <!--=============================
            MENU ITEM START
        ==============================-->
    @include('frontend.home.components.menu-item')
    <!--=============================
            MENU ITEM END
        ==============================-->


    <!--=============================
            ADD SLIDER START
        ==============================-->
    @include('frontend.home.components.ad-slider')

    <!--=============================
            ADD SLIDER END
        ==============================-->


    <!--=============================
            TEAM START
        ==============================-->
    @include('frontend.home.components.team')
    <!--=============================
            TEAM END
        ==============================-->


    <!--=============================
            DOWNLOAD APP START
        ==============================-->
    @include('frontend.home.components.app-download')

    <!--=============================
            DOWNLOAD APP END
        ==============================-->


    <!--=============================
           TESTIMONIAL  START
        ==============================-->
    @include('frontend.home.components.testimonial')

    <!--=============================
            TESTIMONIAL END
        ==============================-->


    <!--=============================
            COUNTER START
        ==============================-->
    @include('frontend.home.components.counter')

    <!--=============================
            COUNTER END
        ==============================-->


    <!--=============================
            BLOG 2 START
        ==============================-->
    @include('frontend.home.components.blog')
    <!--=============================
            BLOG 2 END
        ==============================-->
@endsection

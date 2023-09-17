@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BREADCRUMB START
        ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>Our Customar Feedbacks</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="javascript:;">Testimonial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            BREADCRUMB END
        ==============================-->


    <!--=============================
            TESTIMONIAL PAGE START
        ==============================-->
    <section class="fp__testimonial_page mt_95 xs_mt_65 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_testimonial">
                            <div class="fp__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="{{ asset($testimonial->image) }}" alt="clients" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>{{ $testimonial->name }}</h4>
                                    <p>{{ $testimonial->title }}</p>
                                </div>
                            </div>
                            <div class="fp__single_testimonial_body">
                                <p class="feedback">{{ $testimonial->review }}</p>
                                <span class="rating">
                                    @for ($i = 1; $i <= $testimonial->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor

                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($testimonials->hasPages())
                <div class="fp__pagination mt_60">
                    <div class="row">
                        <div class="col-12">
                            {{ $testimonials->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!--=============================
            TESTIMONIAL PAGE END
        ==============================-->
@endsection

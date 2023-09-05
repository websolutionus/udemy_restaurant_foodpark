<section class="fp__testimonial pt_95 xs_pt_66 mb_150 xs_mb_120">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                <div class="fp__section_heading mb_40">
                    <h4>{{ @$sectionTitles['testimonial_top_title'] }}</h4>
                    <h2>{{ @$sectionTitles['testimonial_main_title'] }}</h2>
                    <span>
                        <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                    </span>
                    <p>{{ @$sectionTitles['testimonial_sub_title'] }}</p>
                </div>
            </div>
        </div>

        <div class="row testi_slider">
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
    </div>
</section>

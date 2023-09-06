@extends('frontend.layouts.master')

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>blog details</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blog details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        BLOG DETAILS START
    ==========================-->
    <section class="fp__blog_details mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="fp__blog_det_area">
                        <div class="fp__blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="imf-fluid w-100">
                        </div>
                        <div class="fp__blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By {{ $blog->user->name }}</li>
                                <li><i class="far fa-comment-alt-lines"></i> 12 Comments</li>
                                <li><i class="far fa-calendar-alt"></i> {{ date('d m Y', strtotime($blog->created_at)) }}</li>
                            </ul>
                            <h2>{!! $blog->title !!}</h2>

                            {!! $blog->description !!}

                            <div class="blog_tags_share d-flex flex-wrap justify-content-between align-items-center">
                                <div class="tags d-flex flex-wrap align-items-center">
                                    <span>tags:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">AC Repair</a></li>
                                        <li><a href="#">Home Move</a></li>
                                    </ul>
                                </div>
                                <div class="share d-flex flex-wrap align-items-center">
                                    <span>share:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $blog->title }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="http://twitter.com/share?text={{ $blog->title }}&url={{ url()->current() }}"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="blog_det_button mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <li>
                            <a href="#">
                                <img src="images/det_btn_img_1.jpg" alt="button img" class="img-fluid w-100">
                                <p>Spray spray tires washing car
                                    <span> <i class="far fa-long-arrow-left"></i> Previous</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p>25 Years of Expert Cleaning Services
                                    <span>next <i class="far fa-long-arrow-right"></i></span>
                                </p>
                                <img src="images/det_btn_img_2.jpg" alt="button img" class="img-fluid w-100">
                            </a>
                        </li>
                    </ul>

                    <div class="fp__comment mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <h4>03 Comments</h4>
                        <div class="fp__single_comment m-0 border-0">
                            <img src="images/comment_img_1.png" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment">
                            <img src="images/chef_1.jpg" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>salina khan <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment replay">
                            <img src="images/comment_img_2.png" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="fp__single_comment">
                            <img src="images/chef_3.jpg" alt="review" class="img-fluid">
                            <div class="fp__single_comm_text">
                                <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <a href="#" class="load_more">load More</a>
                    </div>

                    <div class="comment_input mt_100 xs_mt_70 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <label>name</label>
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <label>email</label>
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <input type="email" placeholder="Mail">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label>comment</label>
                                    <div class="fp__contact_form_input textarea">
                                        <span><i class="fal fa-user-alt"></i></span>
                                        <textarea rows="5" placeholder="Your Comment"></textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="fp__blog_search blog_sidebar m-0 wow fadeInUp" data-wow-duration="1s">
                            <h3>Search</h3>
                            <form>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="fp__related_blog blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Latest Post</h3>
                            <ul>
                                @foreach ($latestBlogs as $latestBlog)
                                <li>
                                    <img src="{{ $latestBlog->image }}" alt="{{ $latestBlog->title }}" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="{{ route('blogs.details', $latestBlog->slug) }}">{{ truncate($latestBlog->title, 50) }}</a>
                                        <p><i class="far fa-calendar-alt"></i> {{ date('d m Y', strtotime($latestBlog->created_at)) }}</p>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="fp__blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="#">{{ $category->name }} <span>{{ $category->blogs_count }}</span></a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BLOG DETAILS END
    ==========================-->
@endsection

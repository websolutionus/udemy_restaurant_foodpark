@extends('frontend.layouts.master')

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>Our Latest Food Blogs</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blogs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        BLOG PAGE START
    ==============================-->
    <section class="fp__blog_page fp__blog2 mt_120 xs_mt_65 mb_100 xs_mb_70">
        <div class="container">
            <form class="fp__search_menu_form mb-4" action="{{ route('blogs') }}" method="GET">
                <div class="row">
                    <div class="col-xl-6 col-md-5">
                        <input type="text" placeholder="Search..." name="search" value="{{ @request()->search }}">
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <select class="nice-select" name="category">
                            <option value="">All</option>
                            @foreach ($categories as $category)
                            <option @selected(@request()->category == $category->slug) value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <button type="submit" class="common_btn">search</button>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="{{ route('blogs.details', $blog->slug) }}" class="fp__single_blog_img">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">{{ $blog->category->name }}</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>{{ $blog->user->name }}</li>
                                <li><i class="fas fa-calendar-alt"></i> {{ date('d m Y', strtotime($blog->created_at)) }}</li>
                                <li><i class="fas fa-comments"></i> {{ $blog->comments_count }} comment</li>
                            </ul>
                            <a class="title" href="{{  route('blogs.details', $blog->slug)  }}">{!! truncate($blog->title, 30) !!}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @if ($blogs->isEmpty())
                    <h5 class="text-center">No Blog Found!</h5>
                @endif

            </div>
            @if ($blogs->hasPages())
            <div class="fp__pagination mt_60">
                <div class="row">
                    <div class="col-12">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!--=============================
        BLOG PAGE END
    ==============================-->
@endsection

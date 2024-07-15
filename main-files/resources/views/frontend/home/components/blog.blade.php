<section class="fp__blog fp__blog2">
    <div class="fp__blog_overlay pt_95 pt_xs_60 pb_100 xs_pb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_25">
                        <h4>news & blogs</h4>
                        <h2>our latest foods blog</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($latestBlogs as $blog)
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="{{ route('blogs.details', $blog->slug) }}" class="fp__single_blog_img">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="{{ route('blogs', ['category' => $blog->category->slug]) }}">{{ $blog->category->name }}</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>{{ $blog->user->name }}</li>
                                <li><i class="fas fa-calendar-alt"></i> {{ date('d M Y', strtotime($blog->created_at)) }}</li>
                                <li><i class="fas fa-comments"></i> {{ $blog->comments_count }} comment</li>
                            </ul>
                            <a class="title" href="{{ route('blogs.details', $blog->slug) }}">{{ truncate($blog->title, 30) }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

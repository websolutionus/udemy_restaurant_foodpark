@extends('frontend.layouts.master')

@section('content')
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
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
            <form class="fp__search_menu_form mb-4">
                <div class="row">
                    <div class="col-xl-6 col-md-5">
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <select class="nice-select">
                            <option value="">select country</option>
                            <option value="">bangladesh</option>
                            <option value="">nepal</option>
                            <option value="">japan</option>
                            <option value="">korea</option>
                            <option value="">thailand</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <button type="submit" class="common_btn">search</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_2.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_3.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_4.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_5.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_6.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_7.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">chicken</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 25 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_8.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">kabab</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 41 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                Guide Systems</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_blog">
                        <a href="#" class="fp__single_blog_img">
                            <img src="images/menu2_img_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="fp__single_blog_text">
                            <a class="category" href="#">grill</a>
                            <ul class="d-flex flex-wrap mt_15">
                                <li><i class="fas fa-user"></i>admin</li>
                                <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                <li><i class="fas fa-comments"></i> 32 comment</li>
                            </ul>
                            <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                Body’s</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fp__pagination mt_35">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BLOG PAGE END
    ==============================-->
@endsection

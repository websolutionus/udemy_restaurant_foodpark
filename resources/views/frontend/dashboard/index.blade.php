@extends('frontend.layouts.master')

@section('content')

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        DASHBOARD START
    ==========================-->
    <section class="fp__dashboard mt_120 xs_mt_90 mb_100 xs_mb_70">
        <div class="container">
            <div class="fp__dashboard_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__dashboard_menu">
                            <div class="dasboard_header">
                                <div class="dasboard_header_img">
                                    <img src="{{ auth()->user()->avatar }}" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="far fa-camera"></i></label>
                                    <form id="avatar_form" >
                                        <input type="file" id="upload" hidden name="avatar">
                                    </form>
                                </div>
                                <h2>{{ auth()->user()->name }}</h2>
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true"><span><i class="fas fa-user"></i></span> Parsonal Info</button>

                                <button class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-address" type="button" role="tab"
                                    aria-controls="v-pills-address" aria-selected="true"><span><i
                                            class="fas fa-user"></i></span>address</button>

                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false"><span><i
                                            class="fas fa-bags-shopping"></i></span> Order</button>

                                <button class="nav-link" id="v-pills-messages-tab2" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages2" type="button" role="tab"
                                    aria-controls="v-pills-messages2" aria-selected="false"><span><i
                                            class="far fa-heart"></i></span> wishlist</button>

                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false"><span><i
                                            class="fas fa-star"></i></span> Reviews</button>
                                @php
                                $unseenMessages = \App\Models\Chat::where(['sender_id' => 1, 'receiver_id' => auth()->user()->id, 'seen' => 0])->count();
                                @endphp
                                <button class="nav-link fp_chat_message" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false"><span><i
                                        class="far fa-comment-dots"></i></span> Message

                                        <b class="sunseen-message-count">{{ $unseenMessages > 0 ? 1 : 0 }}</b>

                                    </button>

                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false"><span><i
                                            class="fas fa-user-lock"></i></span> Change Password </button>
                  <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button class="nav-link" onclick="event.preventDefault();
                                    this.closest('form').submit();" type="button"><span> <i class="fas fa-sign-out-alt"></i>
                                    </span> Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__dashboard_content">
                            <div class="tab-content" id="v-pills-tabContent">

                                @include('frontend.dashboard.sections.personal-info-section')

                                @include('frontend.dashboard.sections.address-section')

                                @include('frontend.dashboard.sections.order-section')

                                @include('frontend.dashboard.sections.message-section')


                                <div class="tab-pane fade " id="v-pills-messages2" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab2">
                                    <div class="fp_dashboard_body">
                                        <h3>wishlist</h3>
                                        <div class="fp__dashoard_wishlist">

                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_1.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">Biryani</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>10</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">Hyderabadi
                                                                biryani</a>
                                                            <h5 class="price">$70.00</h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_2.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">chicken</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>145</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">chicken Masala</a>
                                                            <h5 class="price">$80.00 <del>90.00</del></h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_3.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">grill</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>54</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">daria
                                                                shevtsova</a>
                                                            <h5 class="price">$99.00</h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_4.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">chicken</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>74</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">chicken Masala</a>
                                                            <h5 class="price">$80.00 <del>90.00</del></h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_5.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">chicken</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>120</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">chicken Masala</a>
                                                            <h5 class="price">$80.00 <del>90.00</del></h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-lg-6">
                                                    <div class="fp__menu_item">
                                                        <div class="fp__menu_item_img">
                                                            <img src="images/menu2_img_6.jpg" alt="menu"
                                                                class="img-fluid w-100">
                                                            <a class="category" href="#">Biryani</a>
                                                        </div>
                                                        <div class="fp__menu_item_text">
                                                            <p class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star-half-alt"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>514</span>
                                                            </p>
                                                            <a class="title" href="menu_details.html">Hyderabadi
                                                                biryani</a>
                                                            <h5 class="price">$70.00</h5>
                                                            <ul class="d-flex flex-wrap justify-content-center">
                                                                <li><a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#cartModal"><i
                                                                            class="fas fa-shopping-basket"></i></a></li>
                                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fp__pagination mt_35">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <nav aria-label="...">
                                                            <ul class="pagination justify-content-start">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#"><i
                                                                            class="fas fa-long-arrow-alt-left"></i></a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#"><i
                                                                            class="fas fa-long-arrow-alt-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="fp_dashboard_body dashboard_review">
                                        <h3>review</h3>
                                        <div class="fp__review_area">
                                            <div class="fp__comment pt-0 mt_20">
                                                <div class="fp__single_comment m-0 border-0">
                                                    <img src="images/menu1.png" alt="review" class="img-fluid">
                                                    <div class="fp__single_comm_text">
                                                        <h3><a href="#">mamun ahmed shuvo</a> <span>29 oct 2022 </span>
                                                        </h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                        <span class="status active">active</span>
                                                    </div>
                                                </div>
                                                <div class="fp__single_comment">
                                                    <img src="images/menu2.png" alt=" review" class="img-fluid">
                                                    <div class="fp__single_comm_text">
                                                        <h3><a href="#">asaduzzaman khan</a> <span>29 oct 2022 </span>
                                                        </h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                        <span class="status inactive">inactive</span>
                                                    </div>
                                                </div>
                                                <div class="fp__single_comment">
                                                    <img src="images/menu3.png" alt="review" class="img-fluid">
                                                    <div class="fp__single_comm_text">
                                                        <h3><a href="#">ariful islam rupom</a> <span>29 oct 2022 </span>
                                                        </h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                        <span class="status active">active</span>
                                                    </div>
                                                </div>
                                                <div class="fp__single_comment">
                                                    <img src="images/menu4.png" alt="review" class="img-fluid">
                                                    <div class="fp__single_comm_text">
                                                        <h3><a href="#">ali ahmed jakir</a> <span>29 oct 2022 </span>
                                                        </h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                        <span class="status inactive">inactive</span>
                                                    </div>
                                                </div>
                                                <a href="#" class="load_more">load More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @include('frontend.dashboard.change-password')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="fp__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="fp__cart_popup_img">
                            <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="fp__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->
    <!--=========================
        DASHBOARD END
    ==========================-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#upload').on('change', function(){
                let form = $('#avatar_form')[0];
                let formData = new FormData(form);

                $.ajax({
                    method: 'POST',
                    url: "{{ route('profile.avatar.update') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        if(response.status === 'success'){
                            window.location.reload();
                        }
                    },
                    error: function(error){
                        console.error(response);
                    }
                })
            })
        })
    </script>
@endpush

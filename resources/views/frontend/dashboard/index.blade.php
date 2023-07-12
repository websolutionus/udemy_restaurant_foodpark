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
                                    <img src="images/comment_img_2.png" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="far fa-camera"></i></label>
                                    <input type="file" id="upload" hidden>
                                </div>
                                <h2>hasib ahmed</h2>
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

                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false"><span><i
                                            class="fas fa-user-lock"></i></span> Change Password </button>

                                <button class="nav-link" type="button"><span> <i class="fas fa-sign-out-alt"></i>
                                    </span> Logout</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__dashboard_content">
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="fp_dashboard_body">
                                        <h3>Welcome to your Profile</h3>

                                        <div class="fp__dsahboard_overview">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6 col-md-4">
                                                    <div class="fp__dsahboard_overview_item">
                                                        <span class="icon"><i class="far fa-shopping-basket"></i></span>
                                                        <h4>total order <span>(76)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-md-4">
                                                    <div class="fp__dsahboard_overview_item green">
                                                        <span class="icon"><i class="far fa-shopping-basket"></i></span>
                                                        <h4>Completed <span>(71)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 col-md-4">
                                                    <div class="fp__dsahboard_overview_item red">
                                                        <span class="icon"><i class="far fa-shopping-basket"></i></span>
                                                        <h4>cancel <span>(05)</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fp_dash_personal_info">
                                            <h4>Parsonal Information
                                                <a class="dash_info_btn">
                                                    <span class="edit">edit</span>
                                                    <span class="cancel">cancel</span>
                                                </a>
                                            </h4>

                                            <div class="personal_info_text">
                                                <p><span>Name:</span> Hasib Ahmed</p>
                                                <p><span>Email:</span> hasibahmed@gmail.com</p>
                                            </div>

                                            <div class="fp_dash_personal_info_edit comment_input p-0">
                                                <form method="POST" action="{{ route('profile.update') }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>name</label>
                                                                <input type="text" placeholder="Name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>email</label>
                                                                <input type="email" placeholder="Email" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12">

                                                            <button type="submit" class="common_btn">submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                                    aria-labelledby="v-pills-address-tab">
                                    <div class="fp_dashboard_body address_body">
                                        <h3>address <a class="dash_add_new_address"><i class="far fa-plus"></i> add new
                                            </a>
                                        </h3>
                                        <div class="fp_dashboard_address">
                                            <div class="fp_dashboard_existing_address">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i class="fas fa-home"></i>
                                                                        home</span>
                                                                    <span class="address">house# 22, road# 10, block# G,
                                                                        Basundhara
                                                                        Residential Area.</span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i
                                                                            class="far fa-car-building"></i>
                                                                        office</span>
                                                                    <span class="address">house# 22, road# 10, block# G,
                                                                        Basundhara
                                                                        Residential Area.</span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i
                                                                            class="far fa-car-building"></i>
                                                                        office
                                                                        2</span>
                                                                    <span class="address">house# 22, road# 10, block# G,
                                                                        Basundhara
                                                                        Residential Area.</span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fp__checkout_single_address">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <span class="icon"><i class="fas fa-home"></i> home
                                                                        2</span>
                                                                    <span class="address">house# 22, road# 10, block# G,
                                                                        Basundhara
                                                                        Residential Area.</span>
                                                                </label>
                                                            </div>
                                                            <ul>
                                                                <li><a class="dash_edit_btn"><i
                                                                            class="far fa-edit"></i></a></li>
                                                                <li><a class="dash_del_icon"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fp_dashboard_new_address ">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>add new address</h4>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <select id="select_js3">
                                                                    <option value="">select country</option>
                                                                    <option value="">bangladesh</option>
                                                                    <option value="">nepal</option>
                                                                    <option value="">japan</option>
                                                                    <option value="">korea</option>
                                                                    <option value="">thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <textarea cols="3" rows="4"
                                                                    placeholder="Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="fp__check_single_form check_area">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        home
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2">
                                                                        office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button"
                                                                class="common_btn cancel_new_address">cancel</button>
                                                            <button type="submit" class="common_btn">save
                                                                address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="fp_dashboard_edit_address ">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4>edit address </h4>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <select id="select_js4">
                                                                    <option value="">select country</option>
                                                                    <option value="">bangladesh</option>
                                                                    <option value="">nepal</option>
                                                                    <option value="">japan</option>
                                                                    <option value="">korea</option>
                                                                    <option value="">thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="fp__check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="fp__check_single_form">
                                                                <textarea cols="3" rows="4"
                                                                    placeholder="Address"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="fp__check_single_form check_area">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault2"
                                                                        id="flexRadioDefault12">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault12">
                                                                        home
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault2"
                                                                        id="flexRadioDefault22">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault22">
                                                                        office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button"
                                                                class="common_btn cancel_edit_address">cancel</button>

                                                            <button type="submit" class="common_btn">update
                                                                address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="fp_dashboard_body">
                                        <h3>order list</h3>
                                        <div class="fp_dashboard_order">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="t_header">
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2545758745</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">Complated</span>
                                                            </td>
                                                            <td>
                                                                <h5>$560</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2457945235</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">complete</span>
                                                            </td>
                                                            <td>
                                                                <h5>$654</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#2456875648</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="active">active</span>
                                                            </td>
                                                            <td>
                                                                <h5>$440</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#7896542130</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="active">active</span>
                                                            </td>
                                                            <td>
                                                                <h5>$225</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4587964125</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$335</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4579654153</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$550</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#12547965423</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 16, 2022</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">Complated</span>
                                                            </td>
                                                            <td>
                                                                <h5>$545</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#4589635878</h5>
                                                            </td>
                                                            <td>
                                                                <p>jan 21, 2021</p>
                                                            </td>
                                                            <td>
                                                                <span class="cancel">cancel</span>
                                                            </td>
                                                            <td>
                                                                <h5>$600</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>#89698745895</h5>
                                                            </td>
                                                            <td>
                                                                <p>July 11, 2020</p>
                                                            </td>
                                                            <td>
                                                                <span class="complete">complete</span>
                                                            </td>
                                                            <td>
                                                                <h5>$200</h5>
                                                            </td>
                                                            <td><a class="view_invoice">View Details</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="fp__invoice">
                                            <a class="go_back"><i class="fas fa-long-arrow-alt-left"></i> go back</a>
                                            <div class="fp__track_order">
                                                <ul>
                                                    <li class="active">order pending</li>
                                                    <li>order accept</li>
                                                    <li>order process</li>
                                                    <li>on the way</li>
                                                    <li>Completed</li>
                                                </ul>
                                            </div>
                                            <div class="fp__invoice_header">
                                                <div class="header_address">
                                                    <h4>invoice to</h4>
                                                    <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United
                                                        States</p>
                                                    <p>+1347-430-9510</p>
                                                </div>
                                                <div class="header_address">
                                                    <p><b>invoice no: </b><span>4574</span></p>
                                                    <p><b>Order ID:</b> <span> #4789546458</span></p>
                                                    <p><b>date:</b> <span>10-11-2022</span></p>
                                                </div>
                                            </div>
                                            <div class="fp__invoice_body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr class="border_none">
                                                                <th class="sl_no">SL</th>
                                                                <th class="package">item description</th>
                                                                <th class="price">Price</th>
                                                                <th class="qnty">Quantity</th>
                                                                <th class="total">Total</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">01</td>
                                                                <td class="package">
                                                                    <p>Hyderabadi Biryani</p>
                                                                    <span class="size">small</span>
                                                                    <span class="coca_cola">coca-cola</span>
                                                                    <span class="coca_cola2">7up</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">02</td>
                                                                <td class="package">
                                                                    <p>Daria Shevtsova</p>
                                                                    <span class="size">medium</span>
                                                                    <span class="coca_cola">coca-cola</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">03</td>
                                                                <td class="package">
                                                                    <p>Hyderabadi Biryani</p>
                                                                    <span class="size">large</span>
                                                                    <span class="coca_cola2">7up</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">04</td>
                                                                <td class="package">
                                                                    <p>Hyderabadi Biryani</p>
                                                                    <span class="size">medium</span>
                                                                    <span class="coca_cola">coca-cola</span>
                                                                    <span class="coca_cola2">7up</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">05</td>
                                                                <td class="package">
                                                                    <p>Daria Shevtsova</p>
                                                                    <span class="size">large</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">04</td>
                                                                <td class="package">
                                                                    <p>Hyderabadi Biryani</p>
                                                                    <span class="size">medium</span>
                                                                    <span class="coca_cola">coca-cola</span>
                                                                    <span class="coca_cola2">7up</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="sl_no">04</td>
                                                                <td class="package">
                                                                    <p>Hyderabadi Biryani</p>
                                                                    <span class="size">medium</span>
                                                                    <span class="coca_cola">coca-cola</span>
                                                                    <span class="coca_cola2">7up</span>
                                                                </td>
                                                                <td class="price">
                                                                    <b>$120</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>2</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$240</b>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td class="package" colspan="3">
                                                                    <b>sub total</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b>12</b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$755</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="package coupon" colspan="3">
                                                                    <b>(-) Discount coupon</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b></b>
                                                                </td>
                                                                <td class="total coupon">
                                                                    <b>$0.00</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="package coast" colspan="3">
                                                                    <b>(+) Shipping Cost</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b></b>
                                                                </td>
                                                                <td class="total coast">
                                                                    <b>$10.00</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="package" colspan="3">
                                                                    <b>Total Paid</b>
                                                                </td>
                                                                <td class="qnty">
                                                                    <b></b>
                                                                </td>
                                                                <td class="total">
                                                                    <b>$765</b>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <a class="print_btn common_btn" href="#"><i class="far fa-print"></i> print
                                                PDF</a>

                                        </div>
                                    </div>
                                </div>

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

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="fp_dashboard_body fp__change_password">
                                        <div class="fp__review_input">
                                            <h3>change password</h3>
                                            <div class="comment_input pt-0">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>Current Password</label>
                                                                <input type="password" placeholder="Current Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="fp__comment_imput_single">
                                                                <label>New Password</label>
                                                                <input type="password" placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="fp__comment_imput_single">
                                                                <label>confirm Password</label>
                                                                <input type="password" placeholder="Confirm Password">
                                                            </div>
                                                            <button type="submit"
                                                                class="common_btn mt_20">submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

@extends('frontend.layouts.master')

@section('content')
    <!--=============================
            BREADCRUMB START
        ==============================-->
    <section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            BREADCRUMB END
        ==============================-->


    <!--============================
            CART VIEW START
        ==============================-->
    <section class="fp__cart_view mt_125 xs_mt_95 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="fp__pro_img">
                                            Image
                                        </th>

                                        <th class="fp__pro_name">
                                            details
                                        </th>

                                        <th class="fp__pro_status">
                                            price
                                        </th>

                                        <th class="fp__pro_select">
                                            quantity
                                        </th>

                                        <th class="fp__pro_tk">
                                            total
                                        </th>

                                        <th class="fp__pro_icon">
                                            <a class="clear_all" href="#">clear all</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="fp__pro_img"><img src="images/menu1.png" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="fp__pro_name">
                                            <a href="#">Hyderabadi Biryani</a>
                                            <span>medium</span>
                                            <p>coca-cola</p>
                                            <p>7up</p>
                                        </td>

                                        <td class="fp__pro_status">
                                            <h6>$180.00</h6>
                                        </td>

                                        <td class="fp__pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="fp__pro_tk">
                                            <h6>$180,00</h6>
                                        </td>

                                        <td class="fp__pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fp__pro_img">
                                            <img src="images/menu2.png" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="fp__pro_name">
                                            <a href="#">Chicken Masala</a>
                                            <span>small</span>
                                        </td>
                                        <td class="fp__pro_status">
                                            <h6>$140.00</h6>
                                        </td>

                                        <td class="fp__pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="fp__pro_tk">
                                            <h6>$140,00</h6>
                                        </td>

                                        <td class="fp__pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fp__pro_img">
                                            <img src="images/menu3.png" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="fp__pro_name">
                                            <a href="#">Daria Shevtsova</a>
                                            <span>large</span>
                                            <p>coca-cola</p>
                                            <p>7up</p>
                                        </td>


                                        <td class="fp__pro_status">
                                            <h6>$220.00</h6>
                                        </td>

                                        <td class="fp__pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="fp__pro_tk">
                                            <h6>$220,00</h6>
                                        </td>

                                        <td class="fp__pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fp__pro_img">
                                            <img src="images/menu4.png" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="fp__pro_name">
                                            <a href="#">Hyderabadi Biryani</a>
                                            <span>medium</span>
                                            <p>7up</p>
                                        </td>

                                        <td class="fp__pro_status">
                                            <h6>$150.00</h6>
                                        </td>

                                        <td class="fp__pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="fp__pro_tk">
                                            <h6>$150.00</h6>
                                        </td>

                                        <td class="fp__pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__cart_list_footer_button">
                        <h6>total cart</h6>
                        <p>subtotal: <span>$124.00</span></p>
                        <p>delivery: <span>$00.00</span></p>
                        <p>discount: <span>$10.00</span></p>
                        <p class="total"><span>total:</span> <span>$134.00</span></p>
                        <form>
                            <input type="text" placeholder="Coupon Code">
                            <button type="submit">apply</button>
                        </form>
                        <a class="common_btn" href=" #">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
            CART VIEW END
        ==============================-->
@endsection

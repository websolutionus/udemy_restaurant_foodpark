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

                                    @foreach (Cart::content() as $product)
                                    <tr>
                                        <td class="fp__pro_img"><img src="{{ $product->options->product_info['image'] }}" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="fp__pro_name">
                                            <a href="{{ route('product.show', $product->options->product_info['slug']) }}">{{ $product->name }}</a>
                                            <span>{{ $product->options->product_size['name'] }} ({{ currencyPosition($product->options->product_size['price']) }})</span>
                                            @foreach ($product->options->product_options as $option)
                                            <p>{{ $option['name'] }} ({{ currencyPosition($option['price']) }})</p>
                                            @endforeach

                                        </td>

                                        <td class="fp__pro_status">
                                            <h6>{{ currencyPosition($product->price) }}</h6>
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
                                    @endforeach
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

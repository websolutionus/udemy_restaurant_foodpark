@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Todays Orders</h4>
                        </div>
                        <div class="card-body">
                            {{ $todaysOrders }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Todays Earnings</h4>
                        </div>
                        <div class="card-body">
                            {{ currencyPosition($todaysEarnings) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>This Month Orders</h4>
                        </div>
                        <div class="card-body">
                            {{ $thisMonthsOrders }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>This Months Earnings</h4>
                        </div>
                        <div class="card-body">
                            {{ currencyPosition($thisMonthsEarnings) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>This Year Orders</h4>
                        </div>
                        <div class="card-body">
                            {{ $thisYearOrders }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>This Year Earnings</h4>
                        </div>
                        <div class="card-body">
                            {{ currencyPosition($thisYearEarnings) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Orders</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalOrders }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Earnings</h4>
                        </div>
                        <div class="card-body">
                            {{ currencyPosition($totalEarnings) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Users</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalUsers }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admins</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalAdmins }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Products</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalProducts }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-rss"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Blogs</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalBlogs }}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="section">

        <div class="card card-primary">
            <div class="card-header">
                <h4>Todays Orders</h4>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="order_modal" tabindex="-1" role="dialog" aria-labelledby="order_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="order_status_form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Payment Status</label>
                            <select class="form-control payment_status" name="payment_status" id="">
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="">Order Status</label>
                            <select class="form-control order_status" name="order_status" id="">
                                <option value="pending">Pending</option>
                                <option value="in_process">In Process</option>
                                <option value="delivered">Delivered</option>
                                <option value="declined">Declined</option>

                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit_btn">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(document).ready(function(){
            var orderId = '';

            $(document).on('click', '.order_status_btn', function(){
                let id = $(this).data('id');

                orderId = id;

                let paymentStatus = $('.payment_status option');
                let orderStatus = $('.order_status option');

                $.ajax({
                    method: 'GET',
                    url: '{{ route("admin.orders.status", ":id") }}'.replace(":id", id),
                    beforeSend: function(){
                        $('.submit_btn').prop('disabled', true);
                    },
                    success: function(response) {
                        paymentStatus.each(function() {
                            if($(this).val() == response.payment_status) {
                                $(this).attr('selected', 'selected');
                            }
                        })

                        orderStatus.each(function() {
                            if($(this).val() == response.order_status) {
                                $(this).attr('selected', 'selected');
                            }
                        })

                        $('.submit_btn').prop('disabled', false);
                    },
                    error: function(xhr, status, error){

                    }
                })
            })

            $('.order_status_form').on('submit', function(e){
                e.preventDefault();
                let formContent = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    url: '{{ route("admin.orders.status-update", ":id") }}'.replace(":id", orderId),
                    data: formContent,
                    success: function(response) {
                        $('#order_modal').modal("hide");
                        $('#order-table').DataTable().draw();

                        toastr.success(response.message);
                    },
                    error: function(xhr, status, error){
                        toastr.error(xhr.responseJSON.message);
                    }
                })
            })
        })
    </script>
@endpush

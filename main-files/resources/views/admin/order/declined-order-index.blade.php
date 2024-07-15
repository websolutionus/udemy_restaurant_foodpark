@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Declined Orders</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Declined Orders</h4>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="order_modal" tabindex="-1" role="dialog" aria-labelledby="order_modal"
        aria-hidden="true">
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
                        $('#pendingorder-table').DataTable().draw();

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

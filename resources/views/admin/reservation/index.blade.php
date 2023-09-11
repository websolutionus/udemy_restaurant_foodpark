@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Reservation</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>All Reservation</h4>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(document).ready(function(){
            $('body').on('change', '.reservation_status', function(){
                let status = $(this).val();
                let id = $(this).data('id');
                $.ajax({
                    method: 'POST',
                    url: '{{ route("admin.reservation.update") }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status,
                        id: id
                    },
                    success: function(response) {
                        toastr.success(response.message);
                    },
                    error: function(xhr, status, error) {

                    }
                })
            })
        })
    </script>
@endpush

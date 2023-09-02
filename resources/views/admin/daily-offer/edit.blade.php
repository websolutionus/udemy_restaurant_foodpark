@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daily Offer</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Daily Offer</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.daily-offer.update', $dailyOffer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Product</label>
                        <select name="product" class="form-control" id="product_search">
                            <option value="{{ $dailyOffer->product->id }}" selected>{{ $dailyOffer->product->name }}</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($dailyOffer->status === 1) value="1">Active</option>
                            <option @selected($dailyOffer->status === 0) value="0">Inactive</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#product_search').select2({
                ajax: {
                    url: '{{ route("admin.daily-offer.search-product") }}',
                    data: function(params) {
                        var query = {
                            search: params.term,
                            type: 'public'
                        }

                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function(data){
                        return {
                            results: $.map(data, function(product){
                                return {
                                    text: product.name,
                                    id:product.id,
                                    image_url: product.thumb_image
                                }
                            })
                        }
                    }
                },
                minimumInputLength: 3,
                templateResult: formatProduct,
                escapeMarkup: function(m) {return m;}

            });

            function formatProduct (product){
                var product = $('<span><img src="'+product.image_url+'" class="img-thumbnail" width="50" >  '+product.text+'</span>');
                return product;
            }
        })
    </script>
@endpush

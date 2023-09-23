@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Delivery Area</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Update Delivery Area</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.delivery-area.update', $area->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Area Name</label>
                    <input type="text" name="area_name" class="form-control" value="{{ $area->area_name }}">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Minimum Delivery Time </label>
                            <input type="text" name="min_delivery_time" class="form-control" value="{{ $area->min_delivery_time }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Maximum Delivery Time</label>
                            <input type="text" name="max_delivery_time" class="form-control" value="{{ $area->max_delivery_time }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Delivery Fee</label>
                            <input type="text" name="delivery_fee" class="form-control" value="{{ $area->delivery_fee }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" id="">
                                <option @selected($area->status === 1) value="1">Active</option>
                                <option @selected($area->status === 0) value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</section>
@endsection

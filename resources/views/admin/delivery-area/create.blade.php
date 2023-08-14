@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Delivery Area</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Delivery Area</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.delivery-area.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Area Name</label>
                    <input type="text" name="area_name" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Minimum Delivery Time </label>
                            <input type="text" name="min_delivery_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Maximum Delivery Time</label>
                            <input type="text" name="max_delivery_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Delivery Fee</label>
                            <input type="text" name="delivery_fee" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection

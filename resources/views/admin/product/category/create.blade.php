@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Category</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Category</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Show at Home</label>
                    <select name="show_at_home" class="form-control" id="">
                        <option value="1">Yes</option>
                        <option selected value="0">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection

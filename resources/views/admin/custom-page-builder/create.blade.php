@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Custom Page Builder</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Page</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.custom-page-builder.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Page Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Page Contents</label>
                    <textarea name="content" class="form-control summernote"></textarea>
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

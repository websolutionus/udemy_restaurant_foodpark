@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blog Categories</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Blog Category</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog-category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>

                
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($category->status === 1) value="1">Active</option>
                            <option @selected($category->status === 0) value="0">Inactive</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

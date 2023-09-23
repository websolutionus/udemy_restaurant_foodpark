@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Why Choose Us Section</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Item</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.why-choose-us.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Icon</label>
                    <br>
                    <button class="btn btn-primary" role="iconpicker" name="icon"></button>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>Short Description</label>
                    <textarea name="short_description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection

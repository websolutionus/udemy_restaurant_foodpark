@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>About</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update About</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Main Title</label>
                        <input type="text" name="main_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="summernote" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Youtube Video Link</label>
                        <input type="text" name="video_link" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

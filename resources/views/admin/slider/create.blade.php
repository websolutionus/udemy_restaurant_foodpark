@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Slider</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Slider</h4>

        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label>Image</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <div class="form-group">
                    <label>Offer</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Short Description</label>
                    <textarea name="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Button Link</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Button Link</label>
                    <select name="" class="form-control" id="">
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

@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Trams and Conditions</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Trams and Conditions</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.trams-and-conditions.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="summernote" class="form-control">{!! @$tramsAndCondition->content !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection


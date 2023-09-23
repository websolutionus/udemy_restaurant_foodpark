@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Counter</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Counter</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.counter.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Background</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="background" id="image-upload" />
                            <input type="hidden" name="old_background" id="image-upload" value="{{ @$counter->background }}" />
                          </div>
                    </div>

                    <h6>Counter One</h6>
                    <hr>
                    <div class="form-group">
                        <label for="">Counter Icon One</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="counter_icon_one" data-icon="{{ @$counter->counter_icon_one }}"></button>
                    </div>

                    <div class="form-group">
                        <label for="">Counter count One</label>
                        <input type="text" class="form-control" name="counter_count_one" value="{{ @$counter->counter_count_one }}">
                    </div>

                    <div class="form-group">
                        <label for="">Counter count Name</label>
                        <input type="text" class="form-control" name="counter_name_one" value="{{ @$counter->counter_name_one }}">
                    </div>

                    <h6>Counter Two</h6>
                    <hr>
                    <div class="form-group">
                        <label for="">Counter Icon Two</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="counter_icon_two" data-icon="{{ @$counter->counter_icon_two }}"></button>
                    </div>

                    <div class="form-group">
                        <label for="">Counter count Two</label>
                        <input type="text" class="form-control" name="counter_count_two" value="{{ @$counter->counter_count_two }}">
                    </div>

                    <div class="form-group">
                        <label for="">Counter count Name Two</label>
                        <input type="text" class="form-control" name="counter_name_two" value="{{ @$counter->counter_name_two }}">
                    </div>


                    <h6>Counter Three</h6>
                    <hr>
                    <div class="form-group">
                        <label for="">Counter Icon Three</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="counter_icon_three" data-icon="{{ @$counter->counter_icon_three }}"></button>
                    </div>

                    <div class="form-group">
                        <label for="">Counter Count Three</label>
                        <input type="text" class="form-control" name="counter_count_three" value="{{ @$counter->counter_count_three }}">
                    </div>

                    <div class="form-group">
                        <label for="">Counter count Name Theree</label>
                        <input type="text" class="form-control" name="counter_name_three" value="{{ @$counter->counter_name_three }}">
                    </div>

                    <h6>Counter Four</h6>
                    <hr>
                    <div class="form-group">
                        <label for="">Counter Icon Four</label>
                        <br>
                        <button class="btn btn-secondary" role="iconpicker" name="counter_icon_four" data-icon="{{ @$counter->counter_icon_four }}"></button>
                    </div>

                    <div class="form-group">
                        <label for="">Counter Count Four</label>
                        <input type="text" class="form-control" name="counter_count_four" value="{{ @$counter->counter_count_four }}">
                    </div>

                    <div class="form-group">
                        <label for="">Counter count Name Four</label>
                        <input type="text" class="form-control" name="counter_name_four" value="{{ @$counter->counter_name_four }}">
                    </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(@$counter->background) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush

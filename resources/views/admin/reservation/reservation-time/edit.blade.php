@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Reservation Times</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Update Time</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.reservation-time.update', $time->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Start Time</label>
                    <input type="text" name="start_time" class="form-control timepicker" value="{{ $time->start_time }}">
                </div>
                <div class="form-group">
                    <label>End Time</label>
                    <input type="text" name="end_time" class="form-control timepicker" value="{{ $time->end_time }}">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="">
                        <option @selected($time->status === 1) value="1">Active</option>
                        <option @selected($time->status === 0) value="0">InActive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</section>
@endsection

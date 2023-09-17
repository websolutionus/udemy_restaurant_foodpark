@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Admin Managemnt</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Admin</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.admin-management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="role" id="" class="form-control">
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection

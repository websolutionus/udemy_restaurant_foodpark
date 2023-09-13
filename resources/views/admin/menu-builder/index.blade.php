@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Menu Builder</h1>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h4>All Menus</h4>
        </div>
        <div class="card-body">
            {!! Menu::render() !!}
        </div>
    </div>
</section>

@endsection

@push('scripts')
    {!! Menu::scripts() !!}
@endpush






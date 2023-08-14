@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Delivery Area</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Delivery Areas</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.delivery-area.create') }}" class="btn btn-primary">
                        Create new
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush

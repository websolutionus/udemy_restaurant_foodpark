@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Clear Database</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Clear Database</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-warning alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Danger</div>
                        If you fire this action it will wipe your entire database.
                    </div>

                    <form action="" class="mt-2">
                        <button class="btn btn-danger" type="submit"><b>Clear Database</b></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

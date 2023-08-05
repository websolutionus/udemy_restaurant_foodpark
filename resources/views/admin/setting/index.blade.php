@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Settings</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>All Settings</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2">
                      <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#general-setting" role="tab" aria-controls="home" aria-selected="true">General Settings</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10">
                      <div class="tab-content no-padding" id="myTab2Content">
                        <div class="tab-pane fade show active" id="general-setting" role="tabpanel" aria-labelledby="home-tab4">
                            <div class="card">
                                <div class="card-body border">
                                    <form action="{{ route('admin.general-setting.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="">Site Name</label>
                                            <input name="site_name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Default Currency</label>
                                            <select name="site_default_currency" id="" class="select2 form-control">
                                                <option value="">test</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Currency Icon</label>
                                                    <input name="site_currency_icon" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Currency Icon Position</label>
                                                    <select name="site_currency_icon_position" id="" class="select2 form-control">
                                                        <option value="right">Right</option>
                                                        <option value="left">Left</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                          Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
                        </div>
                        <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                          Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection


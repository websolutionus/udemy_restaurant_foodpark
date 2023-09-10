<div class="tab-pane fade show" id="mail-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.mail-setting.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Driver</label>
                            <input name="mail_driver" type="text" class="form-control" value="{{ config('settings.mail_driver') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Host</label>
                            <input name="mail_host" type="text" class="form-control" value="{{ config('settings.mail_host') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Port</label>
                            <input name="mail_port" type="text" class="form-control" value="{{ config('settings.mail_port') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail Username</label>
                            <input name="mail_username" type="text" class="form-control" value="{{ config('settings.mail_username') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail Password</label>
                            <input name="mail_password" type="text" class="form-control" value="{{ config('settings.mail_password') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Mail Encryption</label>
                    <input name="mail_encryption" type="text" class="form-control" value="{{ config('settings.mail_encryption') }}">
                </div>

                <div class="form-group">
                    <label for="">Mail Form Address</label>
                    <input name="mail_from_address" type="text" class="form-control" value="{{ config('settings.mail_from_address') }}">
                </div>

                <div class="form-group">
                    <label for="">Mail Receive Address</label>
                    <input name="mail_receive_address" type="text" class="form-control" value="{{ config('settings.mail_receive_address') }}">
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

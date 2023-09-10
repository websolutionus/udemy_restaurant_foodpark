<div class="tab-pane fade show" id="mail-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.pusher-setting.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Driver</label>
                            <input name="mail_driver" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Host</label>
                            <input name="mail_host" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Mail Port</label>
                            <input name="mail_port" type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail Username</label>
                            <input name="mail_username" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mail Password</label>
                            <input name="mail_password" type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Mail Encription</label>
                    <input name="mail_encription" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="">Mail Form Address</label>
                    <input name="mail_from_address" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="">Mail Receive Address</label>
                    <input name="mail_receive_address" type="text" class="form-control" value="">
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

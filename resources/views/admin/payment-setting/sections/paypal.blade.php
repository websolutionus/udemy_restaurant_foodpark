<div class="tab-pane fade show active" id="paypal-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.general-setting.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Paypal Status</label>
                    <select name="site_default_currency" id="" class="select2 form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Account Mode</label>
                    <select name="site_default_currency" id="" class="select2 form-control">
                        <option value="sandbox">Sandbox</option>
                        <option value="live">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Country Name</label>
                    <select name="site_default_currency" id="" class="select2 form-control">
                        <option value="sandbox">Sandbox</option>
                        <option value="live">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Currency Name</label>
                    <select name="site_default_currency" id="" class="select2 form-control">
                        <option value="">Select</option>
                        @foreach (config('currencys.currency_list') as $currency)
                        <option @selected(config('settings.site_default_currency') === $currency) value="{{ $currency }}">{{ $currency }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Currency Rate</label>
                    <input name="" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="">Paypal Client Id</label>
                    <input name="site_name" type="text" class="form-control" value="{{config('settings.site_name')}}">
                </div>

                <div class="form-group">
                    <label for="">Paypal Secret Key</label>
                    <input name="site_name" type="text" class="form-control" value="{{config('settings.site_name')}}">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

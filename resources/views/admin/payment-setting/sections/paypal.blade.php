<div class="tab-pane fade show active" id="paypal-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.paypal-setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Paypal Status</label>
                    <select name="paypal_status" id="" class="select2 form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Account Mode</label>
                    <select name="paypal_account_mode" id="" class="select2 form-control">
                        <option value="sandbox">Sandbox</option>
                        <option value="live">Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Country Name</label>
                    <select name="paypal_country" id="" class="select2 form-control">
                        <option value="">Select</option>
                        @foreach (config('country_list') as $key => $country)
                            <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Paypal Currency Name</label>
                    <select name="paypal_currency" id="" class="select2 form-control">
                        <option value="">Select</option>
                        @foreach (config('currencys.currency_list') as $currency)
                        <option @selected(config('settings.site_default_currency') === $currency) value="{{ $currency }}">{{ $currency }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Currency Rate ( Per {{ config('settings.site_default_currency') }} )</label>
                    <input name="paypal_rate" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="">Paypal Client Id</label>
                    <input name="paypal_api_key" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="">Paypal Secret Key</label>
                    <input name="paypal_secret_key" type="text" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label>Paypal Logo</label>
                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="paypal_logo" id="image-upload" />
                      </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

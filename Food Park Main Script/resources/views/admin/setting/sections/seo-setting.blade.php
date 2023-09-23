<div class="tab-pane fade show" id="seo-setting" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card">
        <div class="card-body border">
            <form action="{{ route('admin.seo-setting.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Seo Title</label>
                    <input name="seo_title" type="text" class="form-control" value="{{ config('settings.seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Seo Description</label>
                    <textarea name="seo_description" class="form-control">{{ config('settings.seo_description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Seo Keywords</label>
                    <input type="text" class="form-control inputtags" name="seo_keywords" value="{{ config('settings.seo_keywords') }}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(".inputtags").tagsinput('items');
    </script>
@endpush

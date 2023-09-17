@php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerMenuOne = Menu::getByName('footer_menu_one');
    $footerMenuTwo = Menu::getByName('footer_menu_two');
    $footerMenuThree = Menu::getByName('footer_menu_three');

@endphp

<footer>
    <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container wow fadeInUp" data-wow-duration="1s">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="fp__footer_content">
                        <a class="footer_logo" href="index.html">
                            <img src="{{ asset(config('settings.footer_logo')) }}" alt="FoodPark" class="img-fluid w-100">
                        </a>
                        @if (@$footerInfo->short_info)
                        <span>{{ @$footerInfo->short_info }}</span>
                        @endif
                        @if (@$footerInfo->address)
                        <p class="info"><i class="far fa-map-marker-alt"></i> {{ @$footerInfo->address }}</p>
                        @endif
                        @if (@$footerInfo->phone)
                        <a class="info" href="callto:{{ @$footerInfo->phone }}"><i class="fas fa-phone-alt"></i> {{ @$footerInfo->phone }}</a>
                        @endif
                        @if (@$footerInfo->email)
                        <a class="info" href="mailto:{{ @$footerInfo->email }}"><i class="fas fa-envelope"></i>
                            {{ $footerInfo->email }}</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-6">
                    <div class="fp__footer_content">
                        <h3>Short Link</h3>
                        <ul>
                            @foreach ($footerMenuOne as $menuItem)
                            <li><a href="{{ $menuItem['link'] }}">{{ $menuItem['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-md-6 order-sm-4 order-lg-3">
                    <div class="fp__footer_content">
                        <h3>Help Link</h3>
                        <ul>
                            @foreach ($footerMenuTwo as $menuItem)
                            <li><a href="{{ $menuItem['link'] }}">{{ $menuItem['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-6 order-lg-4">
                    <div class="fp__footer_content">
                        <h3>subscribe</h3>
                        <form class="subscribe_form">
                            @csrf
                            <input type="text" placeholder="Subscribe" name="email">
                            <button type="submit" class="subscribe_btn">Subscribe</button>
                        </form>
                        <div class="fp__footer_social_link">
                            <h5>follow us:</h5>
                            @php
                                $socials = \App\Models\SocialLink::where('status', 1)->get();
                            @endphp
                            <ul class="d-flex flex-wrap">
                                @foreach ($socials as $link)
                                <li><a href="{{ $link->link }}"><i class="{{ $link->icon }}"></i></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fp__footer_bottom d-flex flex-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fp__footer_bottom_text d-flex flex-wrap justify-content-between">
                        @if (@$footerInfo->copyright)
                            <p>{{ @$footerInfo->copyright }}</p>
                        @endif
                        <ul class="d-flex flex-wrap">
                            @foreach ($footerMenuThree as $menuItem)
                            <li><a href="{{ $menuItem['link'] }}">{{ $menuItem['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.subscribe_form').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    url: '{{ route("subscribe-newsletter") }}',
                    data: formData,
                    beforeSend: function(){
                        $('.subscribe_btn').attr('disabled', true);
                        $('.subscribe_btn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                    },
                    success: function(response) {
                        $('.subscribe_form').trigger("reset");
                        $('.subscribe_btn').attr('disabled', false);
                        $('.subscribe_btn').html('Subscribe');
                        toastr.success(response.message);
                    },
                    error: function(xhr, status, error) {
                        let errors = xhr.responseJSON.errors;

                        $.each(errors, function(index, value){
                            toastr.error(value);
                        });

                        $('.subscribe_btn').attr('disabled', true);
                        $('.subscribe_btn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                    },
                    complete: function(){
                        $('.subscribe_btn').attr('disabled', false);
                        $('.subscribe_btn').html('Subscribe');
                    }
                })
            })
        })
    </script>
@endpush

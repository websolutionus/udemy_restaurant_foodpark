<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
    class="fal fa-times"></i></button>

<form action="">

<div class="fp__cart_popup_img">
<img src="{{ asset($product->thumb_image) }}" alt="{{ $product->name }}" class="img-fluid w-100">
</div>
<div class="fp__cart_popup_text">
<a href="{{ route('product.show', $product->slug) }}" class="title">{!! $product->name !!}</a>
<p class="rating">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star-half-alt"></i>
    <i class="far fa-star"></i>
    <span>(201)</span>
</p>
<h4 class="price">
    @if ($product->offer_price > 0)
    <input type="hidden" name="base_price" value="{{ $product->offer_price }}">

    {{ currencyPosition($product->offer_price) }}
    <del>{{ currencyPosition($product->price) }}</del>
    @else
    <input type="hidden" name="base_price" value="{{ $product->price }}">

    {{ currencyPosition($product->price) }}
    @endif
</h4>

@if ($product->productSizes()->exists())
<div class="details_size">
    <h5>select size</h5>
    @foreach ($product->productSizes as $productSize)
    <div class="form-check">
        <input class="form-check-input" type="radio" value="{{ $productSize->id }}" data-price="{{ $productSize->price }}" name="product_size" id="size-{{ $productSize->id }}" >
        <label class="form-check-label" for="size-{{ $productSize->id }}">
            {{ $productSize->name }} <span>+ {{ currencyPosition($productSize->price) }}</span>
        </label>
    </div>
    @endforeach
</div>
@endif

@if ($product->productOptions()->exists())
<div class="details_extra_item">
    <h5>select option <span>(optional)</span></h5>
    @foreach ($product->productOptions as $productOption)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="product_option[]" data-price="{{ $productOption->price }}" value="{{ $productOption->id }}" id="option-{{ $productOption->id }}">
        <label class="form-check-label" for="option-{{ $productOption->id }}">
            {{ $productOption->name }} <span>+ {{ currencyPosition($productOption->price) }}</span>
        </label>
    </div>
    @endforeach
</div>
@endif

<div class="details_quentity">
    <h5>select quentity</h5>
    <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
        <div class="quentity_btn">
            <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
            <input type="text" placeholder="1">
            <button class="btn btn-success"><i class="fal fa-plus"></i></button>
        </div>
        @if ($product->offer_price > 0)
        <h3 id="total_price">{{ currencyPosition($product->offer_price) }}</h3>
        @else
        <h3 id="total_price">{{ currencyPosition($product->price) }}</h3>
        @endif
    </div>
</div>
<ul class="details_button_area d-flex flex-wrap">
    <li><a class="common_btn" href="#">add to cart</a></li>
</ul>
</div>

</form>


<script>
    $(document).ready(function(){
        $('input[name="product_size"]').on('change', function(){
            updateTotalPrice();
        });

        $('input[name="product_option[]"]').on('change', function(){
            updateTotalPrice();
        });

        // Function to update the total price base on seelected options
        function updateTotalPrice() {
            let basePrice = parseFloat($('input[name="base_price"]').val());
            let selectedSizePrice = 0;
            let selectedOptionsPrice = 0;

            // Calculate the selected size price
            let selectedSize = $('input[name="product_size"]:checked');
            if(selectedSize.length > 0){
                selectedSizePrice = parseFloat(selectedSize.data("price"));
            }

            // Calculate selected options price
            let selectedOptions = $('input[name="product_option[]"]:checked');
            $(selectedOptions).each(function(){
                selectedOptionsPrice += parseFloat($(this).data("price"));
            })

            // Calculate the total price
            let totalPrice = basePrice + selectedSizePrice + selectedOptionsPrice;
            $('#total_price').text("{{ config('settings.site_currency_icon') }}" + totalPrice);

        }
    })
</script>

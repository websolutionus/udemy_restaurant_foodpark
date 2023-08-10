<?php


/** Create unique slug */
if(!function_exists('generateUniqueSlug')){
    function generateUniqueSlug($model, $name) : string
    {
        $modelClass = "App\\Models\\$model";

        if(!class_exists($modelClass)){
            throw new \InvalidArgumentException("Model $model not found.");
        }

        $slug = \Str::slug($name);
        $count = 2;

        while ($modelClass::where('slug', $slug)->exists()) {
            $slug = \Str::slug($name) . '-' . $count;
            $count++;
        }

        return $slug;
    }
}

if(!function_exists('currencyPosition')){
    function currencyPosition($price) : string
    {
        if(config('settings.site_currency_icon_position') === 'left') {
            return config('settings.site_currency_icon') . $price;
        }else {
            return $price . config('settings.site_currency_icon');
        }
    }
}

/** Calculate cart total price */
if(!function_exists('cartTotal')){
    function cartTotal()
    {
        $total = 0;

        foreach(Cart::content() as $item){
            $productPrice = $item->price;
            $sizePrice = $item->options?->product_size['price'] ?? 0;
            $optionsPrice = 0;
            foreach($item->options->product_options as $option){
                $optionsPrice += $option['price'];
            }

            $total += ($productPrice + $sizePrice + $optionsPrice) * $item->qty;

        }

        return $total;
    }
}

/** Calculate product total price */
if(!function_exists('productTotal')){
    function productTotal($rowId)
    {
        $total = 0;

            $product = Cart::get($rowId);

            $productPrice = $product->price;
            $sizePrice = $product->options?->product_size['price'] ?? 0;
            $optionsPrice = 0;

            foreach($product->options->product_options as $option){
                $optionsPrice += $option['price'];
            }

            $total += ($productPrice + $sizePrice + $optionsPrice) * $product->qty;


        return $total;
    }
}


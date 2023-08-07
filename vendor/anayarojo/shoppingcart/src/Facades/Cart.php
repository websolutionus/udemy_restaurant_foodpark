<?php

namespace Gloudemans\Shoppingcart\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static \Gloudemans\Shoppingcart\Cart instance(?string $instance)
 * @method static string currentInstance()
 * @method static \Illuminate\Support\Collection content()
 * @method static \Illuminate\Support\Collection search(Closure $search)
 * @method static \Gloudemans\Shoppingcart\CartItem get(string $rowId)
 * @method static \Gloudemans\Shoppingcart\CartItem addCartItem(\Gloudemans\Shoppingcart\CartItem $item, bool $keepDiscount, bool $keepTax, bool $dispatchEvent)
 * @method static \Gloudemans\Shoppingcart\CartItem add(mixed $id, mixed $name, float|int $qty, float $price, float $weight, array $options)
 * @method static \Gloudemans\Shoppingcart\CartItem update(string $rowId, mixed $qty)
 * @method static string weight(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string initial(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string discount(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string subtotal(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string tax(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string total(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static string priceTotal(int $decimals, string $decimalPoint, string $thousandSeperator)
 * @method static float priceTotalFloat()
 * @method static float initialFloat()
 * @method static float discountFloat()
 * @method static float subtotalFloat()
 * @method static float taxFloat()
 * @method static float weightFloat()
 * @method static void setDiscount(string $rowId, float|int $discount)
 * @method static void setTax(string $rowId, float|int $taxRate)
 * @method static void setGlobalDiscount( float|int $discount)
 * @method static void setGlobalTax( float|int $taxRate)
 * @method static void associate(string $rowId, mixed $model)
 * @method static void remove(string $rowId)
 * @method static void store(mixed $identifier)
 * @method static void restore(mixed $identifier)
 * @method static void erase(mixed $identifier)
 * @method static bool merge(mixed $identifier, bool $keepDiscount, bool $keepTax, bool $dispatchAdd)
 * @method static void destroy()
 */
class Cart extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}

<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $user_id
 * @property int $delivery_area_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DeliveryArea $deliveryArea
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeliveryAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $status
 * @property int $show_at_home
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $min_purchase_amount
 * @property string $expire_date
 * @property string $discount_type
 * @property float $discount
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinPurchaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryArea
 *
 * @property int $id
 * @property string $area_name
 * @property string $min_delivery_time
 * @property string $max_delivery_time
 * @property float $delivery_fee
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereAreaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereDeliveryFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereMaxDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereMinDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereUpdatedAt($value)
 */
	class DeliveryArea extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property string $invoice_id
 * @property int $user_id
 * @property string $address
 * @property float $discount
 * @property float $delivery_charge
 * @property float $subtotal
 * @property float $grand_total
 * @property int $product_qty
 * @property string|null $payment_method
 * @property string $payment_status
 * @property string|null $payment_approve_date
 * @property string|null $transaction_id
 * @property mixed|null $coupon_info
 * @property string|null $currency_name
 * @property string $order_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $address_id
 * @property-read \App\Models\DeliveryArea $deliveryArea
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Address|null $userAddress
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentApproveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereProductQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderItem
 *
 * @property int $id
 * @property int $order_id
 * @property string $product_name
 * @property int $product_id
 * @property float $unit_price
 * @property int $qty
 * @property mixed|null $product_size
 * @property mixed|null $product_option
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderPlacedNotification
 *
 * @property int $id
 * @property string $message
 * @property int $order_id
 * @property int $seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereUpdatedAt($value)
 */
	class OrderPlacedNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentGatewaySetting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereValue($value)
 */
	class PaymentGatewaySetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $thumb_image
 * @property int $category_id
 * @property string $short_description
 * @property string $long_description
 * @property float $price
 * @property float $offer_price
 * @property int|null $quantity
 * @property string|null $sku
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property int $show_at_home
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductGallery> $productImages
 * @property-read int|null $product_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductOption> $productOptions
 * @property-read int|null $product_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductSize> $productSizes
 * @property-read int|null $product_sizes_count
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereThumbImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductGallery
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereUpdatedAt($value)
 */
	class ProductGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductOption
 *
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereUpdatedAt($value)
 */
	class ProductOption extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductSize
 *
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereUpdatedAt($value)
 */
	class ProductSize extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SectionTitle
 *
 * @property int $id
 * @property string|null $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereValue($value)
 */
	class SectionTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string $image
 * @property string|null $offer
 * @property string $title
 * @property string $sub_title
 * @property string $short_description
 * @property string|null $button_link
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SliderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereButtonLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOffer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WhyChooseUs
 *
 * @property int $id
 * @property string $icon
 * @property string $title
 * @property string $short_description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WhyChooseUsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereUpdatedAt($value)
 */
	class WhyChooseUs extends \Eloquent {}
}


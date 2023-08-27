<?php

use App\Events\RTOrderPlacedNotificationEvent;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Admin Auth Routes */
Route::group(['middleware' => 'guest'], function () {
    Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::get('admin/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin.forget-password');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
    Route::post('address', [DashboardController::class, 'createAddress'])->name('address.store');
    Route::put('address/{id}/edit', [DashboardController::class, 'updateAddress'])->name('address.update');
    Route::delete('address/{id}', [DashboardController::class, 'destroyAddress'])->name('address.destroy');



});

require __DIR__.'/auth.php';

/** Show Home page */
Route::get('/', [FrontendController::class, 'index'])->name('home');

/** Show Product details page */
Route::get('/product/{slug}', [FrontendController::class, 'showProduct'])->name('product.show');

/** Product Modal Route */
Route::get('/load-product-modal/{productId}', [FrontendController::class, 'loadProductModal'])->name('load-product-modal');

/** Add to cart Route */
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('get-cart-products', [CartController::class, 'getCartProduct'])->name('get-cart-products');
Route::get('cart-product-remove/{rowId}', [CartController::class, 'cartProductRemove'])->name('cart-product-remove');


/** Cart Page Routes */
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart-update-qty', [CartController::class, 'cartQtyUpdate'])->name('cart.quantity-update');
Route::get('/cart-destroy', [CartController::class, 'cartDestroy'])->name('cart.destroy');

/** Coupon Routes */
Route::post('/apply-coupon', [FrontendController::class, 'applyCoupon'])->name('apply-coupon');
Route::get('/destroy-coupon', [FrontendController::class, 'destroyCoupon'])->name('destroy-coupon');

Route::group(['middleware' => 'auth'], function(){
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('checkout/{id}/delivery-cal', [CheckoutController::class, 'CalculateDeliveryCharge'])->name('checkout.delivery-cal');
    Route::post('checkout', [CheckoutController::class, 'checkoutRedirect'])->name('checkout.redirect');

    /** Payment Routes */
    Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('make-payment', [PaymentController::class, 'makePayment'])->name('make-payment');

    Route::get('payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('payment-cancel', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');

    /** PayPal Routes */
    Route::get('paypal/payment', [PaymentController::class, 'payWithPaypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypalSuccess'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('paypal.cancel');

    /** Stripe Routes */
    Route::get('stripe/payment', [PaymentController::class, 'payWithStripe'])->name('stripe.payment');
    Route::get('stripe/success', [PaymentController::class, 'stripeSuccess'])->name('stripe.success');
    Route::get('stripe/cancel', [PaymentController::class, 'stripeCancel'])->name('stripe.cancel');

    /** Stripe Routes */
    Route::get('razorpay-redirect', [PaymentController::class, 'razorpayRedirect'])->name('razorpay-redirect');
    Route::post('razorpay/payment', [PaymentController::class, 'payWithRazorpay'])->name('razorpay.payment');


});





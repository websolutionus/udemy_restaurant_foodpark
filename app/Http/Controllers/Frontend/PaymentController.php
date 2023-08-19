<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PaymentController extends Controller
{
    function index() : View {
        if(!session()->has('delivery_fee') || !session()->has('address')) {
            throw ValidationException::withMessages(['Something went wrong']);
        }

        $subtotal = cartTotal();
        $delivery = session()->get('delivery_fee') ?? 0;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $grandTotal = grandCartTotal($delivery);
        return view('frontend.pages.payment', compact(
            'subtotal',
            'delivery',
            'discount',
            'grandTotal'
        ));
    }

    function makePayment(Request $request, OrderService $orderService) {
        $request->validate([
            'payment_gateway' => ['required', 'string', 'in:paypal']
        ]);

        /** Create Order */
       if($orderService->createOrder()){
            // redirect user to the payment host
            switch ($request->payment_gateway) {
                case 'paypal':
                    return response(['redirect_url' => route('paypal.payment')]);
                    break;

                default:
                    break;
            }
       }
    }


    /** Paypal Payment  */

    function payWhitPaypal() {
        return 'Payment processing';
    }

    function paypalSuccess() {

    }

    function paypalCancel() {

    }
}

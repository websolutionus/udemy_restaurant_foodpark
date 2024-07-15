<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\AddressCreateRequest;
use App\Models\Address;
use App\Models\DeliveryArea;
use App\Models\Order;
use App\Models\ProductRating;
use App\Models\Reservation;
use App\Models\Wishlist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    function index() : View {
        $deliveryAreas = DeliveryArea::where('status', 1)->get();
        $userAddresses = Address::where('user_id', auth()->user()->id)->get();
        $orders = Order::where('user_id', auth()->user()->id)->get();
        $reservations = Reservation::where('user_id', auth()->user()->id)->get();
        $reviews = ProductRating::where('user_id', auth()->user()->id)->get();
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->latest()->get();
        $totalOrders = Order::where('user_id', auth()->user()->id)->count();
        $totalCompleteOrders = Order::where('user_id', auth()->user()->id)->where('order_status', 'delivered')->count();
        $totalCancelOrders = Order::where('user_id', auth()->user()->id)->where('order_status', 'declined')->count();

        return view('frontend.dashboard.index', compact('deliveryAreas', 'userAddresses', 'orders', 'reservations', 'reviews', 'wishlist', 'totalOrders', 'totalCompleteOrders', 'totalCancelOrders'));
    }

    function createAddress(AddressCreateRequest $request)  {
        $address = new Address();
        $address->user_id = auth()->user()->id;
        $address->delivery_area_id = $request->area;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->email = $request->email;
        $address->phone = $request->phone;
        $address->address = $request->address;
        $address->type = $request->type;
        $address->save();

        toastr()->success('Created Successfully');

        return redirect()->back();
    }

    function updateAddress(string $id, AddressCreateRequest $request) {
        $address = Address::findOrFail($id);
        $address->user_id = auth()->user()->id;
        $address->delivery_area_id = $request->area;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->email = $request->email;
        $address->phone = $request->phone;
        $address->address = $request->address;
        $address->type = $request->type;
        $address->save();

        toastr()->success('Updated Successfully');

        return to_route('admin.dashboard');
    }

    function destroyAddress(string $id) {
        $address = Address::findOrFail($id);
        if($address && $address->user_id === auth()->user()->id){
            $address->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully']);

        }
        return response(['status' => 'error', 'message' => 'something went wrong!']);
    }
}

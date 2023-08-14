<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DeliveryArea;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    function index() : View {
        $deliveryAreas = DeliveryArea::where('status', 1)->get();
        return view('frontend.dashboard.index', compact('deliveryAreas'));
    }

    function createAddress(Request $request)  {
        dd($request->all());
    }
}

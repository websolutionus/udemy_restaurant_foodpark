<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderPlacedNotification;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    function index() : View {
        return view('admin.dashboard.index');
    }

    function clearNotification() {
        $notification = OrderPlacedNotification::query()->update(['seen' => 1]);

        toastr()->success('Notification Cleared Successfully!');
        return redirect()->back();
    }
}

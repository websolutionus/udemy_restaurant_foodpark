<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    function index() : View {
        return view('frontend.dashboard.index');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    function index() : View {
        return view('frontend.pages.payment');
    }
}

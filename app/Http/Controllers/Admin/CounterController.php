<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CounterController extends Controller
{
    function index() : View {
        return view('admin.counter.index');
    }

    function update(Request $request) {
        dd($request->all());
    }
}

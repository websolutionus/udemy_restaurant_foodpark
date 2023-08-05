<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    function index() : View {
        return view('admin.setting.index');
    }

    function UpdateGeneralSetting(Request $request)
    {
        dd($request->all());
    }
}

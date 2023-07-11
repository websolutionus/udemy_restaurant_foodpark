<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index() : View {
        return view('admin.profile.index');
    }

    function updateProfile(ProfileUpdateRequest $request) : RedirectResponse {


        return redirect()->back();
    }
}

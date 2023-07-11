<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index() : View {
        return view('admin.profile.index');
    }

    function updateProfile(ProfileUpdateRequest $request) : RedirectResponse {

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }
}

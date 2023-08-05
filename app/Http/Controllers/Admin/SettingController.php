<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    function index(): View
    {
        return view('admin.setting.index');
    }

    function UpdateGeneralSetting(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => ['required', 'max:255'],
            'site_default_currency' => ['required', 'max:4'],
            'site_currency_icon' => ['required', 'max:4'],
            'site_currency_icon_position' => ['required', 'max:255'],
        ]);

        foreach($validatedData as $key => $value){
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');

        return redirect()->back();

    }
}

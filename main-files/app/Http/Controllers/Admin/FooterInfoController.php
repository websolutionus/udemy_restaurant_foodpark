<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterInfoUpdateRequest;
use App\Models\FooterInfo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FooterInfoController extends Controller
{
    function index() : View {
        $footerInfo = FooterInfo::first();
        return view('admin.footer-info.index', compact('footerInfo'));
    }

    function update(FooterInfoUpdateRequest $request) {
        FooterInfo::updateOrCreate(
            ['id' => 1],
            [
                'short_info' => $request->short_info,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'copyright' => $request->copyright
            ]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }
}

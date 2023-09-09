<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        return view('admin.about.index');
    }

    function update(Request $request): RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image', $request->old_path);

        About::updateOrCreate(
            ['id' => 1],
            [
                'image' => $imagePath,
                'title' => $request->title,
                'main_title' => $request->main_title,
                'description' => $request->description,
                'video_link' => $request->video_link
            ]
        );

        toastr()->success('Created Successfully');

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppDownloadSectionCreateRequest;
use App\Models\AppDownloadSection;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppDownloadSectionController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        return view('admin.app-download-section.index');
    }

    function store(AppDownloadSectionCreateRequest $request): RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image');
        $backgroundPath = $this->uploadImage($request, 'background');

        AppDownloadSection::updateOrCreate(
            ['id' => 1],
            [
                'image' => !empty($imagePath) ?  $imagePath : '',
                'background' => !empty($backgroundPath) ?  $backgroundPath : '',
                'title' => $request->title,
                'short_description' => $request->short_description,
                'play_store_link' => $request->play_store_link,
                'apple_store_link' => $request->apple_store_link
            ]

        );

        toastr()->success('Updated Successfully!');

        return to_route('admin.app-download.index');
    }
}

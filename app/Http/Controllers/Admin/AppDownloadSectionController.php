<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppDownloadSectionController extends Controller
{
    function index() : View {
        return view('admin.app-download-section.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubscriberDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsLetterController extends Controller
{
    function index(SubscriberDataTable $dataTable) : View|JsonResponse {
        return $dataTable->render('admin.news-letter.index');
    }
}

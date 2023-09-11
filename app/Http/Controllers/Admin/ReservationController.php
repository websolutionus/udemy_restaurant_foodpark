<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ReservationDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    function index(ReservationDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.reservation.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    function index(OrderDataTable $dataTable) : View {
        return $dataTable->render('admin.order.index');
    }
}

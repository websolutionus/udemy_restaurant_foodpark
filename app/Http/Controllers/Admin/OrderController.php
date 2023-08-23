<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    function index(OrderDataTable $dataTable) : View|JsonResponse {
        return $dataTable->render('admin.order.index');
    }

    function show($id) : View {
        $order = Order::findOrFail($id);

        return view('admin.order.show', compact('order'));
    }
}

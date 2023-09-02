<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DailyOfferDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Response;

use function Termwind\render;

class DailyOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DailyOfferDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.daily-offer.index');
    }

    function productSearch(Request $request) {
        return $request->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.daily-offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

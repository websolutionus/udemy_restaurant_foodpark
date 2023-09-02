<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DailyOfferDataTable;
use App\Http\Controllers\Controller;
use App\Models\DailyOffer;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

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

    function productSearch(Request $request) : Response {
        $product = Product::select('id', 'name', 'thumb_image')->where('name', 'LIKE', '%'.$request->search.'%')->get();
        return response($product);
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
        $request->validate([
            'product' => ['required', 'integer'],
            'status' => ['required', 'boolean']
        ]);

        $offer = new DailyOffer();
        $offer->product_id = $request->product;
        $offer->status = $request->status;
        $offer->save();

        toastr()->success('Created Successfully');

        return to_route('admin.daily-offer.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dailyOffer = DailyOffer::with('product')->findOrFail($id);
        return view('admin.daily-offer.edit', compact('dailyOffer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product' => ['required', 'integer'],
            'status' => ['required', 'boolean']
        ]);

        $offer = DailyOffer::findOrFail($id);
        $offer->product_id = $request->product;
        $offer->status = $request->status;
        $offer->save();

        toastr()->success('Updated Successfully');

        return to_route('admin.daily-offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $dailyOffer = DailyOffer::findOrFail($id);
            $dailyOffer->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}

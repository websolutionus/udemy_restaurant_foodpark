<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductOption;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductOptionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
            'product_id' => ['required', 'integer']
        ],[
            'name.required' => 'Product option name is required',
            'name.max' => 'Product option max length is 255',
            'price.required' => 'Product option price is required',
            'price.numeric' => 'Product option price have to be a number',
        ]);

        $option = new ProductOption();
        $option->product_id = $request->product_id;
        $option->name = $request->name;
        $option->price = $request->price;
        $option->save();

        toastr()->success('Created Successfully!');

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : Response
    {
        try{
            $image = ProductOption::findOrFail($id);
            $image->delete();

            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        }catch(\Exception $e){
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}

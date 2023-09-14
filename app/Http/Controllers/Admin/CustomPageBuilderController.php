<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CustomPageBuilderDataTable;
use App\Http\Controllers\Controller;
use App\Models\CustomPageBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomPageBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CustomPageBuilderDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.custom-page-builder.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.custom-page-builder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:200', 'unique:custom_page_builders,name'],
            'content' => ['required'],
            'status' => ['required', 'boolean']
        ]);

        $page = new CustomPageBuilder();
        $page->name = $request->name;
        $page->slug = \Str::slug($request->name);
        $page->content = $request->content;
        $page->status = $request->status;
        $page->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.custom-page-builder.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $page = CustomPageBuilder::findOrFail($id);
        return view('admin.custom-page-builder.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200', 'unique:custom_page_builders,name,'.$id],
            'content' => ['required'],
            'status' => ['required', 'boolean']
        ]);

        $page = CustomPageBuilder::findOrFail($id);
        $page->name = $request->name;
        $page->slug = \Str::slug($request->name);
        $page->content = $request->content;
        $page->status = $request->status;
        $page->save();

        toastr()->success('Updated Successfully!');

        return to_route('admin.custom-page-builder.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $page = CustomPageBuilder::findOrFail($id);
            $page->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChefDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChefCreateRequest;
use App\Models\Chef;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use function Ramsey\Uuid\v1;

class ChefController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ChefDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.chef.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChefCreateRequest $request) : RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image');

        $chef = new Chef();
        $chef->image = $imagePath;
        $chef->name = $request->name;
        $chef->title = $request->title;
        $chef->fb = $request->fb;
        $chef->in = $request->in;
        $chef->x = $request->x;
        $chef->web = $request->web;
        $chef->show_at_home = $request->show_at_home;
        $chef->status = $request->status;
        $chef->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.chefs.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : Response
    {
        //
    }
}

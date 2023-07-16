<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\WhyChooseUsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WhyChooseUsCreateRequest;
use App\Models\SectionTitle;
use App\Models\WhyChooseUs;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WhyChooseUsDataTable $dataTable)
    {
        $keys = ['why_choose_top_title', 'why_choose_main_title', 'why_choose_sub_title'];
        $titles = SectionTitle::whereIn('key', $keys)->pluck('value','key');
        return $dataTable->render('admin.why-choose-us.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.why-choose-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyChooseUsCreateRequest $request) : RedirectResponse
    {
        WhyChooseUs::create($request->validated());

        toastr()->success('Created Successfully');

        return to_route('admin.why-choose-us.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $whyChooseUs = WhyChooseUs::findOrFail($id);
        return view('admin.why-choose-us.edit', compact('whyChooseUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhyChooseUsCreateRequest $request, string $id) : RedirectResponse
    {
        $whyChooseUs = WhyChooseUs::findOrFail($id);
        $whyChooseUs->update($request->validated());

        toastr()->success('Created Successfully');

        return to_route('admin.why-choose-us.index');
    }

    public function updateTitle(Request $request) {
        $request->validate([
            'why_choose_top_title' => ['max:100'],
            'why_choose_main_title' => ['max:200'],
            'why_choose_sub_title' => ['max:500']
        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_top_title'],
            ['value' => $request->why_choose_top_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_main_title'],
            ['value' => $request->why_choose_main_title]
        );

        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_sub_title'],
            ['value' => $request->why_choose_sub_title]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $whyChooseUs = WhyChooseUs::findOrFail($id);
            $whyChooseUs->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully']);
        }catch(\Exception $e){
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}

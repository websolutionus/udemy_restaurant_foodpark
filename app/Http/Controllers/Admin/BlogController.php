<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCategoryDataTable;
use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogCateogry;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Str;

class BlogController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $categories = BlogCategory::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCreateRequest $request)
    {
        $imagePath = $this->uploadImage($request, 'image');

        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->image = $imagePath;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->category_id = $request->category;
        $blog->description = $request->description;
        $blog->seo_title = $request->seo_title;
        $blog->seo_description = $request->seo_description;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Created Successfully');

        return to_route('admin.blogs.index');


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

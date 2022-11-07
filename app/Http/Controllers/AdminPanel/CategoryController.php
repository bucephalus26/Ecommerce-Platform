<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    // returns parentTree for subcategories
    public static function getParentsTree($category, $title)
    {
        // if category is parent category, return title of parent.
        if ($category->parent_id == 0)
        {
            return $title;
        }

        // find category with parent_id
        $parent = Category::find($category->parent_id);
        // add title
        $title = $parent->title . ' > ' . $title;
        // call function - recursive structure
        return CategoryController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Category data to index page - controller accesses model and retrieves data into $data, which is sent to index page
        $data = Category::all();
        return view('admin.category.index', [
            'data'=> $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::all();
        return view('admin.category.create', [
            'data'=> $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Category();
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;

        // Selected images are stored in 'images'
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        //
        $data = Category::find($id);
        return view('admin.category.show', [
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        //
        $data = Category::find($id);
        $datalist = Category::all();
        return view('admin.category.edit', [
            'data'=> $data,
            'datalist'=> $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        //
        $data = Category::find($id);
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;

        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        //
        $data = Category::find($id);
        // Delete image if entry deleted
        if ($data->image && Storage::disk('public')->exists('$data->image')) {
            // delete image
            Storage::delete('$data->image');
        }
        $data->delete();
        return redirect('admin/category');
    }
}

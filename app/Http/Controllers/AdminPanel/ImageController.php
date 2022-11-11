<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // pid key to get product data
    public function index($pid)
    {
        // building query
        // Get product information and images to image index page
        $product = Product::find($pid);
        // get images where (where clause) pid matches
        $images = DB::table('images')->where('product_id', $pid)->get();

        return view('admin.image.index', [
            'product'=> $product,
            'images'=> $images,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request, $pid)
    {
        //
        $data = new Image();
        $data->product_id = $pid;
        $data->title = $request->title;

        // Selected images are stored in 'images'
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }

        $data->save();
        // URL to named route - return images to pid
        return redirect()->route('admin.image.index', ['pid'=>$pid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    }

    
  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pid, $id){


    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid, $id)
    {
        
        // $id deletes record
        $data = Image::find($id);
        // Delete image if entry deleted
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            // delete image
            Storage::delete($data->image);
        }
        $data->delete();
        // $pid for redirection
        return redirect()->route('admin.image.index', ['pid'=>$pid]);
    }
}

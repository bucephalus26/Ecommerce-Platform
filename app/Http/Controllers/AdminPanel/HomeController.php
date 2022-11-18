<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Define index page
    public function index()
    {
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        return view( view:'admin.index',[
            'page'=>$page,
            'sliderdata'=>$sliderdata_
            'productlist1'=>$productlist1
        ]);
    }

    public function product($id)
    {
        $data=Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('admin.product',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
}

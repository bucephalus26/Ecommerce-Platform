<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $page='home';
        $productlist1 = Product::limit(6)->get();
        return view('home.index',[
            'page'=>$page,
            'productlist1'=>$productlist1
        ]);
    }


    public function product($id)
    {
        // get product data by id
        $data=Product::find($id);
        // get images from image gallery where (where clause) id matches
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function categoryproducts($id)
    {
        echo "categroy products";
        exit();

        // get product data by id
        $data=Product::find($id);
        // get images from image gallery where (where clause) id matches
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public static function maincategories()
    {
        // main categories have parent_id of 0
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

}

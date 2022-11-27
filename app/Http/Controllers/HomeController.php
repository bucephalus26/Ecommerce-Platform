<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // index page
    public function index()
    {
        $page='home';
        $productlist1 = Product::limit(6)->get();
        $setting= Setting::first();
        return view('home.index',[
            'page'=>$page,
            'productlist1'=>$productlist1,
            'setting'=>$setting
            
        ]);
    }

    // about page
    public function about()
    {
        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting,
            
        ]);
    }

    // contact page
    public function contact()
    {
        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting,
            
        ]);
    }

     // contact form
     public function contactform(Request $request)
     {
         $data = new Message();
         $data->name = $request->input('name');
         $data->email = $request->input('email');
         $data->phone = $request->input('phone');
         $data->message = $request->input('message');
         $data->save();

         // return to contact us page with a notification confirming message sent.
         return redirect()->route('contact')->with('messagesent', 'We have received your message and will respond shortly!'); 
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
        // get category product data by id
        $category=Category::find($id);
        // get products from table where (where clause) category id matches
        $products = DB::table('products')->where('category_id', $id)->get();
        return view('home.categoryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);
    }

    public static function maincategories()
    {
        // main categories have parent_id of 0
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

   

}

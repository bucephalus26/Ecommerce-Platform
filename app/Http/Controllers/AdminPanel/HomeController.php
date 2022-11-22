<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function maincatergorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    // Define index page
    public function index()
    {
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        $setting= Setting::first();
        return view( view:'admin.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata_,
            'productlist1'=>$productlist1
        ]);
    }

    public function about()
    {
        $setting= Setting::first();
        return view( view:'home.about',[
            'setting'=>$setting,
        ]);
    }

    public function references()
    {
        $setting= Setting::first();
        return view( view:'home.references',[
            'setting'=>$setting,
        ]);
    }
    public function contact()
    {
        $setting= Setting::first();
        return view( view:'home.contact',[
            'setting'=>$setting,
        ]);
    }
    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input( key: 'name');
        $data->email = $request->input( key: 'email');
        $data->phone = $request->input( key: 'phone');
        $data->subject = $request->input( key: 'subject');
        $data->message = $request->input( key: 'message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route( route: 'contact')->with('info', 'your message has been sent, thank you.');
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
    public function categoryproduct($id)
    {
        echo "Category Products";
        exit();

        $category=Product::find($id);
        $products = DB::table(table: 'products')->where(column: 'category_id', $id)->get();
        return view(view: 'home.cateogryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(to:'/');
    }
    public function loginadmin(Request $request)
    {
        dd($request)
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(default: '/admin');
        }
        return back()->withErrors([
            'email' => 'the product credentials dont match out records',
            ])->onlyinput('email');
        }
}

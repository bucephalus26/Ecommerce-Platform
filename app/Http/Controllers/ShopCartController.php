<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{
    public static function countshopcart()
    {
        return ShopCart::where('user_id',Auth::id())->count();
    }
    public function index()
    {
        $data = ShopCart::where('user_id', Auth::id())->get();
        return view('home.user.shopcart', [
            'data'=>$data        ])
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $id= $request->id;
        $data = ShopCart::where('product_id',$id)->where('user_id', Auth::id())->first(); //Check product for user
        if ($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        } else
        {
        $data = new ShopCart();
        $data->product_id = $id
        $data->user_id = Auth::id();
        $data->quantity = $request->input('quantity');
        }
        $data->save();

        return redirect()->back()->with('info', 'Products added to ShoppingCart');
    }
    public function destory($id)
    {
        $data= ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Product deleted from ShoppingCart');
    }
    public function update(Request $request, $id)
    {
        $data = ShopCart::find($id);
        $data->quantity=$request->input('quantity');
        $data->save();
        return redirect()->back()->with('success','Product Update to ShopCart');
    }
    //Adds a product to basket
    public function add($id)
    {
        $data = ShopCart::where('product_id',$id)->where('user_id', Auth::id())->first(); //Check product for user
        if ($data)
        {
            $data->quantity = $data->quantity + 1;
        } else
        {
        $data = new ShopCart();
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->quantity = 1;
        }
        $data->save();

        return redirect()->back()->with('info', 'Products added to ShoppingCart');
    }
}
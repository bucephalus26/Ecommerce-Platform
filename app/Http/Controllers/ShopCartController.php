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
            'data'=>$data        
        ]);
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

    public function order(Request $request)
    {
        return view('home.user.order', [
            'total'=>$request->total
        ]);
    } 
    //Store a newly created resource in storage
    public function storeorder(Request $request)
    {

        // Get credit card info and send to bank service if everything checks out ok
        $cardcheck="True"; //assume we send credit card information to the bank and get results
         
        if ($cardcheck=='True')
        {
        $data = new Order();
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->total = $request->input('total');
        $data->user_id = Auth::id();
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->save();

        $datalist = Shopcart::where('user_id',Auth::id())->get();
        foreach ($datalist as $rs)
        {
            $data2 = new OrderProduct;
            $data2->user_id= Auth::id();
            $data2->product_id= $rs->product_id;
            $data2->order_id = $data->id;
            $data2->price = $rs ->product->price;
            $data2->quantity = $rs ->quantity;
            $data2->amount = $rs->quantity * $rs->product->price;
            $data2->save();
        }
        $data3 = Shopcart::where('uder_id', Auth::id());
        $data3->delete();

        return redirect()->route('shopcart.ordercomplete')->with('success','Product order success');
        }
        else
        return redirect()->route('shopcart.ordercomplete')->with('error','Your credit card is not valid');

    } 

    public function ordercomplete()
    {
        return view('home.user.ordercomplete');
    }

}
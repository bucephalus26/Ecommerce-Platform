<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\ProductOrder;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ShoppingCart::where('user_id', Auth::id())->get();
        return view('home.user.shoppingcart', [
            'data'=>$data        
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
        $id= $request->id;
        
        // if item already in cart of SPECIFIC user, add quantities to same entry
        $data = ShoppingCart::where('product_id',$id)->where('user_id', Auth::id())->first(); //Check product for user
        if ($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        } else
        {
            // new shopping cart item for each item
        $data = new ShoppingCart();
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->quantity = $request->input('quantity');
        }
        $data->save();

        // redirect to save product page
        return redirect()->back()->with('addedcart', 'The item has been added to your cart.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // changes quantity of item in cart
        $data = ShoppingCart::find($id);
        $data->quantity=$request->input('quantity');
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // removes items from carty
        $data= ShoppingCart::find($id);
        $data->delete();
        return redirect()->back();
    }

    // ORDER FUNCTIONS

    public function order(Request $request)
    {
        return view('home.user.orders', [
            'total'=>$request->total
        ]);
    } 

    public function createorder(Request $request)
    {
        // creates new order
        $data = new Order();
        $data->name = Auth::user()->name;
        $data->email = Auth::user()->email;
        $data->total = $request->input('total');
        $data->user_id = Auth::id();
        $data->save();

        // get shopping cart information
        $datalist = Shoppingcart::where('user_id',Auth::id())->get();
        foreach ($datalist as $rs)
        {
            // new productOrder for each Shopping cart item
            $data2 = new ProductOrder();
            $data2->user_id= Auth::id();
            $data2->product_id= $rs->product_id;
            $data2->order_id = $data->id;
            $data2->price = $rs ->product->price;
            $data2->quantity = $rs ->quantity;
            $data2->amount = $rs->quantity * $rs->product->price;
            $data2->save();
        }
        // empty shoppingcart by deleting
        $data3 = Shoppingcart::where('user_id', Auth::id());
        $data3->delete();

        return redirect()->back()->with('success','Your order has been successful!');
    } 

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;

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
}

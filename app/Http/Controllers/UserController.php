<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');   

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // ORDERS 
    public function orders()
    {
        $data= Order::where('user_id','=', Auth::id())->get();
        return view('home.user.orders', [
            'data'=>$data,
        ]);
    }

    // data sent to page that shows details of an order
    public function orderdetail($id)
    {
        $order= Order::find($id);
        $orderproducts= ProductOrder::where('order_id','=',$id)->get();
        
        return view('home.user.orderdetails', [
            'order'=>$order,
            'orderproducts'=>$orderproducts,
        ]);
        
    }
    
    // function allowing user to cancel product within order
    public function cancelproduct($id)
    {
        $data= ProductOrder::find($id);
        $data->status = 'Canceled';
        $data->save(); 
        return redirect()->back();
    }

    // function allowing user to cancel order
    public function cancelorder($id)
    {
        $data= Order::find($id);
        $data->status = 'Canceled';
        $data->save(); 
        return redirect()->back();
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('home.user.index');   

    }

    public function reviews()
    {
        $comments= Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments', [
            'comments'=>$comments,
        ]);
    }

    public function orderdetail($id)
    {
        $order= Order::find($id);
        $orderproduct= orderproduct::where('order_id','=',$id)->get();
        
        return view('home.user.orderdetail', [
            'order'=>$order,
            'orderproduct'=>$orderproduct,
        ]);
        
    }

    public function orders()
    {
        $data= Order::where('user_id','=',Auth::id())->get();
        return view('home.user.orders', [
            'data'=>$data,
        ]);
    }

    public function create()
    {

    }

    public function destroy($id)
    {

    }

    public function reviewdestroy()
    {
        $data= Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));  
    }
}

?>
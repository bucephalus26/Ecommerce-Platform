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
        $setting= Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments', [
            'comments'=>$comments,
        ]);
    }

    public function create()
    {

    }
}

?>
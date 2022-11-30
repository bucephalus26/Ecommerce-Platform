<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;


class AdminUserController extends Controller
{
    public function index()
    {
        $data=User::all();
        return view('admin.user.index',[
            'data' =>$data
        ]);
    }

    //Displays the resources specified
    public function show($id)
    {
        $data=User::find($id);
        $roles=Role::all();
backend_mikhail
        return view('admin.user.index',[

        return view('admin.user.show',[
backend_ibraheem
            'data'=>$data,
            'roles'=>$roles
        ]);
    }
backend_mikhail


    // update roles
 backend_ibraheem
    public function addrole(Request $request, $id)
    {
        $data= new RoleUser();
        $data->user_id= $id;
        $data->role_id= $request->role_id;
        $data->save();
        return redirect(route('admin.user.show', ['id'=>$id]));
    }
    //Remove the resource specified from storage
backend_mikhail
    public function destroyrole($uid,$rid)

    public function deleterole($uid,$rid)
backend_ibraheem
    {
        $user=User::find($uid);
        $user->roles()->detach($rid); //Here, many to many relation delete related data
        return redirect(route('admin.user.show',['id'=>$uid]));
    } 
}
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
        return view('admin.user.show',[
            'data'=>$data,
            'roles'=>$roles
        ]);
    }

    // update roles
    public function addrole(Request $request, $id)
    {
        $data= new RoleUser();
        $data->user_id= $id;
        $data->role_id= $request->role_id;
        $data->save();
        return redirect(route('admin.user.show', ['id'=>$id]));
    }
    //Remove the resource specified from storage
    public function deleterole($uid,$rid)
    {
        $user=User::find($uid);
        $user->roles()->detach($rid); //Here, many to many relation delete related data
        return redirect(route('admin.user.show',['id'=>$uid]));
    } 

    public function destroy($id)
    {
        // deletes message
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.user.index')); // return to admin index page
    }
}
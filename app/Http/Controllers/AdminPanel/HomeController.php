<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Define index page
    public function index()
    {
        return view("admin.index");
    }

    // settings page
    public function setting()
    {
        // get settings from table
        $data = Setting::first();
        // if table is empty, add record
        if($data===null){

            // create data
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            // after creating, get data from database table
            $data= Setting::first();
        }
        // return data to view
        return view("admin.setting", ['data' => $data]);

    }

    public function settingUpdate(Request $request)
    {
        // get id from input
       $id=$request->input('id');
       // get data by id
       $data = Setting::find($id);
       $data->title = $request->input('title');
       $data->keywords = $request->input('keywords');
       $data->description = $request->input('description');
       $data->company = $request->input('company');
       $data->address = $request->input('address');
       $data->phone = $request->input('phone');
       $data->email = $request->input('email');
       $data->aboutus = $request->input('aboutus');
       $data->contact = $request->input('contact');
       // Selected logo is stored in 'images'
        if($request->file('logo')){
            $data->logo = $request->file('logo')->store('images');
        }
       $data->status = $request->input('status');
       $data->save();

       return redirect()->route('admin.setting');


    }
}

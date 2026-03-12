<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin login
    function login(Request $request){

    $admin = Admin::where([
  ['name',"=",$request->name],
  ['password',"=",$request->password],

    ])->first();
    return view('admin-view', ["name"=>$admin->name]);
    }
}

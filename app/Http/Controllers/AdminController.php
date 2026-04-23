<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin login
    function login(Request $request){

//for validation

$validation = $request -> validate([

"name"=> "required",
"password"=>"required"

]);


    $admin = Admin::where([
  ['name',"=",$request->name],
  ['password',"=",$request->password],

    ])->first();
if (!$admin) {
 $validation = $request -> validate([

"user"=> "required",


],[
  "user.required"=> "user is not found"
]);
}


    return view('admin-view', ["name"=>$admin->name]);
    }
}

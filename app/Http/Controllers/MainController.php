<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    function login(){
    return view('auth.login');
    }


    function Register(){
    return view('auth.register'); 
    }

    function userRegister(Request $req){

       // return $req->input();
       $req->validate([
           'username' => 'required',
           'email'=> 'required|email|unique:admins',
           'password' => 'required|min:5|max:10|confirmed'

       ]);

       $admin = new Admin;

       $admin->name = $req->username;
       $admin->email = $req->email;
       $admin->password = Hash::make($req->password);
       $save = $admin->save();
       if($save){
           return back()->with('success','Added Successfully');
       } else {
           return back()->with('fail','Something went Wrong');
       }
        
    }


    function userCheck(Request $req){

        $req->validate([
           
            'email'=> 'required|email',
            'password' => 'required|min:5|max:10'
 
        ]);
        $userInfo = Admin::where('email','=',$req->email)->first();
       // var_dump($userInfo);die;
        if(!$userInfo){
            return back()->with('fail','No User Exists!');
        } else {
            if(Hash::check($req->password,$userInfo->password)){
                $req->session()->put('LoggedUser',$userInfo->id);
                return redirect('/admin/dashboard');
            }
            else{

                return back()->with('fail','Wrong Password');
            }
        }

    }


    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        //var_dump(session('LoggedUser'));die;
        return view('dashboard',$data);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
}

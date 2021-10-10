<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HTTP;
use App\Models\User;

class UsersController extends Controller
{
    function loadView($user){

        return view('users',['username'=>$user]);
    }

    function Viewload(){
         $data = ['anil','shyam','deepak'];
        return view('users',['users'=>$data]);
    }

    function index(){

        return DB::select("select * from tasks");

    }


    function getData(){

        return User::all();

    }


    function fetchData(){
        $collect =  http::get("https://reqres.in/api/users?page=2");
        return view('userapi',['collection' => $collect['data']]);
    }

    function authenticate(Request $req){

        
        $data =  $req->input();
        $req->session()->put('user',$data['username']);
        //echo session('user');
        return redirect('profile');

    }


    

}

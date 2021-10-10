<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class htmlController extends Controller
{
    function getData(Request $req){

        $req->validate([
            'username' => 'required | max:10',
            'userpass' =>  'required | min:5
            '
        ]);


        //return $req->input();
    }
}

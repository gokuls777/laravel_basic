<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    function addMem(Request $req){
        $data =  $req->input('uname');
        $req->session()->flash('user',$data);
        return redirect('add');
    }
}

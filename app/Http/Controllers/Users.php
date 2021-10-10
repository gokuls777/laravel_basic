<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
   public  function index($user){
      // echo 'Hello World'; echo $user;

      return ['name'=>"gokul",'age'=>"27"];

    }
}

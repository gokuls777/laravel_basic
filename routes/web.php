<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\htmlController;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
  //  return redirect('about/Company');                    // redirection of function
});

Route::get('/about/{user}',function($user){
    return view('about',['username'=>$user]);
});

Route::view("/contact",'contact');


//Route::get('path',"Controller@function");   Old Method in larvl 6/7
Route::get("/users/{name}",[UsersController::class,'loadView']);   //New Method in larvl 8

//Route::get("/users/{name}",function($name){

//  return view('users',['name'=>$name]);

//});
Route::view("/cuser",'users');
Route::get("/vuser",[UsersController::class,'Viewload']);

Route::post("htmlload",[htmlController::class,'getData']);
Route::view("/login",'htmlload');

Route::view("noaccess",'noaccess');

Route::group(['middleware'=>['protectedPage']],function(){
  Route::view("/userhome",'home');
});

Route::get("/userdata",[UsersController::class,'index']);

Route::get("/getdata",[UsersController::class,'getData']);

Route::get("/fetchapi",[UsersController::class,'fetchData']);

//Route::view("/login",'login');

Route::post('login_user',[UsersController::class,'authenticate']);

Route::view('profile','profile');

Route::get('/profile/{lang}', function($lang){

  App::setlocale($lang);
  return view ('profile');

});





Route::get('/login',function(){
  if(session()->has('user')){

    return redirect('/profile');
  } 
  return view('login');
});

Route::view('add','add');

Route::post('addmember',[AddMember::class,'addMem']);

Route::view('upload','upload');

Route::post('upload',[UploadController::class,'index']);

Route::get('products',[ProductController::class,'show']);

Route::view('Insertprd','addProduct');

Route::post('createProduct',[ProductController::class,'addProduct']);

Route::get('delete/{id}',[ProductController::class,'deleteProduct']);

Route::get('edit/{id}',[ProductController::class,'showData']);

Route::post('editProduct',[ProductController::class,'updateData']);

Route::get('getlist',[ProductController::class,'dbOperations']);

Route::get('qlist',[ProductController::class,'Operations']);

Route::get('joindata',[ProductController::class,'showAllData']);

Route::get('/logout',function(){
  if(session()->has('user')){

      session()->pull('user');
  } 
  return redirect('/login');
});
 





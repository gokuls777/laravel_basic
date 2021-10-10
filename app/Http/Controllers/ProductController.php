<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    function show(){

        $data = product::paginate(2);

        return view('list',['products' => $data]);

    }


    function addProduct(Request $req){

        //return $req->input();
        $product = new product;
        $product->title = $req->name;
        $product->category = $req->category;
        $product->amount  = $req->amount;
        $res = $product->save();
        if($res){
        session()->flash('user','Adding Complete');
        } else {
        session()->flash('user','Adding Error');    
        }
        return redirect('Insertprd');


    }

    function deleteProduct($id){
        $data = product::find($id);
        $data->delete();
        return redirect ('products');
    }

    function showData($id){
       // echo $id; die;
         $data = product::find($id);
         return view('updateProduct',['product' => $data]);
    }

   function updateData(Request $req){

    //return $req->input();
    $data= product::find($req->pid);
    
    $data->title =  $req->name;
    $data->category = $req->category;
    $data->amount = $req->amount;
    $res = $data->save();
    if($res){
        session()->flash('user','Update Complete');
        } else {
        session()->flash('user','Adding Error');    
        }
        return redirect('products');

   }


     //           QUERY BUILDER                 // 
   function dbOperations(){

   return  DB::table('products')
   ->where('id','5')
   //->get();
   //->count();
   //->find();
   //->delete();
   //->insert([
    ->update([
       'title' => 'shyam',
       'category' => 'cat',
       'amount' => 90
   ]);
  // return view('querlist',['data' => $data]);

   }


   function Operations(){
       //return "aggr q build";
     //  return DB::table('products')->avg('amount');
     return DB::table('products')->max('amount');

   }


   function showAllData(){

    return DB::table('products')
                ->join('posts','posts.title',"=",'products.id')
                ->where('products.id',5)
                ->get();


  }




    
}

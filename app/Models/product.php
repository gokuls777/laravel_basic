<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
   public function getCategoryAttribute($value) {
       return ucFirst($value);
   }

   public function setTitleAttribute($value){
       $this->attributes['title'] = "Addidas ". $value;
   }

   public function setCategoryAttribute($value){
    $this->attributes['category'] =  $value . " India";
  }

  public function getPost(){
    return $this->hasOne('App\Models\post');
  }
}

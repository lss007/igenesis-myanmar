<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->hasOne(Admin::class,'id','authorId');
      }
      public function Category(){
        return $this->hasOne(Category::class,'id','catId');
      }
}

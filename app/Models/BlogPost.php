<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->hasOne(Admin::class,'id','authorId');
      }
      public function Category(){
        return $this->hasMany(Category::class,'id','catId');
      }
}

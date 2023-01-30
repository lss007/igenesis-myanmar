<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

use Carbon\Carbon; 
use Image;
use Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PostController extends Controller
{


  public function Logout(){
  FacadesAuth::logout();
  return redirect()->route('login')->with('success','User logout successfully');
  }
}

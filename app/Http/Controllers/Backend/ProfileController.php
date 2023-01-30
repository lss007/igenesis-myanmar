<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Image;

class ProfileController extends Controller
{
    //edit profile 
    public function editAdminProfile(){
           $editprofile =  auth()->guard('admin')->user();
            $getEditProfile =   Admin::find($editprofile->id);
        return view('backend.password.profileedit',compact('getEditProfile'));
    }
    // update admin profile 
public function updateAdminProfile(Request $request ){
    $request->validate([
        'name' =>'required',
        'email' =>'required',
        // 'profile_photo_path' =>'required|image',
        ]);
        if($request->file('profile_photo_path')){
            $profile_img =  $request->file('profile_photo_path');
            $name_gen = time().'_'.$profile_img->getClientOriginalName();
            Image::make($profile_img)->fit(120,120)->save(public_path('assets/profile-imges/'.$name_gen));
            $save_url = 'assets/profile-imges/'.$name_gen;
            // if path is storage can use below 
            // Image::make($blog_img)->fit(354,236)->save( storage_path('app/public/blog/'.$name_gen));
            // $save_url ='storage/blog/'.$name_gen;
            $getProfile =  auth()->guard('admin')->user();
            $publishPost = Admin::find($getProfile->id);
            $old_profile = $getProfile->profile_photo_path;
            if(file_exists( $old_profile))
            {
                unlink( $old_profile);
            }
            $publishPost->profile_photo_path =  $save_url;
            $publishPost->save();
            return  redirect()->route('admin.editAdminProfile')->with('sucess', 'Profile updated Sucessfull');
          }else {
              $getProfile =  auth()->guard('admin')->user();
              $publishPost = Admin::find($getProfile->id);
              $publishPost->name =  $request->name;
              $publishPost->email =  $request->email;
              
              $publishPost->company =  $request->company;
              $publishPost->job =  $request->job;
              $publishPost->country =  $request->country;
              $publishPost->address =  $request->address;
              $publishPost->phone =  $request->phone;
              $publishPost->twitter =  $request->twitter;
              $publishPost->facebook =  $request->facebook;
              $publishPost->instagram =  $request->instagram;
              $publishPost->linkedin =  $request->linkedin;
              $publishPost->save();
              return  redirect()->route('admin.editAdminProfile')->with('sucess', 'Profile updated Sucessfull');
            }
          
    }
}




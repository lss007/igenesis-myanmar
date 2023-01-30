<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AllBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{

                public function view_banner(){
                         $get_banner =  AllBanner::get();
                         return view('backend.banner.index',compact('get_banner'));
                    }
                public function store_banner(Request $request ){
                            $request->validate([
                            'image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
                        ]);
                        if($request->file('image')){
                            $banner_img =  $request->file('image');
                            $imageName = hexdec(uniqid()).'.'.$banner_img->getClientOriginalExtension();  
                            $banner_img->move(public_path('assets/banner/'), $imageName);
                        }
                            $store_banner = new AllBanner();
                            $store_banner->title = $request->title ?? Null;
                            $store_banner->image =  $imageName;
                            $store_banner->save();
                         return  redirect()->route('view_all_banner')->with('sucess', 'Banner Published Sucessfull');

                     }
                // approvedpost
                public function active_banner($id){
                            $active  =  AllBanner::find($id);
                            $active->status = '1';
                            $active->save();
                            return  redirect()->back()->with('sucess', 'Banner status Active');

                }

                // rejectedpost
                public function inactive_banner($id){
                            $inactive  =  AllBanner::find($id);
                            $inactive->status = '0';
                            $inactive->save();
                            return  redirect()->back()->with('error', 'Banner status Inactive');
                }

                public function delete_banner($id){
                            $old_banner  =  AllBanner::find($id);
                            $imagePath = public_path('assets/banner/'. $old_banner->image);
                            if(File::exists($imagePath) && isset( $old_banner->image)){
                                unlink($imagePath);
                            }
                            $deletebanner  =  AllBanner::find($id);
                            $deletebanner->delete();
                            return  redirect()->back()->with('error', 'Banner Deleted Sucessfull ');
                }



                public function edit_banner($id){
                        $edit_banner =  AllBanner::find($id);
  
                    return view('backend.banner.edit',compact('edit_banner'));
                }

                public function update_banner(Request $request, $id){
                                    
                    $request->validate([
                        'image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
                    ]);
                    if($request->file('image')){
                        $old_banner  =  AllBanner::find($id);
                        $imagePath = public_path('assets/banner/'. $old_banner->image);
                        if(File::exists($imagePath) && isset( $old_banner->image)){
                            unlink($imagePath);
                        }
                        $banner_img =  $request->file('image');
                        $imageName = hexdec(uniqid()).'.'.$banner_img->getClientOriginalExtension();  
                        $banner_img->move(public_path('assets/banner/'), $imageName);
                        }
                        $update_banner =  AllBanner::find($id);
                        // $update_banner->title = $request->title ?? Null;
                        $update_banner->image =  $imageName;
                        $update_banner->save();
                     return  redirect()->route('view_all_banner')->with('info', 'Banner updated Sucessfull');
                         
                }
}

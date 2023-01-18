<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;
class ServicesConstoller extends Controller
{
    //
    public function view_services(){

        $getOurservices['get_services'] = DB::table('our_services')->orderBy('order_no',"Asc")->get();
         return view('backend.ourservices.index',$getOurservices);
  
    }

    public function add_services(){
 
         return view('backend.ourservices.add_our_services');
    }
    public function store_services(Request $request){
            $request->validate([
                'title' => 'required',
                'image' => 'required|image',
                'description' => 'required',
            ]);

            if($request->file('image')){
                    $service_img =  $request->file('image');
                    $imageName = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();  
                    $service_img->move(public_path('assets/services/'), $imageName);
                }
                $storeServices   = new OurService();
                $storeServices->image =  $imageName;
                $storeServices->title =  $request->title;
                $storeServices->description =  $request->description;
                $storeServices->order_no =  $request->tiorder_notle;
                $storeServices->save();
                return redirect()->route('view_our_services')->with('success', 'Service added Sucessfull');

    }

             // active
            public function services_active($id){
                $active  =   DB::table('our_services')->where('id',$id)->first();
                $active->status = '1';
                $active->save();
                return  redirect()->back()->with('sucess', 'Service   Active');

        }

             // inactive
            public function services_inactive($id){
                $inactive  =  DB::table('our_services')->where('id',$id)->first();
                $inactive->status = '0';
                $inactive->save();
                return  redirect()->back()->with('error', 'Service  Inactive');

        }
            public function services_delete($id){
                $getimg  = DB::table('our_services')->where('id',$id)->first();
                $imagePath = public_path('assets/services/'. $getimg->image);
                // if(File::exists($imagePath) && isset( $getimg->image)){
                //     unlink($imagePath);
                // } 
                $deleteservice  =  DB::table('our_services')->where('id',$id)->first();
                $deleteservice->delete();
                return  redirect()->back()->with('error', 'Service  Deletd');
            }

            public function services_edit($id){
                $editOurservices['edit_services'] = DB::table('our_services')->where('id',$id)->first();
                return view('backend.ourservices.edit',$editOurservices);
            }

            public function update_services(Request  $request, $id ){

                if($request->file('image')){
                    $getimg  = DB::table('our_services')->where('id',$id)->first();
                    $imagePath = public_path('assets/services/'. $getimg->image);

                    if(File::exists($imagePath) && isset( $getimg->image)){
                        unlink($imagePath);
                    }

                    $service_img =  $request->file('image');
                    $imageName = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();  
                    $service_img->move(public_path('assets/services/'), $imageName);
         
                $storeServices   =  DB::table('our_services')->where('id',$id)->first();
                $storeServices->image =  $imageName;
 
                $storeServices->save();
                return redirect()->route('view_our_services')->with('success', 'Service added Sucessfull');
                    return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
                }else {
                    $updateServices   =  DB::table('our_services')->where('id',$id)->first();
                    $updateServices->title =  $request->title;
                    $updateServices->description =  $request->description;
                    $updateServices->order_no =  $request->order_no;
                    $updateServices->save();
                    return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
                }
            }
}

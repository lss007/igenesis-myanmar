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

        $getOurservices['get_services'] = OurService::orderBy('order_no',"Asc")->get();
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
                $storeServices->order_no =  $request->order_no;
                $storeServices->save();
        //    DB::table('our_services')->insert([
        //             'image' =>    $imageName ,
        //             'title' =>   $request->title,
        //             'description' =>   $request->description,
        //             'order_no' =>   $request->order_no,
        //             ]);
    
                return redirect()->route('view_our_services')->with('success', 'Service added Sucessfull');

    }

             // active
            public function services_active($id){
               DB::table('our_services')->where('id',$id)->update([
                    'status' => '1',
                ]);
      
                return  redirect()->back()->with('sucess', 'Service   Active');

        }

             // inactive
            public function services_inactive($id){
                DB::table('our_services')->where('id',$id)->update([
                    'status' => '0',
                ]);
                return  redirect()->back()->with('error', 'Service  Inactive');

        }
            public function services_delete($id){
                $getimg  = DB::table('our_services')->where('id',$id)->first();
                $imagePath = public_path('assets/services/'. $getimg->image);
                if(File::exists($imagePath) && isset( $getimg->image)){
                    unlink($imagePath);
                } 
                DB::table('our_services')->where('id',$id)->delete();
    
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
         

                DB::table('our_services')->where('id',$id)->update([
                    'image' =>    $imageName,
                    ]);
   
                return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
                }else {
               
                    DB::table('our_services')->where('id',$id)->update([
                     
                        'title' =>   $request->title,
                        'description' =>   $request->description,
                        'order_no' =>   $request->order_no,
                        ]);
                    return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
                }
            }
}

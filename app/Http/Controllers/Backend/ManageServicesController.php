<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ourservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon; 
use Image;
class ManageServicesController extends Controller
{
    //
    public function view_services(){
        // dd("hi");

            $servicesData['ourService']  = Ourservice::get();
        return view('backend.services.index',$servicesData);
    }
    public function add_services( ){
        return view('backend.services.add_services');



    }
public function storeServices(Request $request ){
    // dd($request->description);
    $request->validate([
        'name' => 'required',
        'image' => 'required|image',
        'position' => 'required',
        'description' => 'required',
    ]);

    if($request->file('image')){
            $service_img =  $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();
            Image::make($service_img)->save(public_path('assets/services/'.$name_gen));
            $save_url = 'assets/services/'.$name_gen;
          }

    $datastore  = new Ourservice();
    $datastore->name =  $request->name;
    $datastore->image = $save_url ;
    $datastore->position =  $request->position;
    $datastore->description =  $request->description;
    $datastore->save();
    return redirect()->route('view_our_services')->with('success', 'Service added Sucessfull');
}





        // active
        public function services_active($id){
            $active  =  Ourservice::find($id);
            $active->status = '1';
            $active->save();
            return  redirect()->back()->with('sucess', ' service  Active  ');

        }


        // inactive
        public function services_inactive($id){
            $inactive  =  Ourservice::find($id);
            $inactive->status = '0';
            $inactive->save();
            return  redirect()->back()->with('error', ' service  Inactive  ');

        }

        public function services_delete($id){

            $delete  =  Ourservice::find($id);
            $delete->delete();

            return  redirect()->back()->with('error', ' service  Deleted  ');
        }


        public function services_edit($id){
            

            $editService['editservices']  = Ourservice::find($id);
        return view('backend.services.edit',$editService);

        }


        public function update_services(Request $request, $id){
            if($request->file('image')){
                $service_img =  $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();
                Image::make($service_img)->save(public_path('assets/services/'.$name_gen));
                $save_url = 'assets/services/'.$name_gen;
                $datastore  =  Ourservice::find($id);
                $datastore->image = $save_url ;
                $datastore->save();
               
                return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
              }
              
              else {
                $datastore  = Ourservice::find($id);
                $datastore->name =  $request->name;
                $datastore->position =  $request->position;
                $datastore->description =  $request->description;
                $datastore->save();
                
                return redirect()->route('view_our_services')->with('success', 'Service updated Sucessfull');
              }
    
       
        }
}

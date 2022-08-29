<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon; 
use Image;

class SliderController extends Controller
{
    // view home page slider 
    public function viewslider(){
        $data['view_slider']= Slider::get();
        return view('backend.slider.index',$data);
    }
    // store slider 
    public function store_slider(Request $request){
        $request->validate([
            'title' =>'required|string',
            'description' =>'required',
            // 'image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            ]);
            if($request->file('image')){
                $slider_img =  $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
                Image::make($slider_img)->fit(1983,1019)->save(public_path('assets/slider/'.$name_gen));
                $save_url = 'assets/slider/'.$name_gen;
              }
              $slider_data = new  Slider();
              $slider_data->title = $request->title;
              $slider_data->description = $request->description;
              $slider_data->image = $save_url;
              $slider_data->save();
              $notification = array(
               'message' => 'Slider Inserted successfully',
               'alert-type' => 'success'
               );
               return  redirect()->back()->with($notification);
        
    }
    // edit_slider
    public function edit_slider($id){
        $slider['edit_slider'] = Slider::find($id);
        return view('backend.slider.edit',$slider);

    }
    // update slider data 
    public function update_frontend_slider(Request $request, $id)
    {
        $old_slider  =  Slider::find($id);
        $old_image = $old_slider->image ;
    if($request->file('image')){
        $slider_img =  $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$slider_img->getClientOriginalExtension();
        Image::make($slider_img)->fit(1983,1019)->save(public_path('assets/slider/'.$name_gen));
        $save_url = 'assets/slider/'.$name_gen;
    if(file_exists($old_image)){
    unlink($old_image);  
    }
        $slider_data =   Slider::find($id);
        $slider_data->title = $request->title;
        $slider_data->description = $request->description;
        $slider_data->image =$save_url;
        $slider_data->save();
        $notification = array(
         'message' => 'Slider Image successfully',
         'alert-type' => 'info'
         );
         return  redirect()->route('admin.homeslider')->with($notification);

      }
      else{
        $slider_data =   Slider::find($id);
        $slider_data->title = $request->title;
        $slider_data->description = $request->description;
    
        $slider_data->save();
        $notification = array(
         'message' => 'Slider updated successfully',
         'alert-type' => 'success'
         );
         return  redirect()->route('admin.homeslider')->with($notification);
      }
        }
            // Inactive slider 
            public function inactive_frontend_slider($id){
                $inactiveslider =   Slider::find($id);
                $inactiveslider->status = 0;
                $inactiveslider->save();
                $notification = array(
                    'message' => 'Slider Inactive successfully',
                    'alert-type' => 'info'
                    );
                return  redirect()->back()->with($notification);
            }
            // Active slider 
            public function active_frontend_slider($id){
                $inactiveslider =   Slider::find($id);
                $inactiveslider->status = 1;
                $inactiveslider->save();
                $notification = array(
                    'message' => 'Slider active successfully',
                    'alert-type' => 'info'
                    );
                return  redirect()->back()->with($notification);
            }
            //delete slider 
            public function delete_frontend_slider($id){
                $old_slider  =  Slider::find($id);
                $old_image = $old_slider->image;
                if(file_exists($old_image)){
                    // dd($old_image);
                    unlink($old_image);  
                    }
                    $del_slider = Slider::find($id);
                    $del_slider->delete();
                    $notification = array(
                        'message' => 'Slider active successfully',
                        'alert-type' => 'info'
                        );
                    return  redirect()->back()->with($notification);

            }


            
          


}

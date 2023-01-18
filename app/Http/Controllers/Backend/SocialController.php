<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sociallink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    //
    public function view_social(){
        $getSocialLinks = Sociallink::get();
        return view('backend.sociallinks.index',compact('getSocialLinks'));

    }


    public function store_link(Request $request ){
        $request->validate([
            'name' =>'required|string',
            'link' =>'required|url',
            'logo' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            ]);

            if($request->file('logo')){
                $service_img =  $request->file('logo');
                $imageName = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();  
                $service_img->move(public_path('assets/sociallogo/'), $imageName);
            }
                $savedata = new Sociallink();
                $savedata->name =  $request->name;
                $savedata->link =  $request->link;
                $savedata->logo = $imageName;
                $savedata->save();
          
                return redirect()->back()->with('success', 'Social Link added Sucessfull');

    }
    public function delete_link($id){
        $getimg  = Sociallink::find($id);
        $imagePath = public_path('assets/sociallogo/'. $getimg->logo);
        
        if(File::exists($imagePath) && isset( $getimg->logo)){
            unlink($imagePath);
        }
        $deletedata =  Sociallink::find($id);
        $deletedata->delete();
        return redirect()->back()->with('error', 'Social Link Deleted Sucessfull');


    }

    public function edit_link($id){
        $editlink  = Sociallink::find($id);
        return view('backend.sociallinks.edit',compact('editlink'));


    }

    public function update_link(Request $request,$id){
        if($request->file('logo')){
            $service_img =  $request->file('logo');
            $imageName = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();  
            $service_img->move(public_path('assets/sociallogo/'), $imageName);
            $savedata =  Sociallink::find($id);

            $savedata->logo = $imageName;
            $savedata->save();
      
            return redirect()->route('view_social_link')->with('info', 'Social Link updated Sucessfull');
        }else{
            $savedata =  Sociallink::find($id);
            $savedata->name =  $request->name;
            $savedata->link =  $request->link;
    
            $savedata->save();
      
            return redirect()->route('view_social_link')->with('info', 'Social Link updated Sucessfull');
        }
        
    }

    public function link_active($id){
        $active  =  Sociallink::find($id);
        $active->status = '1';
        $active->save();
        return  redirect()->back()->with('sucess', ' Social Link  Active  ');

}

// inactive
public function link_inactive($id){
        $inactive  =  Sociallink::find($id);
        $inactive->status = '0';
        $inactive->save();
        return  redirect()->back()->with('error', ' Social Link  Inactive  ');

}
}

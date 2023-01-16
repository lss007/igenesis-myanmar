<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Image;
class ManageTeamController extends Controller
{
    public function view_team(){
            $getTeamData['ourTeam']  = OurTeam::orderby('order_no')->get();

            return view('backend.team.index',$getTeamData);
    }
    public function add_team( ){
            return view('backend.team.add_services');
    }
    public function store_team(Request $request ){
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
                Image::make($service_img)->save(public_path('assets/ourteam/'.$name_gen));
                $save_url = $name_gen;
            }

                $datastore  = new OurTeam();
                $datastore->name =  $request->name;
                $datastore->image = $save_url ;
                $datastore->position =  $request->position;
                $datastore->description =  $request->description;
                $datastore->order_no =  $request->order_no;
                $datastore->save();
                return redirect()->route('view_our_team')->with('success', 'Team member added Sucessfull');
        }
        // active
    public function team_active($id){
                $active  =  OurTeam::find($id);
                $active->status = '1';
                $active->save();
                return  redirect()->back()->with('sucess', ' Team member  Active  ');

        }

        // inactive
    public function team_inactive($id){
                $inactive  =  OurTeam::find($id);
                $inactive->status = '0';
                $inactive->save();
                return  redirect()->back()->with('error', ' Team member  Inactive  ');

        }
        
    public function team_delete($id){
        $getimg  = OurTeam::find($id);
        $imagePath = public_path('assets/ourteam/'. $getimg->image);
        
        if(File::exists($imagePath) && isset( $getimg->image)){
            unlink($imagePath);
        }
                $delete  =  OurTeam::find($id);
                $delete->delete();
                return  redirect()->back()->with('error', ' Team member  Deleted  ');
        }
    public function team_edit($id){
                $edit_team['edit_our_team']  = OurTeam::find($id);
                return view('backend.team.edit',$edit_team);

        }

    public function update_team(Request $request, $id){
            if($request->file('image')){

                $getimg  = OurTeam::find($id);
                $imagePath = public_path('assets/ourteam/'. $getimg->image);

                if(File::exists($imagePath) && isset( $getimg->image)){
                    unlink($imagePath);
                }

                $service_img =  $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$service_img->getClientOriginalExtension();
                Image::make($service_img)->save(public_path('assets/ourteam/'.$name_gen));
                $save_url = 'assets/ourteam/'.$name_gen;
                $datastore  =  OurTeam::find($id);

                $datastore->image = $name_gen ;

                $datastore->save();
                return redirect()->route('view_our_team')->with('success', 'Team member updated Sucessfull');
            }
              else {
    
                $datastore  = OurTeam::find($id);
                $datastore->name =  $request->name;
                $datastore->position =  $request->position;
                $datastore->description =  $request->description;
                $datastore->order_no =  $request->order_no;

                $datastore->save();
                return redirect()->route('view_our_team')->with('success', 'Team member updated Sucessfull');
            
            }
    
       
        }
}

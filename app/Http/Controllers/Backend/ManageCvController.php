<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\CurrentFunction;
use App\Models\CurrentIndustry;
use App\Models\ResumeRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageCvController extends Controller
{
            // Manage Resume
            public function manageResume(){
                    $getResume = ResumeRecord::latest('created_at')->get();
                    return view('backend.Resume.index',compact('getResume'));

            }

            public function deleteResume($id){
                    $del_data = ResumeRecord::find($id);
                    $del_data->delete();
                    return redirect()->back()->with('sucess', 'Resume Deleted Sucessfull');

            }

            public function store_industries(Request $request ){
                    $request->validate([
                    'name' =>'required|string',
                    ]);
                    $storeInd = new CurrentIndustry();
                    $storeInd->name =  $request->name;
                    $storeInd->save();
                    return redirect()->route('view_current_industries')->with('success', '  Industry Inserted Sucessfull');
    
            }   

             public function view_industries(){
                    $getCurInd = CurrentIndustry::orderBy('name')->get();
                    return view('backend.Resume.category.index',compact('getCurInd'));

            }

             public function update_industries(Request $request ,$id ){         
                    $updateInd =    CurrentIndustry::find($id);
                    $updateInd->name = $request->name;
                    $updateInd->status = $request->status;
                    $updateInd->save();
                    return redirect()->route('view_current_industries')->with('info', '  Industry Updated Sucessfull');
                           

            }

            // Active
            public function active($id){
                    $approved  =  CurrentIndustry::find($id);
                    $approved->status = '1';
                    $approved->save();
                    return  redirect()->back()->with('sucess', 'Industry Active  Sucessfull ');

             }

            // Inactive
            public function inactive($id){
                    $rejected  =  CurrentIndustry::find($id);
                    $rejected->status = '0';
                    $rejected->save();
                    return  redirect()->back()->with('error', ' Industry Inactive  Sucessfull');

                }

            public function delete_industries($id){
                    $deleted  =  CurrentIndustry::find($id);    
                    $deleted->delete();
                    return  redirect()->back()->with('error', ' Industry Deleted  Sucessfull');
                }

            // --------------- Current function -----------------------------
            public function view_function(){
                  $data['viewFunctions'] =  CurrentFunction::orderBy('name')->get();
                  return view('backend.Resume.function.index',$data);

                }

            public function store_function(Request $request){
                $request->validate(['name' =>'required|string',]);
                        $storeInd = new CurrentFunction();
                        $storeInd->name =  $request->name;
                        $storeInd->save();
                        return redirect()->route('view_current_function')->with('info', 'Function updated Sucessfull');

                }

                // Active
            public function active_Function($id){
                $approved  =  CurrentFunction::find($id);
                $approved->status = '1';
                $approved->save();
                return  redirect()->back()->with('sucess', 'Function Active Sucessfull ');

         }

                // Inactive
           public function inactive_Function($id){
                        $rejected  =  CurrentFunction::find($id);
                        $rejected->status = '0';
                        $rejected->save();
                return  redirect()->back()->with('error', 'Function Inactive Sucessfull');

            }

            public function delete_function($id){
                        $del_function =  CurrentFunction::find($id);
                        $del_function->delete();
                
                return  redirect()->back()->with('error', 'Function Deleted Sucessfull');
            }

            public function update_function(Request $request ,$id){
                        $updateFun =  CurrentFunction::find($id);
                        $updateFun->name = $request->name;
                        $updateFun->status = $request->status;
                        $updateFun->save();
                        return redirect()->route('view_current_function')->with('info', '  Industry Updated Sucessfull');                        
                }
}



 
 

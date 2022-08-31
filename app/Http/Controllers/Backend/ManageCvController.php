<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ResumeRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageCvController extends Controller
{
    //
    public function manageResume(){
        $getResume = ResumeRecord::latest('created_at')->get();
        return view('backend.Resume.index',compact('getResume'));

    }

    public function deleteResume($id){
        $del_data = ResumeRecord::find($id);

        $del_data->delete();

        return redirect()->back()->with('sucess', 'Resume Deleted Sucessfull');

        }
}

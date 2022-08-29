<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ResumeRecord;
use Illuminate\Http\Request;

class ManageCvController extends Controller
{
    //
    public function manageResume(){
        $getResume = ResumeRecord::latest('created_at')->get();
        return view('backend.Resume.index',compact('getResume'));

    }
}

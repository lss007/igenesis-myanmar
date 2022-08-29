<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ResumeRecord;

class FrontendController extends Controller
{
    //Home page 
    public function homepage(){
        return view('frontend.index');
    }
    //about us 
    public function aboutUs(){
        return view('frontend.aboutus');

    }
    // services
    public function services(){
        return view('frontend.services');


    }
    // whatare
    public function whatare(){
        return view('frontend.whatarewe');

    }
    // lifeatgenesis
    public function lifeatGenesis(){
        return view('frontend.lifeatgenesis');

    }
    // contactUs
    public function contactUs(){
        return view('frontend.contact');

    }
    // contactstore 
    public function storecontact( Request $request ){

        $request->validate([ 
        'name' =>'required',
        'email' =>'required|email',
        // 'phone' =>'required|numeric',
        'subject'=>'required',
        'message'=>'required',
    ]);
// dd($request->all());
                $post_inq = new Contact();
                $post_inq->name =  $request->name;
                // $post_inq->phone =  $request->phone;
                $post_inq->email =  $request->email;
                $post_inq->subject =  $request->subject;
                $post_inq->message =  $request->message;
                $post_inq->save();
                $notification = array(
                'message' => 'Thanks for Contact us ',
                'alert-type' => 'success'
    );
                 return redirect()->route('front.homepage')->with($notification); 
    }
    //    view blogs 
    public function viewBlog(){
        $getBlog['getBlogData'] = BlogPost::latest('created_at')->where('status', '=', '1')->get();

        return view('frontend.blogpage',$getBlog);


    }

//JOin us 
public function joinUs(){
    return view('frontend.joinus');

}
//submit resume 
    public function submitResume(Request $request){
        $request->validate([
            'name' =>'required|string',
            'email' =>'required',
            'location' =>'required',
            'contact' =>'required|numeric',
            'current_industry' =>'required',
            'current_function' =>'required',
            'resumeFile' =>'required|max:4096',
            ]);
    if($request->file('resumeFile')){
            $resumefile =  $request->file('resumeFile');
            $genrated_name = time().'_'.$resumefile->getClientOriginalName();
            $resumePath =  $resumefile->move( storage_path('app/public/resume/'.$genrated_name));
            $save_url ='storage/resume/'.$genrated_name;             
    }

            $saveResume = new ResumeRecord();
            $saveResume->name = $request->name;
            $saveResume->email = $request->email;
            $saveResume->location = $request->location;
            $saveResume->contact = $request->contact;
            $saveResume->current_industry = $request->current_industry;
            $saveResume->current_function = $request->current_function;
            $saveResume->resumeFile = $save_url;
            $saveResume->save();
            $notification = array(
                'message' => 'Slider Inserted successfully',
                'alert-type' => 'success'
                );

             return  redirect()->back()->with($notification);



    




}


}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ResumeRecord;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

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
    //our people 
    public function ourPeople(){
        return view('frontend.ourpeople');

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
    // Quality & health
    public function qualityHealth(){
        return view('frontend.qualitymanagementsystem');

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

                    Mail::send('contact',
                 array(
                        'name' => $request->get('name'),
                        'email' => $request->get('email'),
                        'subject' => $request->get('subject'),
                        'messages' => $request->get('message') ,
                    ),
                        function($message) use ($request){
                        $message->from($request->email);
                        $message->to('bijaya.subedi@genesisnepal.com', $request->name)->subject($request->name);
                        }
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

            $file = $request->file('resumeFile');

            // $filename = 'Resume' . time() . '.' . $file->getClientOriginalExtension();
         
            // $path = $file->storeAs('resume', $filename);

            $fileName = 'Resume'.time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('resume', $fileName, 'public'); 
            // dd($path);
    }

            $saveResume = new ResumeRecord();
            $saveResume->name = $request->name;
            $saveResume->email = $request->email;
            $saveResume->location = $request->location;
            $saveResume->contact = $request->contact;
            $saveResume->current_industry = $request->current_industry;
            $saveResume->current_function = $request->current_function;
            $saveResume->resumeFile = $filePath;
            $saveResume->save();
            $notification = array(
                'message' => 'Resume Submited successfully',
                'alert-type' => 'success'
                );

                $data["name"] = $request->name;
                $data["email"] = $request->email;
                $data["location"] =$request->location;
                $data["contact"] =  $request->contact ;
                $data["current_industry"] =  $request->current_industry;
                $data["current_function"] = $request->current_function;
                $data["resume"] =  $fileName ;
            
                $files = [
                    // Storage::path("resume/".$data["resume"]),
                    storage_path("app/public/resume/".$data["resume"]),
                
                ];
                // dd($files);
                Mail::send('resume', $data, function($message)use($data, $files) {
                    $message->to('bijaya.subedi@genesisnepal.com')
                            ->subject($data["name"]);
                    foreach ($files as $file){
                        $message->attach($file);
                    }
                    
                });


      

             return  redirect()->back()->with($notification);



    




}


}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\EmailJob;
use App\Mail\Confirmmail;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactAddress;
use App\Models\OurCustomers;
use App\Models\OurService;
use App\Models\OurTeam;
use App\Models\ResumeRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    //Home page 
    public function homepage(){
        // $get_our_team  = OurTeam::where('status',1)->orderby('order_no')->whereIn('order_no',[1,2])->take(10)->get();

        // $get_our_team2  = OurTeam::where('status',1)->orderby('order_no','Asc')->skip(2)->take(10)->get();

        // $get_Services = OurService::where('status',1)->orderby('order_no')->get();
        
        $get_Services = DB::table('our_services')->where('status',1)
        ->orderby('order_no','ASC')->get();
        $get_coustomer = DB::table('our_customers')->where('status',1)
        ->orderby('order_no','ASC')->get();
        return view('frontend.index',compact('get_Services','get_coustomer'));
    }
    // 'get_our_team','get_our_team2',
    //about us 
    public function aboutUs(){
        return view('frontend.aboutus');
    }
    //our people 
    public function ourPeople(){
        $getOurTeam  = OurTeam::where('status',1)->orderby('order_no')->get();
        
        return view('frontend.ourpeople',compact('getOurTeam'));
    }
    
    // services
    public function services(){
        // $getServices = OurService::where('status',1)->orderby('order_no')->get();
        $getServices = DB::table('our_services')->where('status',1)
        ->orderby('order_no','ASC')->get();
        $getCoustomer = DB::table('our_customers')->where('status',1)
        ->orderby('order_no','ASC')->get();
        return view('frontend.services',compact('getServices','getCoustomer'));
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
                'name' =>'required|string',
                'email' =>'required|email',
                'subject'=>'required |string',
                'msg'=>'required',
                ],
                    [
                        'msg.required' => 'Message required',
                    ]);
                // dd($request->all());
                // $post_inq = new Contact();
                // $post_inq->name =  $request->name;
                // $post_inq->phone =  $request->phone;
                // $post_inq->email =  $request->email;
                // $post_inq->subject =  $request->subject;
                // $post_inq->message =  $request->message;
                // $post_inq->save();
        
                     $emaildata =   Contact::create([
                        'name'  =>  $request->name,
                        'email' =>  $request->email,
                        'subject' =>$request->subject,
                        'message' =>    $request->msg,
                         ]);

                         $notification = array(
                            'message' => 'Thanks for Contact us ',
                            'alert-type' => 'success' );
                    dispatch(new EmailJob($emaildata));
                        // Mail::send('contact',
                        //      array(
                        //             'name' => $request->get('name'),
                        //             'email' => $request->get('email'),
                        //             'subject' => $request->get('subject'),
                        //             'messages' => $request->get('message') ,
                        //         ),
                        // function($message) use ($request){
                        // $message->from($request->email);
                        // working
                        // $message->to('sb@genesismyanmar.com', $request->name)->subject($request->name);
                        // $message->to('lucky@byteforce.com', $request->name)->subject($request->name);

                        // }
                    // );
                    $this->send_confirmation_mail($request);
                 return redirect()->route('front.homepage')->with($notification); 
    }

    public function send_confirmation_mail($request){

        $to = $request->email;
        $confirm['name'] = $request->name;
        $confirm['subject'] ='Automated Reply from genesismyanmar';
        $confirm['msg'] = 'Thank you for reaching out to genesismyanmar. We have received your enquiry and will be in touch shortly';
   
        Mail::to( $to)->send(new Confirmmail($confirm));
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
                    $message->to('sb@genesismyanmar.com')
                            ->subject($data["name"]);
                    foreach ($files as $file){
                        $message->attach($file);
                    }
                    
                });


      

             return  redirect()->back()->with($notification);



    




}


}

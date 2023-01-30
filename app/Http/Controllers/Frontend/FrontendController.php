<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\EmailJob;
use App\Jobs\ResumeJob;
use App\Mail\Confirmmail;
use App\Mail\ConfirmCvmail;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactAddress;
use App\Models\CurrentFunction;
use App\Models\CurrentIndustry;
use App\Models\OurCustomers;
use App\Models\OurService;
use App\Models\OurTeam;
use App\Models\ResumeRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
            // Home page 
            public function homepage(){
                $get_our_team  = OurTeam::where('status',1)->orderby('order_no')->whereIn('order_no',[1,2])->take(10)->get();
                $get_our_team2  = OurTeam::where('status',1)->orderby('order_no','Asc')->skip(2)->take(10)->get();
                $get_Services = DB::table('our_services')->where('status',1)
                ->orderby('order_no','ASC')->get();
                $get_coustomer = DB::table('our_customers')->where('status',1)
                ->orderby('order_no','ASC')->get();
                return view('frontend.index',compact('get_our_team','get_Services','get_coustomer','get_our_team2'));
            }
            // About us 
            public function aboutUs(){
                return view('frontend.aboutus');
            }
            // Our people 
            public function ourPeople(){
                $getOurTeam  = OurTeam::where('status',1)->orderby('order_no')->get();
                
                return view('frontend.ourpeople',compact('getOurTeam'));
            }
            
            // Services
            public function services(){
                // $getServices = OurService::where('status',1)->orderby('order_no')->get();
                $getServices = DB::table('our_services')->where('status',1)
                ->orderby('order_no','ASC')->get();
                $getCoustomer = DB::table('our_customers')->where('status',1)
                ->orderby('order_no','ASC')->get();
                return view('frontend.services',compact('getServices','getCoustomer'));
            }
            // Whatare
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
            // Contact store 
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
        
                     $emaildata =   Contact::create([
                        'name'  =>  $request->name,
                        'email' =>  $request->email,
                        'subject' =>$request->subject,
                        'message' =>    $request->msg,
                         ]);

                   if(isset($emaildata)){

                       dispatch(new EmailJob($emaildata));
                   }
                       
                    $notification = array(
                        'message' => 'Thanks for Contact us ',
                        'alert-type' => 'success' );

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
                // view blogs 
                public function viewBlog(){
                        $getBlog['getBlogData'] = BlogPost::latest('created_at')->where('status', '=', '1')->get();

                        return view('frontend.blogpage',$getBlog);


                    }

                // JOin us 
                public function joinUs(){
                      $getIndustry =  CurrentIndustry::orderBy('name')->where('status',1)->get();
                      $getFunction = CurrentFunction::orderBy('name')->where('status',1)->get();
                        return view('frontend.joinus',compact('getIndustry','getFunction'));

                    }
                //  Submit resume 
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
                            $cvfileName = 'Resume'.time().'_'.str_replace(' ', '_', trim($file->getClientOriginalName()));
                            $filePath = $file->storeAs('resume', $cvfileName, 'public'); 
                            
                            // dd($path);
                    }

                        $emailCvData =   ResumeRecord::create([
                            'name'  =>  $request->name,
                            'email' =>  $request->email,
                            'location' =>$request->location,
                            'contact' =>    $request->contact,
                            'current_industry' =>    $request->current_industry,
                            'current_function' =>    $request->current_function,
                            'resumeFile' =>   $cvfileName,

                             ]);

                            if(isset($emailCvData)){
            
                                dispatch(new ResumeJob($emailCvData));
                            }
       
                        $notification = array(
                            'message' => 'Resume Submited successfully',
                            'alert-type' => 'success'
                            );
                    $this->send_confirmation_cv_mail($request);
                    return  redirect()->back()->with($notification);
                    }


                public function send_confirmation_cv_mail($request){
                    $to = $request->email;
                    $confirm_cv['name'] = $request->name;
                    Mail::to( $to)->send(new ConfirmCvmail($confirm_cv));
                }

}

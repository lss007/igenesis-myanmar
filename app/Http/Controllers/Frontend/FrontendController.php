<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Contact;


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

}

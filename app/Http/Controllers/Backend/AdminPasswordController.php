<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdminPasswordController extends Controller
{
    //
    public function getEmail()
    {
       return view('backend.reset_password.email');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('backend.reset_password.verifyauth', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

    return back()->with('message', 'We have e-mailed your password reset link!');

    }    

    public function getPassword($token){

        return view('backend.reset_password.admin_reset_password',['token' => $token]);

    }


    public function updatePassword(Request $request ){

        $request->validate([
            'email' => 'required|email|exists:admins',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
      
        ]);

        $updatePassword = DB::table('password_resets')
        ->where(['email' => $request->email, 'token' => $request->token])
        ->first();

        if(!$updatePassword){

            return back()->withInput()->with('error', 'Invalid token!');
        }
        else {
            $user = Admin::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
            return redirect('admin/login')->with('message', 'Your password has been changed!');
        }
    }
    }

  


<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }
    public function sendEmail(Request $request)
    {
        $details = [
          'name'   =>   $request->name,
          'email'  =>   $request->email,
          'phone'  =>   $request->phone,
          'msg'    =>   $request-> msg
        ];

        Mail::to($request)->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully! We will get back to you in due course!');
    }
//    public static function sendSignupEmail($name, $email, $verification_code){
//        $data = [
//            'name' => $name,
//            'verification_code' => $verification_code
//        ];
//        Mail::to($email)->send(new SignupEmail($data));
//    }
}

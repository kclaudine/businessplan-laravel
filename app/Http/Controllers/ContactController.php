<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'choices' => $request->choices,
            'msg' => $request->msg
        ];

        Mail::to('kuclaudine1@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'your message has been sent');
    }
}

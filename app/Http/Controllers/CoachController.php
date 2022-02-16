<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CoachMail;
use Mail;

class CoachController extends Controller
{
    public function coach()
    {
        return view('coach-booking');
    }

    public function coachMail(Request $request)
    {
        // dd($request->choices);
        $detail = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'choices' => $request->choices,
            'msg' => $request->msg
        ];

        Mail::to('kuclaudine1@gmail.com')->send(new CoachMail($detail));
        return back()->with('message_sent', 'your message has been sent');
    }
}

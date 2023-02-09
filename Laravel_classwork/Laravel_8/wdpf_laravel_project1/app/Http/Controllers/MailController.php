<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index()
    {
        $mailData = [
            'title' => 'Exam is on 27 February',
            'body' => 'This is for testing email using smtp.'
        ];
         
     
        Mail::to('aklimaakterisdb@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
    public function contactform()
    {
        return view('contact');
    }
    public function MessageSend(Request $request)
    {
        $mailData = [
            'senderName' => $request->sender_name,
            'senderEmail' => $request->sender_email,
            'message' => $request->message,
        ];
        Mail::to('aklimaakterisdb@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
       
    }
}

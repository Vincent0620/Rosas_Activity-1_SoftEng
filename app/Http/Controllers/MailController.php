<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SampleMail;
use Mail;  

class MailController extends Controller
{
    
    public function send_email(Request $request)
        {

            $name = $request->input('name');
            $email = $request->input('email');
            $remarks = $request->input('remarks');
            $attachment = $request->file('attachment');

            $mailData = array(

            'name' => $name,      
            'remarks' => $remarks,
            'attachment'=> $attachment,
            
            );

            Mail::to($email)->send(new SampleMail($mailData));
            return view('sentprompt');
        }
    public function sentprompt(){
        return view('/welcome');
    }
}

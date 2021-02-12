<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Mail;

class SendSMSController extends Controller
{
    public function contactus(Request $request)
    {
        //Mail::to("dev.nahrimehdi@gmail.com")->send(new ContactForm($request));
        $request->validate([
            'email' => 'bail|required|email',
            'nom' => 'bail|required',
            'phone' => 'bail|required|min:10',
            'message' => 'bail|required',
          ]);
          $request->mailto="contact@stop-retour.com";
          Mail::to($request->mailto)->send(new ContactForm($request));
        return true;
    }
}

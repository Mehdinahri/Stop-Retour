<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\contactUs;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {

        $request->validate([
          'email' => 'required|email',
          'tel' => 'required',
          'name' => 'required',
          'message' => 'required',
        ]);

        $data = [
          'tel'         => $request->tel,
          'name'        => $request->name,
          'email'       => $request->email,
          'message'     => $request->message
        ];

        Mail::to("contact@stop-retour.com")->send(new contactUs($data));
        return back()->with(['message' => 'Email successfully sent!']);

    }
}

<?php

namespace App\Http\Controllers;

use App\Events\ContactEmailEvent;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function contact(Request $request)
    {
        Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:20'],
            'message' => ['required', 'string', 'max:2000'],
        ])->validate();
        //Mail::to('aminayem.au@gmail.com')->send(new ContactEmail($contact_us));
        event(new ContactEmailEvent($request->all()));
        return redirect()->route('contact');

    }
}

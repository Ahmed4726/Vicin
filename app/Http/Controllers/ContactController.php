<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        // Sending Email
        // Mail::to('test@gmail.com')->send(new ContactMail($contact));



        return redirect()->route('contact')->with('success','Your message has been sent you will be contacted shortly');
    }
}

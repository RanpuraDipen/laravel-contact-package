<?php

namespace Dipen\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Dipen\Contact\Mail\ContactMailable;
use Dipen\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));

        Contact::create($request->all());

        return redirect()->back()->with('success',"Contact Email Sent Succeessfully.");
    }
}

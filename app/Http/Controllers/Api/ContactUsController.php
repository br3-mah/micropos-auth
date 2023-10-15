<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Mail\SupportContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request){
        try {
            // 1. Validate the incoming data
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            // 2. Save data to the Contact Model
            $contact = new Contact;
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            $contact->save();

            // 3. Send Email to Sender
            Mail::to($request->input('email'))->send(new ContactEmail($contact));

            // 4. Send Email to Receiver (example assumes an email address)
            Mail::to(['nyeleti.bremah@gmail.com','georgemunganga@gmail.com'])->send(new SupportContactEmail($contact));
            // Mail::to('nyeleti.bremah@gmail.com')->send(new ContactEmail());

            // 5. Return a JSON response
            return response()->json(['message' => 'Form submitted successfully']);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}

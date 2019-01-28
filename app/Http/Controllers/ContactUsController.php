<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactPost()
    {
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'user_message' => 'required'
        ]);

        ContactUs::create($validated);

        Mail::send('mails.contactUs', $validated, function($message){
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->to('activerow@gmail.com')->subject(config('app.name') . ' - Feedback');
        });

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}

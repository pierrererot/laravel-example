<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Management\PhotoGestion;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact');
    }

    public function postForm(ContactRequest $request)
    {
        Mail::send('email_contact', $request->all(), function($message)
        {
            // configure .env file and mail.php with proper SMTP data
            //$message->to('myemail@test.fr')->subject('Contact');
        });

        return view('confirm');
    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact.show');
    }

    public function store(Request $request){

        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'subject'=>'required',
        //     'message' => 'required'
        // ]);

        Contact::create($request->all());

        Mail::send('contact.email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'form_message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('tdalgleish@gmail.com', 'Atlas Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Thanks for contacting us.');
    }
}

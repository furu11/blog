<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact; 


class ContactController extends Controller
{
    public function showContactForm()
    {
        $contacts = Contact::all();
        return view('contact.contact')->with('contacts', $contacts);
    }


    

    public function processContactForm(Request $request)
    {

        $request->validate([
           
            'name' => 'required',
            'age' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'location' => 'required',
            'body' => 'required',
        ]);

        $contact = new Contact($request->all());

        $contact->age = $request->input('age', now());
        $contact->location = $request->input('location', now());
        $contact->time_start = $request->input('time_start', now());
        $contact->time_end = $request->input('time_end', now());
        $contact->body = $request->input('body', now());


        $contact->user_id = auth()->user()->id;


        $contact->save();
    
        return view('contact.confirm', ['inputs' => $request->all()]);
    }
    



public function complete(Request $request)
{
    $inputs = $request->all();

    if (empty($inputs)) {
        return redirect()->route('index');
    }

    return view('contact.complete');
}
}




  

    
    

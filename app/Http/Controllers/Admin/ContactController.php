<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactIndex(){
        $contact=Contact::get()->all();
        return view('Admin.CMS.contact.index',compact('contact'));
    }

    public function contactStore(Request $request){
        Contact::create([
            'contact_name'=>$request->contact_name,
            'contact_number'=>$request->contact_number,
            'contact_email'=>$request->contact_email,
            'contact_message'=>$request->contact_message
        ]);

        return redirect()->back();
    }
}

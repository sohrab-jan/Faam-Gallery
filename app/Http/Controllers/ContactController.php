<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function StoreContact(StoreContactRequest $request)
    {
        Contact::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'service_name' => $request->service_name,
            'company_name' => $request->company_name,
            'artist' => $request->artist ? 'artist' : null,
            'collector' => $request->collector ? 'collector' : null,
            'message' => $request->message,
        ]);

        return redirect()->route('contact')->with('message', 'Message Send Successfully!');
    }

    public function Index()
    {
        $allcontacts = Contact::latest()->get();

        return view('admin.pages.contactlist', compact('allcontacts'));
    }

    public function DeleteContact($id)
    {
        Contact::findorFail($id)->delete();

        return redirect()->route('allcontacts')->with('message', 'Contact Deleted  Successfully!');
    }
}

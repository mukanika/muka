<?php

namespace App\Http\Controllers;

use Illuminate\Http\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'content']);
        Contact::create($contact); 
        return view('thanks');
    }
}

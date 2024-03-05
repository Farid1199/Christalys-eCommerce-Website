<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'confirm-email' => 'required|same:email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Store the form data in the database
        ContactMessage::create($validatedData);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}

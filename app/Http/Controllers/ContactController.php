<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Handle form submission logic here
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'subject' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:10'],
        ]);

        // dd($data);

        contactModel::create($data);

        // For example, you could send an email or store the message in the database

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

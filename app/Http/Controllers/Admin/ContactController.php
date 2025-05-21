<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contacts.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'iframe' => 'required|string',
            'address' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'working_hours' => 'required|string|max:255'
        ]);

        $contact = Contact::first() ?? new Contact();
        $contact->fill($request->all());
        $contact->save();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'İletişim bilgileri başarıyla güncellendi.');
    }
} 
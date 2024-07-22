<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('clients.contact');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:contacts',
        'lydo' => 'nullable|string',
        'chitiet' => 'nullable|string',
        'user_id' => 'required|exists:users,id', // Đảm bảo user_id hợp lệ
    ]);

    Contact::create($request->all());

    return redirect()->route('contact.create')->with('success', 'Liên hệ đã được gửi thành công!');
}

}

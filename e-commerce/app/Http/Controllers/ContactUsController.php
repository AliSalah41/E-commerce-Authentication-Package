<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    //show----------------------
    public function allMessages()
    {
        $messages = ContactUs::all();
        return view('admin.contact',compact('messages'));
    }

    //create----------------------
    public function create()
    {
        return view('user.contact.contact');
    }

    //storge-----------------------
    public function store(Request $request)
    {
        //validation
        $data = $request->validate([
            "name"=>"required|string|max:255",
            "email"=>"required|string|email",
            "subject"=>"required|string",
            "message"=>"required|string",
        ]);

        //get id of this user
        $data['user_id'] = Auth::id();

        //create
        ContactUs::create($data);

        //redirect
        return redirect(url('contactUs'))->with("success","Message sent successfully");
    }

    //delete--------------------
    public function delete($id)
    {
        $message = ContactUs::findOrFail($id);

        $message->delete();

        //redirect
        return redirect(url('contact'))->with("success","Message deleted successfully");

    }
}

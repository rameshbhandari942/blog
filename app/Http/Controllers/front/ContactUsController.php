<?php

namespace App\Http\Controllers\front;
use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create()
    {
        return view ('front.pages.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name'=> 'required',
        'subject'=> 'required',
        'email'=> 'required',
        'message'=> 'required',
        ]);
        ContactUs::create($request->all());
        return redirect()->with('success','Record added successfully');
}


<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'theme'=>'required',
            'message'=>'required'
        ]);
        Facades\Mail::to(' Namaste.galina@mail.ru')->send(new ContactFormMail($data));
        return redirect(url('page/contact'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\sendEmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $email = new Contact();
        $email->name = $data['name'];
        $email->email = $data['email'];
        $email->telephone = $data['telephone'];
        $email->message = $data['message'];
        if (!$email->save()) {
            redirect()->back()->withInput()->withErrors('Erro ao enviar email');
        }
        // $sendEmail = new SendMailContact($email);
        return Mail::send(new sendEmailContact($email));
    }
}

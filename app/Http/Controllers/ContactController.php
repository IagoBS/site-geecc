<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\sendEmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $sendEmail = new Contact();

        $sendEmail->name = $data['name'];
        $sendEmail->email = $data['email'];
        $sendEmail->telephone = $data['telephone'];
        $sendEmail->message = $data['message'];

        if (!$sendEmail->save()) {
            redirect()->back()->withInput()->withErrors('Erro ao enviar email');
        }

        Mail::send('email.contactMail', ['send' => $sendEmail], function ($m) use ($sendEmail) {
            $m->from('web@geec.org.br', 'Geec');
            $m->to($sendEmail->email, $sendEmail->name)->subject('Contato GEEC - Grupo de Educação, Ética e Cidadania');
        });

        return redirect()->route('contato.index');
    }
    public function list() {

        $contact = Contact::all();

        return view('contactListEmail', compact('contact'));
    }
    public function show($id) {
        return view('', [
            'contact' => Contact::findOrFail($id)
        ]);
    }

}

<?php

namespace App\Mail;

use App\Http\Controllers\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendEmailContact extends Mailable
{
    use Queueable, SerializesModels;
    private $sendEmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $sendEmail)
    {
         $this->sendEmail = $sendEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('web@geec.org.br');
        $this->subject('Contato com a comunicação');
        $this->to($this->sendEmail->name, $this->sendEmail->email);
        return $this->view('email.contactMail');
        // ->from('web@geec.org.br')
        // ->subject('Contato com a comunicação')
        // ->to($this->sendEmail->name, $this->sendEmail->email);
    }
}

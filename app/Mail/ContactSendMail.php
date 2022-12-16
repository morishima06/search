<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContactSendMail;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;


    private $name;
    private $emal;
    private $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name  = $inputs['name'];
        $this->email = $inputs['email'];
        $this->content = $inputs['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('お問い合わせありがとうございます')
        ->view('emails.user')
        ->with([
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content ? $this->content : null
    ]);    }
}

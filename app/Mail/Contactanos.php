<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contactanos extends Mailable
{
    use Queueable, SerializesModels;

    public $subject= "Informacion de contacto";
    /**
     * Create a new message instance.
     *
     * @return void
     * 
     *
     */
    public $details;
    /**
     * 
     * 
     */
    
    public function __construct($details)
    {
        $this->details = $details;
    }
    /**
     * 
     * @return $this
     */

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Contactanos',
        );
    }



    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.contactanos',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    /*
    public function build()
    {
        return $this->subject('Informacion de contacto')
            ->view('mail.registro');
    }
    */
}

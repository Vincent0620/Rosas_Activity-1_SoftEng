<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData; 
    public function __construct($mailData)
    {
    $this->mailData = $mailData;
    }
    public function envelope(): Envelope
    {
    return new Envelope(
    subject: 'Test Mail',  //SUBJECT of EMAIL
    );
    }
    public function content(): Content
    {
    return new Content(
    view: 'mailcontent', //HTML CONTENT OF EMAIL
    );
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachment(): array
    {
        return [];
    }
}
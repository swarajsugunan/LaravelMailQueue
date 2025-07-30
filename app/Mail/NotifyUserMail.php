<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyUserMail extends Mailable
{
    use Queueable, SerializesModels;

        public $messageBody;

    /**
     * Create a new message instance.
     */
    public function __construct($messageBody)
    {
        $this->messageBody = $messageBody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notification from queue',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notification',
            with: ['messageBody' => $this->messageBody],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

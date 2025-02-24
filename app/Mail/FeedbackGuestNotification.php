<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackGuestNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $feedback;

    /**
     * Create a new message instance.
     */
    public function __construct($feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Terimakasih Atas Umpan Balik Anda - Kurnia Brownies',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.feedback-guest-notification',
            with: [
                'feedback' => $this->feedback,
            ],
        );
    }
}

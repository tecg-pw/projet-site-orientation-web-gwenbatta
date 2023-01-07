<?php

namespace App\Mail;

use App\Models\Actuality;
use App\Models\Project;
use App\Models\ActualityTranslation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ActualityCreated extends Mailable
{
    use Queueable, SerializesModels;

    public ActualityTranslation $actuality;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ActualityTranslation $actuality)
    {
        $this->actuality = $actuality;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Une nouvelle actualités est disponible',
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
            markdown: 'emails.actualities.created',
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
}

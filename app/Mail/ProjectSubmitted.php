<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProjectSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $projectType;
    public $projectName;
    public $projectDescription;
    public $userName;
    public $userEmail;

    /**
     * Create a new message instance.
     */
    public function __construct($projectType, $projectName, $projectDescription, $userName, $userEmail)
    {
        $this->projectType = $projectType;
        $this->projectName = $projectName;
        $this->projectDescription = $projectDescription;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🎯 Nouveau Projet Soumis - ' . $this->projectType,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.project-submitted',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

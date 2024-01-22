<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class sendLoginLink extends Mailable {
    use Queueable, SerializesModels;

    public $token;
    public $expiresIn;
    /**
     * Create a new message instance.
     */
    public function __construct($token, $expiresIn) {
        $this->token = $token;
        $this->expiresIn = $expiresIn;
    }

    public function build() {
        return $this->subject('Test Project' . ' Login Verification')
            ->markdown('emails.login-link', [
                'url' => URL::temporarySignedRoute('verify-email', $this->expiresIn, [
                    'token' => $this->token,
                ]),
            ]);
    }
}
<?php

namespace App\Services;

use App\Interfaces\MailInterface;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class SendGridService implements MailInterface
{
    /**
     * Send email
     * @return void
     */
    public function send(): void
    {
        Mail::mailer('smtp')
            ->to('chirag.patel0718@gmail.com')
            ->send(new WelcomeEmail());
    }
}

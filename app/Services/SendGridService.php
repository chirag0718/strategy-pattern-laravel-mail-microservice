<?php

namespace App\Services;

use App\Interfaces\MailInterface;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class SendGridService implements MailInterface
{
    /**
     * Send email
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => "SendGrid called and email sent"
        ]);
    }
}

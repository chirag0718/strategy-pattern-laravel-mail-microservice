<?php

namespace App\Interfaces;
use Illuminate\Support\Facades\Mail;

/**
 * Mail Interface
 * @author Chiragkumar Patel
 */
interface MailInterface
{
    /**
     * method is responsible to send email
     * @return int
     */
    public function send(): void;
}

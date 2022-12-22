<?php

namespace App\Interfaces;
use Illuminate\Http\JsonResponse;

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
    public function send(): JsonResponse;
}

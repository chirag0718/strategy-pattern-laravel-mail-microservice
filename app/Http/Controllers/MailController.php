<?php

namespace App\Http\Controllers;

use App\Interfaces\MailInterface;
use App\Services\SendGridService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MailController extends Controller
{
    public MailInterface $mailInterface;

    public function __construct(MailInterface $mailInterface)
    {
        $this->mailInterface = $mailInterface;
    }

    public function welcome(): JsonResponse
    {

        // Default is mailjet and we can set sendgrid from above line.
        return $this->mailInterface->send();

    }
}

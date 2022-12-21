<?php

namespace App\Http\Controllers;

use App\Interfaces\MailInterface;
use App\Services\SendGridService;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public MailInterface $mailInterface;

    public function __construct(MailInterface $mailInterface)
    {
        $this->mailInterface = $mailInterface;
    }

    public function welcome(Request $request)
    {
        $this->mailInterface->send();
    }
}

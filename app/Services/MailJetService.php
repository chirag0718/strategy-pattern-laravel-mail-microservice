<?php

namespace App\Services;

use App\Interfaces\MailInterface;


class MailJetService implements MailInterface
{

    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => "MailJet called and email sent"
        ]);

    }
}

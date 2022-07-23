<?php

namespace App\Sms;

use Illuminate\Support\Facades\Log;


class LogSms implements Sms
{

    public function send(string $phoneNumber, string $message)
    {
        Log::info('FAILED --> Sending message to '.$phoneNumber.' message : '.$message);
    }
}

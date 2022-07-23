<?php

namespace App\CustomClasses;

use Twilio\Rest\Client;

class Twilio
{

    public function basic()
    {
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        return $twilio;
    }
}

<?php

namespace App\Sms;

use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class TwilioSms implements Sms
{

    public function send(string $phoneNumber, string $message)
    {


        $phoneNumber = '+351919657338';
//        $phoneNumber = array('+351919657338');
//        $message = 'Mekewii bro ? ';
/*
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create($phoneNumber, // to
                [
                    "body" => $message,
                    "from" => $phoneNumber
                ]
            );

        print($message->sid);
*/
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        $phone_number = $twilio->lookups->v1->phoneNumbers($phoneNumber)
            ->fetch([
                "type" => ["carrier"]
            ]);

        $message2 = var_dump($phone_number->carrier);

        Log::info('Sending message from Twilio '.$phoneNumber.' message : '.$message2);
    }
}

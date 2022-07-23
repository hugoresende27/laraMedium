<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{



    public function index()
    {
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);

        $call = $twilio->calls->create(
            "+14155551212", "+14158675310",
            ["url" => "http://demo.twilio.com/docs/voice.xml"]
        );

        echo $call->sid;
    }
}

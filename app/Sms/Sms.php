<?php

namespace App\Sms;

interface Sms
{

    public function send (string $phoneNumber, string $message);


}

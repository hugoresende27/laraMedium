<?php

namespace App\Console\Commands;


use App\Sms\LogSms;
use App\Sms\Sms;
use App\Sms\TwilioSms;
use Twilio\Rest\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendSMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS';

    /**
     * Execute the console command.
     *
     * @return int
     */
/*//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    REFACTORING
    public function handle(TwilioSms $twilioSms, LogSms $logSms)
    {
        $phoneNumber = 'This will be the body of the new message! We\'ve been trying to reach you!';
        $message = '+00351919657338';

        if (env('SMS_DRIVER') === 'twilio') {
            //Use twilio
            $twilioSms->send($phoneNumber, $message);

        } else {
            //Log text message
            $logSms->send($phoneNumber, $message);
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
    public function handle(Sms $sms)
    {
        $phoneNumber = 'This will be the body of the new message! We\'ve been trying to reach you!';
        $message = '+00351919657338';

        $sms->send($phoneNumber, $message);

    }
}

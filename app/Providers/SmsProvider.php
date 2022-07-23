<?php

namespace App\Providers;

use App\Sms\LogSms;
use App\Sms\Sms;
use App\Sms\TwilioSms;
use Illuminate\Support\ServiceProvider;

class SmsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $provider = match (env('SMS_DRIVER')) {
            'twilio' => TwilioSms::class,
            'log' => LogSms::class,
            default => LogSms::class,
        };

        $this->app->bind(Sms::class, $provider);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

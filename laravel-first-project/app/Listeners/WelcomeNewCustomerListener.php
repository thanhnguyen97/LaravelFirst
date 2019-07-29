<?php

namespace App\Listeners;

use App\Mail\WelcomNewUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewCustomerListener implements ShouldQueue
{
    public function handle($event)
    {
        sleep(10);
        Mail::to($event ->customer-> email)-> send(new WelcomNewUser());
    }
}

<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterControllerToNewsletter
{
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        dump('Register to new newsletter');
    }
}

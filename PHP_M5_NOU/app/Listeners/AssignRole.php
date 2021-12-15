<?php

namespace App\Listeners;

use App\Events\NewUserRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignRole
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegister  $event
     * @return void
     */
    public function handle(NewUserRegister $event)
    {
        //
    }
}

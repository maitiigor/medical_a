<?php

namespace App\Listeners;

use App\Event\PatienceEncounter;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewPatienceEncounter
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
     * @param  PatienceEncounter  $event
     * @return void
     */
    public function handle(PatienceEncounter $event)
    {
        //

        $event->source->notify(new \App\Notifications\TransferedFile($event->message,$event->patience));

    }
}

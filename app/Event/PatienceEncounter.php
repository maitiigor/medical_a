<?php

namespace App\Event;

use App\Models\HealthWorkers;
use App\Models\Patience;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PatienceEncounter
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $source;
    public $patience;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message,$patience)
    {
        //
        $this->message=$message;
        $this->source =HealthWorkers::find($message->doctor_id);
        $this->patience = $patience;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

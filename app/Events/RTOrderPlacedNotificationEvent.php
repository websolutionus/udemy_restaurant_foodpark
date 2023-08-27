<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RTOrderPlacedNotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;

    /**
     * Create a new event instance.
     */
    public function __construct($order)
    {

        $this->setConfig();

        $this->order = $order;
    }

    function setConfig() {
        config(['broadcasting.connections.pusher.key' => config('settings.pusher_key')]);
        config(['broadcasting.connections.pusher.secret' => config('settings.pusher_secret')]);
        config(['broadcasting.connections.pusher.app_id' => config('settings.pusher_app_id')]);
        config(['broadcasting.connections.pusher.options.cluster' => config('settings.pusher_cluster')]);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('order-placed'),
        ];
    }
}

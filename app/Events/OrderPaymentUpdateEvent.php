<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderPaymentUpdateEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public int $orderId;
    public array $paymentInfo;
    public string $paymentMethod;

    /**
     * Create a new event instance.
     */
    public function __construct($orderId, $paymentInfo, $paymentMethod)
    {
        $this->orderId = $orderId;
        $this->paymentInfo = $paymentInfo;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}

<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductQuantityUpdated implements ShouldBroadcast
{
    use SerializesModels;

    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }
    

    public function broadcastOn()
    {
        return new Channel('products');
    }
}

<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use App\Model\Offer;

class OfferSubmit
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $offer;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }

//     /**
//      * Get the channels the event should broadcast on.
//      *
//      * @return \Illuminate\Broadcasting\Channel|array
//      */
//     public function broadcastOn()
//     {
//         return new PrivateChannel('channel-name');
//     }
}

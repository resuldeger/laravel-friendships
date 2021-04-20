<?php

namespace Resuldeger\Friendships\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class FriendshipAcceptedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $otherUser;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $otherUser)
    {
        $this->user = $user;
        $this->otherUser = $otherUser;
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

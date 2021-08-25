<?php

namespace App\Events;

use App\Http\Models\User;

class ExampleEvent extends Event
{

    protected $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
        $this->user = $user;
    }



    public function broadcastOn()
    {
        return [];
    }
}

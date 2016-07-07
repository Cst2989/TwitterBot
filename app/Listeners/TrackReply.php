<?php

namespace App\Listeners;

use App\Tracking;
use App\Events\TweetSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TrackReply
{
    protected $tracking;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Tracking $tracking)
    {
        $this->tracking = $tracking;
    }

    /**
     * Handle the event.
     *
     * @param  TweetSent  $event
     * @return void
     */
    public function handle(TweetSent $event)
    {
        $this->tracking->create([
            'twitter_id'=> $event->id,
        ]);
    }
}

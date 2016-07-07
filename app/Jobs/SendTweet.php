<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Services\Twitter\TwitterService;
use App\Events\TweetSent;

class SendTweet extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $id;
    public $handle;
    public $text;
    //public $verifyHandle;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id,$handle,$text)
    {
        $this->id = $id;
        $this->handle = $handle;
        $this->text = $text;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TwitterService $twitter)
    {
        $twitter->sendTweet("@{$this->handle} {$this->text}", $this->id);
        event(new TweetSent($this->id));
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendLead implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Logger;

    private $lead_id;
    public $tries = 1;
    /**
     * Create a new job instance.
     *
     * @param int $lead_id
     */
    public function __construct(int $lead_id)
    {
        //
        $this->lead_id = $lead_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $params = ['lead_id' => $this->lead_id];
        $this->logRun('sendLead',$params);
    }
}

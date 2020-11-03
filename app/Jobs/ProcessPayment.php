<?php

namespace App\Jobs;

use Carbon\Carbon;
use Carbon\Exceptions\Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class ProcessPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,Logger;

    private $account_id;
    private $amount;
    public $tries = 1;

    /**
     * Create a new job instance.
     *
     * @param int $account_id
     * @param int $amount
     */
    public function __construct(int $account_id, int $amount)
    {
        //
        $this->account_id = $account_id;
        $this->amount = $amount;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $params = ['account_id' => $this->account_id, 'amount' => $this->amount];
        $this->logRun('processPayment',$params);
    }
}

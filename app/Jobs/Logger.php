<?php


namespace App\Jobs;


use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

trait Logger
{
    /**
     * @param string $title
     * @param array $params
     */
    private function logRun(string $title,array $params)
    {
        Log::info($title, [
            'time' => Carbon::now(env('APP_TZ') ?? 'Asia/Almaty')->toDateTimeString(),
            'params' => $params
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPayment;
use App\Jobs\SendLead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackgroundTaskController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'tasks' => 'required|json'
        ]);

        $tasks = json_decode($request->get('tasks'), true);

        foreach ($tasks as $task) {
            if ($task['category'] == 'account')
                ProcessPayment::dispatch($task['data']['account_id'], $task['data']['amount'])->onQueue('account');
            elseif ($task['category'] == 'amocrm')
                SendLead::dispatch($task['data']['lead_id'])->onQueue('amocrm');
        }
        return redirect('/logs');
    }

    public function index()
    {
        return view('tasks.index');
    }
}

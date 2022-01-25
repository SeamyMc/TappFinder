<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Pint;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class ModerateUploads implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $pint;


    public function __construct(Pint $pint)
    {
        $this->pint = $pint;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info("Adding to moderation queue: " . $this->pint->price);
        //Some code to send text
    
        $api_key = 'H334DXcT6sOp2QLggxMYJU6XpwI5dTMkNGeQd7jaqzGiFR';

        $response = Http::withHeaders([
            'Authorization' => 'H334DXcT6sOp2QLggxMYJU6XpwI5dTMkNGeQd7jaqzGiFR'
        ])->post('https://api.voodoosms.com/sendsms', [
            'to' => 447799474101,
            'from' => "VoodooSMS",
            'msg' => "Hello User! t",
            'sandbox' => true
        ]);

        
        Log::info($response);


    }
        
}

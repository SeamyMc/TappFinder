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

use App\Services\SMS\Messager;
use App\Services\SMS\SMSGlobalMessager;


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
    public function handle(Messager $sender)
    {

        Log::info("Adding to moderation queue: " . $this->pint->price);
        $sender->send('07799474101', $this->getMessage());


        //Some code to send text

    }


    private function getMessage()
    {
        return "New item for review!";

    }
        
}

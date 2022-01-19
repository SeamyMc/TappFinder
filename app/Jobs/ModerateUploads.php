<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Pint;

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
        echo($pint->beer->name);
        echo($pint->user->name);
    }
}

<?php

namespace App\Observers;

use App\Models\Pint;
use App\Jobs\ModerateUploads;
use Illuminate\Support\Facades\Log;

class PintObserver
{
    /**
     * Handle the Pint "created" event.
     *
     * @param  \App\Models\Pint  $pint
     * @return void
     */
    public function created(Pint $pint)
    {
        Log::info("test");
        ModerateUploads::dispatch($pint);
    }

    /**
     * Handle the Pint "updated" event.
     *
     * @param  \App\Models\Pint  $pint
     * @return void
     */
    public function updated(Pint $pint)
    {
        //
    }

    /**
     * Handle the Pint "deleted" event.
     *
     * @param  \App\Models\Pint  $pint
     * @return void
     */
    public function deleted(Pint $pint)
    {
        //
    }

    /**
     * Handle the Pint "restored" event.
     *
     * @param  \App\Models\Pint  $pint
     * @return void
     */
    public function restored(Pint $pint)
    {
        //
    }

    /**
     * Handle the Pint "force deleted" event.
     *
     * @param  \App\Models\Pint  $pint
     * @return void
     */
    public function forceDeleted(Pint $pint)
    {
        //
    }
}

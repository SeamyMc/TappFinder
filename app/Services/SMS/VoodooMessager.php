<?php

namespace App\Services\SMS;


use Illuminate\Support\Facades\Log;

class VoodooMessager implements Messager
{
    public function send(string $phoneNumber, string $message)
    {
        Log::info('Service: Voodoo messager: ' . $message);

        // $response = Http::withHeaders([
        //     'Authorization' => ''
        // ])->post('https://api.voodoosms.com/sendsms', [
        //     'to' => 447799474101,
        //     'from' => "VoodooSMS",
        //     'msg' => "Hello User! t",
        //     'sandbox' => true
        // ]);

        // Log::info($response);

    }
}
<?php

namespace App\Services\SMS;

use Illuminate\Support\Facades\Log;

class SMSGlobalMessager implements Messager
{

    public function send(string $mobile, string $message)
    {
        Log::info('Service: SMSGlobal Messager ' . $message);

        // $response = Http::withHeaders([
        //     'Authorization: MAC id="2edad3f7b7dd7c798810a90eb1ecd72f", ts="1325376000", nonce="random-string", mac="base64-encoded-hash"' 
        // ])->post('https://api.voodoosms.com/sendsms', [
        //     'to' => 447799474101,
        //     'from' => "SMSGLOBAL",
        //     'msg' => $message
        // ]);

        // Log::info($response);
    }
}
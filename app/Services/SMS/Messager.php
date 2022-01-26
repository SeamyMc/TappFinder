<?php

namespace App\Services\SMS;

interface Messager
{
    public function send(string $phoneNumber, string $message);
}
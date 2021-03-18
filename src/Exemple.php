<?php

namespace LeandroGrando\NotificationCenter;

use Illuminate\Support\Facades\Log;

class Exemple
{
    public static function helloWorld()
    {
        echo "Hellow Word";
        Log::debug('Hello Word');
    }
}

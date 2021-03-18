<?php

namespace LeandroGrando\NotificationCenter;

use Illuminate\Support\ServiceProvider;

class NotificationCenterProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
    }

}

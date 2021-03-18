<?php

namespace LeandroGrando\NotificationCenter\Traits;
use LeandroGrando\NotificationCenter\Models\Notification;

trait HasNotificationCenter {
    public function database_notifications() {
        return $this->hasMany(Notification::class);
    }
}

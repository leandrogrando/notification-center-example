<?php

use Illuminate\Support\Facades\Route;
use LeandroGrando\NotificationCenter\Http\Controllers\NotificationController;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::group(['prefix' => 'notifications'], function () {
        Route::post('/', [NotificationController::class, 'store']);
        Route::get('/index', [NotificationController::class, 'index']);
        Route::get('/mark-as-read/{notification}', [NotificationController::class, 'markAsRead']);
        Route::get('/read-all', [NotificationController::class, 'readAll']);
        Route::get('/count', [NotificationController::class, 'count']);
    });
});

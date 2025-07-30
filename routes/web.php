<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

Route::get('/notification', [NotificationController::class, 'showNotificationForm']);
Route::get('/', [NotificationController::class, 'showNotificationForm']);
Route::post('/send-notification', [NotificationController::class, 'send'])->name('send.notification');

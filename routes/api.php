<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('webhooks')->group(function () {

    Route::prefix('incoming-call')->group(function () {
        Route::webhooks('/', 'incoming_call');
        Route::webhooks('secondary', 'incoming_call');
    });

    Route::webhooks('call-ended', 'call_ended');
    Route::webhooks('recording-complete', 'recording_complete');
});

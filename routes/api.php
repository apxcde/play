<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('webhooks')->group(function () {
    Route::webhooks('fail', 'failed');
    Route::webhooks('incoming-call', 'incoming_call');
    Route::webhooks('call-ended', 'call_ended');
    Route::webhooks('recording-complete', 'recording_complete');
});

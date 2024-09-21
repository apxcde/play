<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('webhooks')->group(function () {
    Route::webhooks('call-ended', 'call_ended');
});

<?php

use Illuminate\Support\Facades\Route;
use http\Client\Request;

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});

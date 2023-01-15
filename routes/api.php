<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SubscriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('contact', [ContactController::class, 'contact']);
Route::post('subscription', [SubscriptionController::class, 'subscription']);

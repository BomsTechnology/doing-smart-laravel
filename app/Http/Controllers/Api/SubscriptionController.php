<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subcription;
use App\Notifications\SubscrioptionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class SubscriptionController extends Controller
{
  
    public function subscription(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:subcriptions,email'
        ]);

        Subcription::create(['email' => $request->email]);

        $data = [
            'email' => $request->email,
            'count' => Subcription::all()->count()
        ];
        Notification::route('mail', 'marcsigha@gmail.com')->notify(new SubscrioptionNotification($data));
        $response = [
            'status' => true,
            'message' => 'Subscription message Send success',
        ];
        return response($response, 201);
    }

   
}

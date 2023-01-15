<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    
    public function contact(ContactRequest $request)
    {
        $data = $request->validated();
        Notification::route('mail', 'contactdoingsmart@gmail.com')->notify(new ContactNotification($data));
        $response = [
            'status' => true,
            'message' => 'Contact message Send success',
        ];
        return response($response, 201);
    }

}

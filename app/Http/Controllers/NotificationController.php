<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\SendNotificationEmailJob;

class NotificationController extends Controller
{
    public function showNotificationForm()
    {
        return view('emails.notification_form');
    }


    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        SendNotificationEmailJob::dispatch($validated['email'], $validated['message']);
        return back()->with('success', 'Notification email queued!');
    }
}

<?php

namespace App\Listeners;

use App\Events\NewNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Twilio\Rest\Client;

class NotificationSMSListener implements ShouldQueue
{
    public function handle(NewNotificationEvent $event)
    {
        $notification = $event->notification;
        // $user = $event->user;
        $phone_number = '+255744597690';

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $from = env('TWILIO_FROM');

        // $to = $user->phone_number; // Assuming you have a phone number field for users.
        $to = $phone_number;
        $body = "lsdm notification: {$notification->message}";

        $client = new Client($sid, $token);

        $client->messages->create($to, [
            'from' => $from,
            'body' => $body,
        ]);
    }
}

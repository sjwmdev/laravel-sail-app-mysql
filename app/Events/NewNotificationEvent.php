<?php
namespace App\Events;

use App\Models\Notification;
use Illuminate\Foundation\Events\Dispatchable;

class NewNotificationEvent
{
    use Dispatchable;

    public $notification;
    // public $user;

    // public function __construct(Notification $notification, User $user)
    // {
    //     $this->notification = $notification;
    //     $this->user = $user;
    // }
    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }
}

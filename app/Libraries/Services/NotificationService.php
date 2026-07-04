<?php

namespace App\Libraries\Services;

use App\Libraries\Interfaces\Notifiable;

class NotificationService implements Notifiable
{
    public function sendNotification($message)
    {
        return $message;
    }
}
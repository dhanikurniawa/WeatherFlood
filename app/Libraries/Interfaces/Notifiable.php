<?php

namespace App\Libraries\Interfaces;

interface Notifiable
{
    public function sendNotification($message);
}
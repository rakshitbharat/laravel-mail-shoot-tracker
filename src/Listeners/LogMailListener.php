<?php

namespace RakshitBharat\MailShootTracker\Listeners;

use Illuminate\Mail\Events\MessageSent;
use Illuminate\Support\Facades\Log;

class LogMailListener
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Mail\Events\MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        $message = $event->message;
        $to = $message->getTo();

        if ($to) {
            $to = implode(', ', array_keys($to));
        } else {
            $to = 'No recipients';
        }

        $subject = $message->getSubject();

        Log::info('Mail sent', ['to' => $to, 'subject' => $subject]);
    }
}

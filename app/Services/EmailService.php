<?php


namespace App\Services;


use Illuminate\Support\Facades\Mail;

class EmailService
{

    public function send($to, $title, $description)
    {
        Mail::send('emails.subscription', ['title' => $title, 'description' => $description], function ($message) use ($to) {
            $message->to($to, 'Visitor')->subject('Subscription Email');
        });
    }
}

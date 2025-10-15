<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $feedbackData;

    public function __construct(array $feedbackData)
    {
        $this->feedbackData = $feedbackData;
    }

    public function build()
    {
        return $this->subject('Новое сообщение обратной связи - ' . $this->feedbackData['subject'])
            ->markdown('emails.feedback.received')
            ->with(['data' => $this->feedbackData]);
    }
}

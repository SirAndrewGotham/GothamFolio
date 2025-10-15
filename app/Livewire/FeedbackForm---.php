<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class FeedbackForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $category = '';
    public $message = '';
    public $formSubmitted = false;
    public $formSubmitting = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'category' => 'required',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Set submitting state
        $this->formSubmitting = true;

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. etc.

        // Simulate processing time
        sleep(2);

        // Reset form
        $this->reset(['name', 'email', 'subject', 'category', 'message']);

        // Show success message
        $this->formSubmitted = true;
        $this->formSubmitting = false;
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}

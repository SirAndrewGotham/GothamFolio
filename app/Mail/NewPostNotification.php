<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Post;
use App\Models\Subscription;

class NewPostNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new NewPostNotification instance with the given post and subscription.
     *
     * @param Post $post The post being announced in the notification.
     * @param Subscription $subscription The subscription (recipient context) for the notification.
     */
    public function __construct(public Post $post, public Subscription $subscription)
    {
        //
    }

    /**
     * Build the message envelope using the post title for the subject.
     *
     * @return \Illuminate\Mail\Mailables\Envelope The envelope configured with the subject "New Post: {post title}".
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Post: ' . $this->post->title,
        );
    }

    /**
         * Define the email's content: the markdown view and the data passed to it.
         *
         * @return Content The Content instance configured with the `emails.posts.new-post-notification` markdown template and view data containing `post` and `subscription`.
         */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.posts.new-post-notification',
            with: [
                'post' => $this->post,
                'subscription' => $this->subscription,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
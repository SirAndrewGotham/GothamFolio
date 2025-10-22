<x-mail::message>
# New Post: {{ $post->title }}

Hello!

A new post has been published that you might be interested in: **{{ $post->title }}**.

{{ $post->excerpt }}

<x-mail::button :url="url('/blog/' . $post->slug)">
Read More
</x-mail::button>

If you no longer wish to receive these emails, you can unsubscribe by clicking the link below:

<x-mail::button :url="url('/unsubscribe/' . $subscription->token)">
Unsubscribe
</x-mail::button>

Thanks,
{{ config('app.name') }} Team
</x-mail::message>

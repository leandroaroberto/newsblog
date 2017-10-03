@component('mail::message')
# New Message

The body of **your message**.

@component('mail::button', ['url' => 'http://news.crossover.com'])
Go to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

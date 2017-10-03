@component('mail::message')
# {{$title}}
{{$message}}


@component('mail::button', ['url' => 'http://news.crossover.com'])
Go to site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')

Hi {{ $message->name }}!

@component('mail::panel')
	Thank you for contacting me, I'll be get back to you soon :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

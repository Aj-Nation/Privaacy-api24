@component('mail::message')
# Introduction




@component('mail::promotion')
Join us now
@endcomponent
        
        

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
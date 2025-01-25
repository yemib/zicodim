@component('mail::message')
# Introduction

The body of your message.  Thanks okay 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('App.name') }}
@endcomponent

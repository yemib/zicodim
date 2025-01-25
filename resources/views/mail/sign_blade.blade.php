@component('mail::message')
# {{$heading}}

{!!$message!!}


@if(isset($button))

@component('mail::button', ['url' =>$button_url])
{{$button}}
@endcomponent

@endif

{{ config('App.name') }}
@endcomponent

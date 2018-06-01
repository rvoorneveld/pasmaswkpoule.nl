@component('mail::message')
# Welkom {{ $user->name }},

Je bent succesvol aangemeld voor de WK Poule. Je kunt nu jouw uitslagen invullen.

@component('mail::button', ['url' => config('app.url'),])
Voorspellen!
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Beste {{ $user->name }},

We hebben jouw puntentotaal opnieuw berekend. Je hebt sinds de vorige meting {{ $user->total }} punten behaald.

@component('mail::button', ['url' => config('app.url'),])
    Bekijk mijn resultaat
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Beste {{ $user->name }},

We hebben jouw puntentotaal opnieuw berekend. Je hebt in totaal {{ $user->total }} punt(en) behaald.
Ga snel naar de website om te zien hoe je scoort ten opzichte van de rest!

@component('mail::button', ['url' => config('app.url'),])
    Bekijk mijn resultaat!
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent

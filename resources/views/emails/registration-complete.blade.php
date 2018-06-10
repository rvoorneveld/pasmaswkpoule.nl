@component('mail::message')
# Welkom {{ $user->name }},

We hebben je met succes aangemeld voor de WK Poule. Wie wordt er volgens jou wereldkampioen?
Je hebt tot uiterlijk donderdag 14 juni 17:00 om jouw voorspellingen van de poulefase in te vullen.

Wij zullen &euro; 5,- inschrijfgeld in rekening brengen, dit dient betaald te worden bij Rick of Jordi.
Van dit inschrijfgeld zullen er mooie prijzen worden gekocht. Hierover later meer.

@component('mail::button', ['url' => config('app.url'),])
Ga direct voorspellen!
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent
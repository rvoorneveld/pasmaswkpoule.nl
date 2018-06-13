@component('mail::message')
# Beste {{ $user->name }},

Jouw voorspellingen voor de wedstrijden van vandaag zijn nog niet compleet!
Voeg snel jouw ontbrekende voorspellingen toe zodat je blijft meedoen om de bovenste plaatsen op de ranglijst.

@component('mail::button', ['url' => config('app.url'),])
    Ga direct voorspellen!
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent
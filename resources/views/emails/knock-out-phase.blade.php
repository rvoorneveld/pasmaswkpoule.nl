@component('mail::message')
# Beste deelnemer,

De poulefase zit er op, dat betekent dat vanaf morgen de achtste finales worden gespeeld.
Alle landen die spelen zijn voor je klaargezet en kunnen worden ingevuld.

LET OP: de uitslag die je invult geldt voor de <strong>reguliere wedstrijd van 90 minuten</strong>.
Mocht een wedstrijd gelijk eindigen na 90 minuten, dan wordt dit uiteindelijk ook gezien als een gelijk spel. Ongeacht of er daarna wordt gescoord in de verlenging of tijdens de penalty's.

Heel veel succes met voorspellen!

@component('mail::button', ['url' => config('app.url'),])
    Vul de 1/8e finales in!
@endcomponent

Sportieve groet,<br>
{{ config('app.name') }}
@endcomponent
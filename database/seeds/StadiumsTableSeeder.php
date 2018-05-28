<?php

use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadiums = [
            [
                'cityId' => 1,
                'name' => 'Luzhniki',
                'image' => 'cf048b1a-d685-11e7-9ff7-45339ec0301c_web_scale_0.0365497_0.0365497__.jpg',
                'image_caption' => '(Foto: Photo News)',
                'description' => 'Met een capaciteit van 81.015 het grootste stadion van Rusland. Het in 1956 gebouwde Leninstadion werd in 1980 gebruikt voor de Olympische Spelen. Tijdens het WK worden er in Luzhniki vier groepswedstrijden, een achtste finale, halve finale en tot slot de finale op 15 juli 2018 gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Olympisch_Stadion_Loezjniki',
            ], [
                'cityId' => 1,
                'name' => 'Spartakstadion',
                'image' => 'cd086f64-d380-11e7-8bd0-af8dc84adf1b_web_scale_0.0571429_0.0571429__.jpg',
                'image_caption' => 'Foto: Reuters',
                'description' => 'De Otkrytiye Arena van topclub Spartak Moskou heeft een capaciteit van 42.759 toeschouwers. De bouwwerken aan het speciaal voor het WK gebouwde stadion begonnen in mei 2010 en eindigden in juli 2014. Voor de toegangspoorten van het stadion staat een standbeeld van de Romeinse gladiator Spartacus, naar wie de club vernoemd is. Tijdens het WK worden in het stadion vier groepswedstrijden en een achtste finale gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Otkrytieje_Arena',
            ], [
                'cityId' => 2,
                'name' => 'Sint-Petersburgstadion',
                'image' => 'ebc635bc-d380-11e7-8bd0-af8dc84adf1b_web_scale_0.0666667_0.0666667__.jpg',
                'image_caption' => 'Foto: AFP',
                'description' => 'Gebouwd tussen december 2006 en november 2016, als opvolger van het Petrovskystadion van Zenit Sint-Petersburg, de ex-club van Nicolas Lombaerts en Axel Witsel. Het stadion biedt plaats aan 57.268 toeschouwers, tijdens het WK worden er zeven wedstrijden gespeeld. Naast vier groepswedstrijden ook een achtste finale, een halve finale en tot slot de kleine finale.',
                'link' => 'https://nl.wikipedia.org/wiki/Nieuwe_Zenitstadion',
            ], [
                'cityId' => 3,
                'name' => 'Fishtstadion',
                'image' => '07e200d2-d381-11e7-8bd0-af8dc84adf1b_web_scale_0.043735_0.043735__.jpg',
                'image_caption' => '(Foto: Photo News)',
                'description' => 'Het olympisch stadion werd na de Spelen tussen oktober 2014 en juni 2017 verbouwd voor het WK. Zo is het huidige stadion niet meer overdekt en werden er achter de doelen tribunes geïnstalleerd. Het Fishtstadion biedt plaats aan 41.220 toeschouwers en mag tijdens het WK zes wedstrijden ontvangen: vier groepswedstrijden, een achtste finale en een kwartfinale.',
                'link' => 'https://nl.wikipedia.org/wiki/Olympisch_Stadion_Fisjt',
            ], [
                'cityId' => 4,
                'name' => 'Kaliningradstadion',
                'image' => '51abfd46-d686-11e7-9ff7-45339ec0301c_web_scale_0.308642_0.308642__.jpg',
                'image_caption' => '',
                'description' => 'Eind 2015 werd gestart met de bouw van deze 35.010 plaatsen tellende Arena Baltika, waarvan de bouwwerken na financiële moeilijkheden momenteel nog niet voltooid zijn. De oplevering ervan wordt echter nog voor het einde van het jaar verwacht. Tijdens het WK worden er vier groepswedstrijden gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Arena_Baltika',
            ], [
                'cityId' => 5,
                'name' => 'Nizhni Novgorodstadion',
                'image' => '7434d6d0-d686-11e7-9ff7-45339ec0301c_web_scale_0.0407997_0.0407997__.jpg',
                'image_caption' => '(Foto: Photo News)',
                'description' => 'Het aan 45.335 toeschouwers plaats biedende stadion moet eind dit jaar nog opgeleverd worden, na renovatiewerken. Het oorspronkelijke Strelkastadion werd in 2005 geopend. Tijdens het WK worden er vier groepswedstrijden, een achtste finale en een kwartfinale gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Strelkastadion',
            ], [
                'cityId' => 6,
                'name' => 'Jekaterinburg Arena',
                'image' => '888cd860-d381-11e7-8bd0-af8dc84adf1b_web_scale_0.0571429_0.0571429__.jpg',
                'image_caption' => '(Foto: Photo News)',
                'description' => 'Het oorspronkelijk reeds in 1957 gebouwde stadion werd grondig gerenoveerd voor het WK en zou eind dit jaar afgewerkt moeten zijn, om vervolgens 35.036 toeschouwers te kunnen ontvangen. In het stadion van FK Oeral worden er vier groepswedstrijden gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Centraal_Stadion_(Jekaterinenburg)',
            ], [
                'cityId' => 7,
                'name' => 'Mordovia Arena',
                'image' => '993debe2-d686-11e7-9ff7-45339ec0301c_web_scale_0.3067485_0.3067485__.jpg',
                'image_caption' => '',
                'description' => 'Ook dit volledig nieuwe stadion moet eind december 2017 afgewerkt zijn en plaats bieden aan 44.021 fans. Tijdens het WK worden er vier groepswedstrijden gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Mordovia_Arena',
            ], [
                'cityId' => 8,
                'name' => 'Kazan Arena',
                'image' => 'a554ac34-d381-11e7-8bd0-af8dc84adf1b_web_scale_0.0571429_0.0571429__.jpg',
                'image_caption' => '(Foto: Photo News)',
                'description' => 'In de nieuwgebouwde Kazan Arena (juni 2010 - juni 2013) kunnen 45.000 toeschouwers vier groepswedstrijden, een achtste finale en een kwartfinale volgen.',
                'link' => 'https://nl.wikipedia.org/wiki/Kazan_Arena',
            ], [
                'cityId' => 9,
                'name' => 'Rostov Arena',
                'image' => 'a89e5db0-d686-11e7-9ff7-45339ec0301c_web_scale_0.3067485_0.3067485__.jpg',
                'image_caption' => '',
                'description' => 'De nieuwe Rostov Arena biedt plaats aan 45.183 toeschouwers. Tijdens het WK worden in de thuisbasis van FK Rostov vier groepswedstrijden en een achtste finale gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Rostov_Arena',
            ], [
                'cityId' => 10,
                'name' => 'Volgograd Arena',
                'image' => 'b8b9d0c6-d686-11e7-9ff7-45339ec0301c_web_scale_0.3067485_0.3067485__.jpg',
                'image_caption' => '',
                'description' => 'De tussen december 2012 en deze maand gebouwde stadion aan de oevers van de Wolga biedt plaats aan 45.061 toeschouwers. Tijdens het WK worden er vier groepswedstrijden gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Volgograd_Arena',
            ], [
                'cityId' => 11,
                'name' => 'Samara Arena',
                'image' => 'c3054380-d686-11e7-9ff7-45339ec0301c_web_scale_0.3067485_0.3067485__.jpg',
                'image_caption' => '',
                'description' => 'Voor het WK wordt de Cosmos Arena gebouwd, met een capaciteit van 44.395 toeschouwers. Tijdens het WK worden er vier groepswedstrijden, een achtste finale en een kwartfinale gespeeld.',
                'link' => 'https://nl.wikipedia.org/wiki/Cosmos_Arena',
            ],
        ];

        foreach ($stadiums as $stadium) {
            DB::table('stadiums')->insert($stadium);
        }
    }

}

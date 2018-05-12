<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([
            'Moskou' => '<p>De Russische hoofdstad is met zijn twaalf miljoen inwoners met voorsprong de grootste stad van het land en tevens het centrum van de politieke en culturele elite. Sinds de Russische revolutie is Moskou onafgebroken de hoofdstad, voor 1918 was die eer enkele eeuwen weggelegd voor Sint-Petersburg. Getuigen van de rijke geschiedenis zijn de talloze bezienswaardigheden in het centrum van de stad. In 1980 werden de Olympische Spelen georganiseerd in Moskou, toen nog hoofdstad van de Sovjet-Unie. Nadien vonden er nog heel wat sportmanifestaties plaats, waaronder het WK indooratletiek van 2006 en het WK atletiek van 2013. Tijdens het WK is Moskou de enige speelstad met twee stadions.</p>',
            'Sint-Petersburg' => '<p>De voormalige hoofdstad is na Moskou de belangrijkste stad van het land en met vijf miljoen inwoners ook de op een na grootste. Het voormalige Petrograd en later Leningrad was gedurende enkele eeuwen de hoofdstad van het Russische Keizerrijk. In het Russische noordelijke kroonjuweel werd er voor de komst van het WK met het Sint-Petersburgstadion een gloednieuwe arena gebouwd.</p>',
            'Sotsji' => '<p>De stad zette zich in 2014 op de wereldkaart met de organisatie van de Olympische Winterspelen. Na jaren van corruptie tijdens de bouwwerkzaamheden werden de Spelen van Sotsji met een prijskaartje van meer dan vijftig miljard dollar de duurste aller tijden. Sotsji ligt aan de oevers van de Zwarte Zee en is tijdens zomer en winter de favoriete vakantiebestemmingen van de gegoede Russische elite. Ook heel wat politici hebben er een buitenverblijf (dacha).</p>',
            'Kaliningrad' => '<p>Naast de meest westelijk gelegen ook de opmerkelijkste Russische speelstad, gelegen in de oblast Kaliningrad, een Russische exclave die volledig omringd wordt door Polen en Litouwen. Kaliningrad is het voormalige Koningsbergen, een stad in het toenmalige Oost-Pruisen die tot na de Tweede Wereldoorlog tot Duitsland behoorde. Na het uiteenvallen van de Sovjet-Unie werd dit gebied een exclave van Rusland. Het is tevens de geboortestad van filosoof Immanuel Kant.</p>',
            'Nizhni Novgorod' => '<p>Het vroegere Gorki, intussen een stad van meer dan één miljoen inwoners, ligt ongeveer vierhonderd kilometer ten oosten van Moskou. De stad is gelegen aan de Trans-Siberische spoorlijn en aan de monding van de Oka in de Wolga.</p>',
            'Jekaterinenburg' => '<p>Na Moskou is deze 1,5 miljoen inwoners tellende stad aan de Oeral het tweede industriecentrum van Rusland. De naar Catharina vernoemde stad is op het WK de meest oostelijke gelegen speelstad.</p>',
            'Saransk' => '<p>Een relatief kleine stad, gelegen in de Russische autonome deelprepubliek Mordovië. De stad is de thuisbasis van voetbalclub Mordovia Saransk.</p>',
            'Kazan' => '<p>Kazan, de stad van de Tataren, is een handelscentrum aan de grens van Europa en Azië. Het is de thuishaven van Rubin Kazan, de werkgever van onze landgenoot Maxime Lestienne en de ex-club van Cédric Roussel.</p>',
            'Rostov aan de Don' => '<p>Deze Zuid-Russische havenstad met mildere temperaturen is gelegen aan de oevers van de Don, op iets minder dan vijftig kilometer voor de monding van de rivier in de Zee van Azov.</p>',
            'Volgograd' => '<p>Het vroegere Stalingrad werd internationaal vooral bekend tijdens de Tweede Wereldoorlog, toen er een belangrijke en bloederige slag werd uitgevochten. In de eindejaarsperiode van 2013 - en dus niet lang voor de start van de Olympische Winterspelen in Sotsji - vielen er twee aanslagen, op een treinstation en een bus. Daarbij vielen er meer dan dertig doden.</p>',
            'Samara' => '<p>Het vroegere Koejbysjev is een miljoenstad aan de monding van de Samara in de Wolga.</p>',
        ] as $name => $description) {
            DB::table('cities')->insert([
                'name' => $name,
                'description' => htmlentities($description),
            ]);
        }
    }
}

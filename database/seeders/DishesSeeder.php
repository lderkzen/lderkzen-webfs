<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishesSeeder extends Seeder
{
    public function run()
    {
        // SOEP
        Dish::create([
            'dish_nr' => '1',
            'dish_type_id' => 1,
            'name' => 'Soep Ling Fa',
            'price' => 3.80
        ]);
        Dish::create([
            'dish_nr' => '2',
            'dish_type_id' => 1,
            'name' => 'Kippensoep',
            'price' => 2.90
        ]);
        Dish::create([
            'dish_nr' => '3',
            'dish_type_id' => 1,
            'name' => 'Tomatensoep',
            'price' => 2.90
        ]);
        Dish::create([
            'dish_nr' => '4',
            'dish_type_id' => 1,
            'name' => 'Haaienvinnensoep',
            'price' => 3.10
        ]);
        Dish::create([
            'dish_nr' => '5',
            'dish_type_id' => 1,
            'name' => 'Champignonsoep',
            'price' => 3.30
        ]);
        Dish::create([
            'dish_nr' => '6',
            'dish_type_id' => 1,
            'name' => 'Pekingsoep',
            'price' => 3.80
        ]);
        Dish::create([
            'dish_nr' => '7',
            'dish_type_id' => 1,
            'name' => 'Wan Tan Soep',
            'price' => 4.30
        ]);
        Dish::create([
            'dish_nr' => '8',
            'dish_type_id' => 1,
            'name' => 'Chinese Champignonsoep',
            'price' => 4.10
        ]);

        // VOORGERECHTEN
        Dish::create([
            'dish_nr' => '10',
            'dish_type_id' => 2,
            'name' => 'Loempia Fing Fa',
            'price' => 6.20,
            'description' => 'met atjar, ananas en pindasaus'
        ]);
        Dish::create([
            'dish_nr' => '11',
            'dish_type_id' => 2,
            'name' => 'Loempia Compleet',
            'price' => 6.20,
            'spice_level' => 2,
            'description' => 'met gesmoord rundvlees en pikante saus'
        ]);
        Dish::create([
            'dish_nr' => '12',
            'dish_type_id' => 2,
            'name' => 'Loempia met kip',
            'price' => 3.90
        ]);
        Dish::create([
            'dish_nr' => '13',
            'dish_type_id' => 2,
            'name' => 'Loempia',
            'price' => 3.80
        ]);
        Dish::create([
            'dish_nr' => '14',
            'dish_type_id' => 2,
            'name' => 'Chinese mini loempia',
            'price' => 4.90,
            'description' => '4st.'
        ]);
        Dish::create([
            'dish_nr' => '14A',
            'dish_type_id' => 2,
            'name' => 'Vegetarisch mini loempia',
            'price' => 4.90,
            'description' => '12st.'
        ]);
        Dish::create([
            'dish_nr' => '15',
            'dish_type_id' => 2,
            'name' => 'Kroepoek',
            'price' => 2.50,
        ]);
        Dish::create([
            'dish_nr' => '15A',
            'dish_type_id' => 2,
            'name' => 'Casave Kroepoek',
            'price' => 2.70,
        ]);
        Dish::create([
            'dish_nr' => '16',
            'dish_type_id' => 2,
            'name' => 'Pangsit Goreng',
            'price' => 3.90,
            'description' => '7st.'
        ]);
        Dish::create([
            'dish_nr' => '17',
            'dish_type_id' => 2,
            'name' => 'Pisang Goreng',
            'price' => 3.40,
            'description' => '5st.'
        ]);
        Dish::create([
            'dish_nr' => '18',
            'dish_type_id' => 2,
            'name' => 'Chinese Dim Sum',
            'price' => 5.40,
            'description' => 'mini loempia, kerry ko, pangsit goreng, garnalenpasteitje'
        ]);
        Dish::create([
            'dish_nr' => '19',
            'dish_type_id' => 2,
            'name' => 'Saté Babi',
            'price' => 5.40,
            'description' => '4st.'
        ]);
        Dish::create([
            'dish_nr' => '20',
            'dish_type_id' => 2,
            'name' => 'Saté Ajam',
            'price' => 5.40,
            'description' => '4st.'
        ]);
        Dish::create([
            'dish_nr' => '20A',
            'dish_type_id' => 2,
            'name' => 'Saté garnalen',
            'price' => 9.90,
            'description' => '3st.'
        ]);
        Dish::create([
            'dish_nr' => '21',
            'dish_type_id' => 2,
            'name' => 'Fong Mei Ha',
            'price' => 8.10,
            'description' => 'krokant gepaneerd garnalen, 4st.'
        ]);
        Dish::create([
            'dish_nr' => '22',
            'dish_type_id' => 2,
            'name' => 'Patat',
            'price' => 2.30,
        ]);
        Dish::create([
            'dish_nr' => '23',
            'dish_type_id' => 2,
            'name' => 'Tia Siu Mai',
            'price' => 3.50,
            'description' => 'gebakken vleespasteitje, 4st.'
        ]);
        Dish::create([
            'dish_nr' => '24',
            'dish_type_id' => 2,
            'name' => 'Atjar',
            'price' => 3.00
        ]);
        Dish::create([
            'dish_nr' => '25',
            'dish_type_id' => 2,
            'name' => 'Witte Rijst',
            'price' => 3.00
        ]);
        Dish::create([
            'dish_nr' => '26',
            'dish_type_id' => 2,
            'name' => 'Grote pindasaus',
            'price' => 3.90
        ]);
        Dish::create([
            'dish_nr' => '27',
            'dish_type_id' => 2,
            'name' => 'Kleine pindasaus',
            'price' => 2.30
        ]);
        Dish::create([
            'dish_nr' => '28',
            'dish_type_id' => 2,
            'name' => 'Kippenpootje',
            'price' => 2.30
        ]);
        Dish::create([
            'dish_nr' => '29',
            'dish_type_id' => 2,
            'name' => 'Halve kip',
            'price' => 6.00
        ]);
        Dish::create([
            'dish_nr' => '29',
            'dish_type_id' => 2,
            'name' => 'Kroket',
            'price' => 1.40
        ]);
        Dish::create([
            'dish_nr' => '29G',
            'dish_type_id' => 2,
            'name' => 'Frikandel',
            'price' => 1.40
        ]);
        Dish::create([
            'dish_nr' => '29H',
            'dish_type_id' => 2,
            'name' => 'Kleine Sambal',
            'price' => 2.50
        ]);

        // BAMI EN NASI GERECHTEN
        Dish::create([
            'dish_nr' => '30',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng Ling Fa',
            'price' => 14.30,
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        Dish::create([
            'dish_nr' => '31',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng met ei',
            'price' => 5.00
        ]);
        Dish::create([
            'dish_nr' => '32',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng speciaal',
            'price' => 8.50
        ]);
        Dish::create([
            'dish_nr' => '33',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng met saté',
            'price' => 8.50,
            'description' => '3st.'
        ]);
        Dish::create([
            'dish_nr' => '34',
            'dish_type_id' => 3,
            'name' => 'Nasi Yeung Chow',
            'price' => 10.90
        ]);
        Dish::create([
            'dish_type_id' => 3,
            'name' => 'Bami Yeung Chow',
            'price' => 13.00,
            'description' => 'met garnaaltjes en Chia Sieuw-vlees'
        ]);
        Dish::create([
            'dish_nr' => '35',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng Malay',
            'price' => 9.30
        ]);
        Dish::create([
            'dish_nr' => '36',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng kipfilet',
            'price' => 9.30
        ]);
        Dish::create([
            'dish_nr' => '37',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng varkensvlees',
            'price' => 9.30
        ]);
        Dish::create([
            'dish_nr' => '38',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng garnalen',
            'price' => 14.30
        ]);
        Dish::create([
            'dish_nr' => '39',
            'dish_type_id' => 3,
            'name' => 'Bami of Nasi Goreng ossenhaas',
            'price' => 15.30
        ]);

        // COMBINATIE GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '40',
            'dish_type_id' => 4,
            'name' => 'Babi Pangang, Foe Yong Hai en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '41',
            'dish_type_id' => 4,
            'name' => 'Babi Pangang, Tjap Tjoy en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '42',
            'dish_type_id' => 4,
            'name' => 'Babi Pangang, Koe Loe Yuk en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '43',
            'dish_type_id' => 4,
            'name' => 'Babi Pangang, Tau Sie Kai en saté',
            'price' => 16.50
        ]);
        Dish::create([
            'dish_nr' => '44',
            'dish_type_id' => 4,
            'name' => 'Koe Loe Yuk, Foe Yong Hai en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '45',
            'dish_type_id' => 4,
            'name' => 'Koe Loe Yuk, Tjap Tjoy en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '46',
            'dish_type_id' => 4,
            'name' => 'Foe Yong Hai, Tjap Tjoy en saté',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '47',
            'dish_type_id' => 4,
            'name' => 'Foe Yong Hai, Kip Kerrie en saté',
            'price' => 16.50
        ]);

        // MIHOEN GERECHTEN
        Dish::create([
            'dish_nr' => '50',
            'dish_type_id' => 5,
            'name' => 'Mihoen Ling Fa',
            'price' => 16.40,
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        Dish::create([
            'dish_nr' => '51',
            'dish_type_id' => 5,
            'name' => 'Mihoen met varkensvlees',
            'price' => 9.30
        ]);
        Dish::create([
            'dish_nr' => '52',
            'dish_type_id' => 5,
            'name' => 'Mihoen met kipfilet',
            'price' => 10.40
        ]);
        Dish::create([
            'dish_nr' => '53',
            'dish_type_id' => 5,
            'name' => 'Mihoen met ossenhaas',
            'price' => 16.40
        ]);
        Dish::create([
            'dish_nr' => '54',
            'dish_type_id' => 5,
            'name' => 'Mihoen met garnalen',
            'price' => 15.30
        ]);
        Dish::create([
            'dish_nr' => '55',
            'dish_type_id' => 5,
            'name' => 'Mihoen Singapore-style',
            'price' => 11.90,
            'description' => 'met kleine garnaaltjes en Chia Sieuw-vlees en kerrie poeder'
        ]);
        Dish::create([
            'dish_nr' => '56',
            'dish_type_id' => 5,
            'name' => 'Mihoen met Cha Sieuw vlees',
            'price' => 11.20
        ]);

        // CHINESE BAMI GERECHTEN
        Dish::create([
            'dish_nr' => '57',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami Ling Fa',
            'price' => 16.90,
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        Dish::create([
            'dish_nr' => '58',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami met varkensvlees',
            'price' => 10.10
        ]);
        Dish::create([
            'dish_nr' => '58A',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami met kipfilet',
            'price' => 11.20
        ]);
        Dish::create([
            'dish_nr' => '58B',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami met Cha Sieuw vlees',
            'price' => 12.20
        ]);
        Dish::create([
            'dish_nr' => '58C',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami met garnalen',
            'price' => 15.80
        ]);
        Dish::create([
            'dish_nr' => '58D',
            'dish_type_id' => 6,
            'name' => 'Chinese Bami met ossenhaas',
            'price' => 17.40
        ]);

        // INDISCHE GERECHTEN
        Dish::create([
            'dish_nr' => 'M1',
            'dish_type_id' => 7,
            'name' => 'Bami of Nasi Rames Ling Fa',
            'price' => 16.90,
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        Dish::create([
            'dish_nr' => 'M2',
            'dish_type_id' => 7,
            'name' => 'Bami of Nasi Rames',
            'price' => 8.80
        ]);
        Dish::create([
            'dish_nr' => 'M3',
            'dish_type_id' => 7,
            'name' => 'Bami of Nasi Rames speciaal',
            'price' => 10.80
        ]);
        Dish::create([
            'dish_nr' => 'M4',
            'dish_type_id' => 7,
            'name' => 'Gado Gado',
            'price' => 7.60,
            'description' => 'met witte rijst'
        ]);
        Dish::create([
            'dish_nr' => 'M5',
            'dish_type_id' => 7,
            'name' => 'Daging Smoor',
            'price' => 13.30,
            'description' => 'met witte rijst'
        ]);
        Dish::create([
            'dish_nr' => 'M6',
            'dish_type_id' => 7,
            'name' => 'Daging Roedjak',
            'price' => 13.30,
            'description' => 'met witte rijst'
        ]);

        // EIERGERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '130',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai',
            'price' => 8.00
        ]);
        Dish::create([
            'dish_nr' => '59',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai Ling Fa',
            'price' => 16.40,
            'description' => 'ossenhaas, garnalen en kipfilet'
        ]);
        Dish::create([
            'dish_nr' => '60',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met varkensvlees',
            'price' => 8.80
        ]);
        Dish::create([
            'dish_nr' => '61',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met kipfilet',
            'price' => 9.20
        ]);
        Dish::create([
            'dish_nr' => '62',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met garnalen',
            'price' => 15.30
        ]);
        Dish::create([
            'dish_nr' => '63',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met krab',
            'price' => 15.30
        ]);
        Dish::create([
            'dish_nr' => '63A',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met Cha Sieuw vlees',
            'price' => 11.20
        ]);
        Dish::create([
            'dish_nr' => '63B',
            'dish_type_id' => 8,
            'name' => 'Foe Yong Hai met ossenhaas',
            'price' => 16.40
        ]);

        // GROENTEN GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '131',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy',
            'price' => 8.00
        ]);
        Dish::create([
            'dish_nr' => '64',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy Ling Fa',
            'price' => 16.40,
            'description' => 'Foe Yong Hai, Babi Pangang, saté en kippenpootje'
        ]);
        Dish::create([
            'dish_nr' => '65',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy met varkensvlees',
            'price' => 8.80
        ]);
        Dish::create([
            'dish_nr' => '66',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy met kipfilet',
            'price' => 9.20
        ]);
        Dish::create([
            'dish_nr' => '67',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy met ossenhaas',
            'price' => 16.40
        ]);
        Dish::create([
            'dish_nr' => '68',
            'dish_type_id' => 9,
            'name' => 'Tjap Tjoy met garnalen',
            'price' => 15.30
        ]);

        // VLEES GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '70',
            'dish_type_id' => 10,
            'name' => 'Babi Pangang',
            'price' => 12.20
        ]);
        Dish::create([
            'dish_nr' => '71',
            'dish_type_id' => 10,
            'name' => 'Babi Pangang in ketjapsaus',
            'price' => 12.30
        ]);
        Dish::create([
            'dish_nr' => '72',
            'dish_type_id' => 10,
            'name' => 'Cha Sieuw',
            'price' => 13.30,
            'description' => 'rood geroosterd varkensvlees'
        ]);
        Dish::create([
            'dish_nr' => '73',
            'dish_type_id' => 10,
            'name' => 'Cha Sieuw in pikante saus',
            'price' => 13.80,
            'spice_level' => 2
        ]);
        Dish::create([
            'dish_nr' => '74',
            'dish_type_id' => 10,
            'name' => 'Geroosterde Speenvarken',
            'price' => 13.80
        ]);
        Dish::create([
            'dish_nr' => '75',
            'dish_type_id' => 10,
            'name' => 'Koe Loe Yuk',
            'price' => 11.90,
            'description' => 'bolletjes vlees met zoetzure saus'
        ]);
        Dish::create([
            'dish_nr' => '76',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met kerriesaus',
            'price' => 11.90
        ]);
        Dish::create([
            'dish_nr' => '77',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met ketjapsaus',
            'price' => 11.90
        ]);
        Dish::create([
            'dish_nr' => '78',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met tomatensaus',
            'price' => 11.90
        ]);
        Dish::create([
            'dish_nr' => '78A',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met champignons in knoflooksaus',
            'price' => 12.20
        ]);
        Dish::create([
            'dish_nr' => '78B',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met Chinese champignons',
            'price' => 12.20
        ]);
        Dish::create([
            'dish_nr' => '79',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met zwarte bonensaus',
            'price' => 12.20
        ]);
        Dish::create([
            'dish_nr' => '79A',
            'dish_type_id' => 10,
            'name' => 'Varkenshaas met verse ananas in zoetzure saus',
            'price' => 13.30
        ]);
        Dish::create([
            'dish_nr' => '79B',
            'dish_type_id' => 10,
            'name' => 'Yu Sian Yuk',
            'price' => 13.30,
            'spice_level' => 1,
            'description' => 'varkenshaas met licht zoet pikante kruiden saus'
        ]);
        Dish::create([
            'dish_nr' => '79C',
            'dish_type_id' => 10,
            'name' => 'Sze Chuan Yuk',
            'price' => 13.30,
            'spice_level' => 3,
            'description' => 'varkenshaas met pittige kruiden saus'
        ]);

        // KIPGERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '80',
            'dish_type_id' => 11,
            'name' => 'Ajam Pangang',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '81',
            'dish_type_id' => 11,
            'name' => 'Ajam Pangang in ketjapsaus',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '82',
            'dish_type_id' => 11,
            'name' => 'Koe Loe Kai',
            'price' => 13.00,
            'description' => 'bolletjes kip met zoetzure saus'
        ]);
        Dish::create([
            'dish_nr' => '83',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met kerriesaus',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '84',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met champignons in knoflooksaus',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '85',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met tomatensaus',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '86',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met ketjapsaus',
            'price' => 13.00
        ]);
        Dish::create([
            'dish_nr' => '87',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met broccoli in knoflooksaus',
            'price' => 13.30
        ]);
        Dish::create([
            'dish_nr' => '88',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met Chinese Champignons',
            'price' => 13.30
        ]);
        Dish::create([
            'dish_nr' => '89',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met zwarte bonensaus',
            'price' => 13.30
        ]);
        Dish::create([
            'dish_nr' => '90',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met verse ananas in zoetzure saus',
            'price' => 13.30
        ]);
        Dish::create([
            'dish_nr' => '91',
            'dish_type_id' => 11,
            'name' => 'Kipfilet met zwarte pepersaus',
            'price' => 13.30,
            'spice_level' => 1
        ]);
        Dish::create([
            'dish_nr' => '92',
            'dish_type_id' => 11,
            'name' => 'Tjieuw Yem Kai',
            'price' => 13.30,
            'description' => 'licht gebraden kipfilet met zout en peper'
        ]);
        Dish::create([
            'dish_nr' => '93',
            'dish_type_id' => 11,
            'name' => 'Yao Koe Kai',
            'price' => 13.30,
            'spice_level' => 1,
            'description' => 'kipfilet met cashewnoten in licht pikante saus'
        ]);
        Dish::create([
            'dish_nr' => '94',
            'dish_type_id' => 11,
            'name' => 'Lychee Kai',
            'price' => 13.80,
            'description' => 'licht gebraden kipfilet met lychee in zoetzure saus'
        ]);
        Dish::create([
            'dish_nr' => '95',
            'dish_type_id' => 11,
            'name' => 'Yu Sian Kai',
            'price' => 13.30,
            'spice_level' => 1,
            'description' => 'kipfilet met licht zoet pikante kruidensaus'
        ]);
        Dish::create([
            'dish_nr' => '96',
            'dish_type_id' => 11,
            'name' => 'Sze Chuan Kai',
            'price' => 13.80,
            'spice_level' => 3,
            'description' => 'kipfilet met pittige kruidensaus'
        ]);
        Dish::create([
            'dish_nr' => '97',
            'dish_type_id' => 11,
            'name' => 'Kung Bao Kai',
            'price' => 13.80,
            'spice_level' => 2,
            'description' => 'kipfilet met cashewnoten in pittige saus'
        ]);

        // GARNALEN GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '132',
            'dish_type_id' => 12,
            'name' => 'Garnalen met gebakken knoflook',
            'price' => 15.90
        ]);
        Dish::create([
            'dish_nr' => '98',
            'dish_type_id' => 12,
            'name' => 'Garnalen met champignons in knoflooksaus',
            'price' => 15.90
        ]);
        Dish::create([
            'dish_nr' => '99',
            'dish_type_id' => 12,
            'name' => 'Garnalen met tomatensaus',
            'price' => 15.90
        ]);
        Dish::create([
            'dish_nr' => '100',
            'dish_type_id' => 12,
            'name' => 'Garnalen met ketjapsaus',
            'price' => 15.90
        ]);
        Dish::create([
            'dish_nr' => '101',
            'dish_type_id' => 12,
            'name' => 'Garnalen met broccoli',
            'price' => 16.10
        ]);
        Dish::create([
            'dish_nr' => '102',
            'dish_type_id' => 12,
            'name' => 'Garnalen met Chinese champignons',
            'price' => 16.10
        ]);
        Dish::create([
            'dish_nr' => '103',
            'dish_type_id' => 12,
            'name' => 'Garnalen met kerriesaus',
            'price' => 16.10
        ]);
        Dish::create([
            'dish_nr' => '104',
            'dish_type_id' => 12,
            'name' => 'Garnalen met zwarte bonensaus',
            'price' => 16.10
        ]);
        Dish::create([
            'dish_nr' => '105',
            'dish_type_id' => 12,
            'name' => 'Garnalen met zwarte pepersaus',
            'price' => 16.10,
            'spice_level' => 1
        ]);
        Dish::create([
            'dish_nr' => '106',
            'dish_type_id' => 12,
            'name' => 'Garnalen met chilisaus',
            'price' => 16.10,
            'spice_level' => 1
        ]);
        Dish::create([
            'dish_nr' => '107',
            'dish_type_id' => 12,
            'name' => 'Yu Sian Haa',
            'price' => 16.10,
            'spice_level' => 1,
            'description' => 'garnalen met licht zoet pikante kruidensaus'
        ]);
        Dish::create([
            'dish_nr' => '108',
            'dish_type_id' => 12,
            'name' => 'Tjeuw Yem Haa',
            'price' => 16.10,
            'description' => 'licht gebraden garnalen met zout en peper'
        ]);
        Dish::create([
            'dish_nr' => '109',
            'dish_type_id' => 12,
            'name' => 'Tja Tai Haa',
            'price' => 16.10,
            'description' => 'krokant gebakken garnalen'
        ]);
        Dish::create([
            'dish_nr' => '110',
            'dish_type_id' => 12,
            'name' => 'Sze Chuan Haa',
            'price' => 16.40,
            'spice_level' => 3
        ]);

        // OSSENHAAS GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '111',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met champignons in knoflooksaus',
            'price' => 16.90
        ]);
        Dish::create([
            'dish_nr' => '112',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met tomatensaus',
            'price' => 16.90
        ]);
        Dish::create([
            'dish_nr' => '113',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met ketjapsaus',
            'price' => 16.90
        ]);
        Dish::create([
            'dish_nr' => '114',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met broccoli',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => '115',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met Chinese champignons',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => '116',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met kerriesaus',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => '117',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met zwarte bonensaus',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => '118',
            'dish_type_id' => 13,
            'name' => 'Ossenhaas met zwarte pepersaus',
            'price' => 17.10,
            'spice_level' => 1
        ]);
        Dish::create([
            'dish_nr' => '119',
            'dish_type_id' => 13,
            'name' => 'Yu Sian Ngau Yuk',
            'price' => 17.10,
            'spice_level' => 1,
            'description' => 'ossenhaas met licht zoet pikante kruiden saus'
        ]);
        Dish::create([
            'dish_nr' => '120',
            'dish_type_id' => 13,
            'name' => 'Sze Chuan Ngau Yuk',
            'price' => 17.40,
            'spice_level' => 3,
            'description' => 'ossenhaas met pittige kruiden saus'
        ]);

        // VISSEN GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => '121',
            'dish_type_id' => 14,
            'name' => 'Visfilet met kerriesaus',
            'price' => 14.50
        ]);
        Dish::create([
            'dish_nr' => '122',
            'dish_type_id' => 14,
            'name' => 'Visfilet met oestersaus',
            'price' => 14.50
        ]);
        Dish::create([
            'dish_nr' => '123',
            'dish_type_id' => 14,
            'name' => 'Visfilet met zoetzuresaus',
            'price' => 14.50,
            'description' => 'licht gebraden visfilet met verse ananas in zoetzure saus'
        ]);
        Dish::create([
            'dish_nr' => '124',
            'dish_type_id' => 14,
            'name' => 'Hong Shau Yu',
            'price' => 14.50,
            'spice_level' => 2,
            'description' => 'licht gebraden visfilet in zoete pikante saus'
        ]);
        Dish::create([
            'dish_nr' => '125',
            'dish_type_id' => 14,
            'name' => 'Tjeuw Yem Yu',
            'price' => 15.00,
            'description' => 'licht gebraden visfilet met zout en peper'
        ]);
        Dish::create([
            'dish_nr' => '126',
            'dish_type_id' => 14,
            'name' => 'San Ching Po',
            'price' => 16.10,
            'description' => 'visfilet, garnalen, krab en groenten in knoflooksaus'
        ]);

        // PEKING EEND GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => 'P1',
            'dish_type_id' => 15,
            'name' => 'Geroosterde Peking Eend',
            'price' => 16.60
        ]);
        Dish::create([
            'dish_nr' => 'P2',
            'dish_type_id' => 15,
            'name' => 'Peking Eend met verse ananas in zoetzure saus',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => 'P3',
            'dish_type_id' => 15,
            'name' => 'Peking Eend met Chinese champignons in oestersaus',
            'price' => 17.10
        ]);
        Dish::create([
            'dish_nr' => 'P4',
            'dish_type_id' => 15,
            'name' => 'Yu Sian Sa',
            'price' => 17.10,
            'spice_level' => 1,
            'description' => 'peking eend met licht zoet pikante kruidensaus'
        ]);

        // TIEPAN GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => 'T1',
            'dish_type_id' => 16,
            'name' => 'Tiepan Ling Fa',
            'price' => 17.90,
            'spice_level' => 1,
            'description' => 'garnalen, kipfilet, ossenhaas en groenten in zwarte papersaus'
        ]);
        Dish::create([
            'dish_nr' => 'T2',
            'dish_type_id' => 16,
            'name' => 'Tiepan Kai',
            'price' => 15.30,
            'spice_level' => 2,
            'description' => 'licht gebraden kipfilet en groenten met zoet pikante saus'
        ]);
        Dish::create([
            'dish_nr' => 'T3',
            'dish_type_id' => 16,
            'name' => 'Tiepan San Yuk',
            'price' => 17.10,
            'spice_level' => 2,
            'description' => 'licht gebraden varkenshaas, kipfilet, ossenhaas en groenten met zoet pikante saus'
        ]);
        Dish::create([
            'dish_nr' => 'T4',
            'dish_type_id' => 16,
            'name' => 'Tiepan Haa',
            'price' => 17.40,
            'spice_level' => 2,
            'description' => 'garnalen en groenten met zoet pikante saus'
        ]);
        Dish::create([
            'dish_nr' => 'T5',
            'dish_type_id' => 16,
            'name' => 'Tiepan Ngau Yuk',
            'price' => 19.50,
            'spice_level' => 2,
            'description' => '5st. ossenhaas en groenten met zoet pikante saus'
        ]);
        Dish::create([
            'dish_nr' => 'V4',
            'dish_type_id' => 16,
            'name' => 'Tau Fu Po',
            'price' => 15.30,
            'description' => 'sojakaas, cha sieuw, garnalen en chinese paddenstoelen'
        ]);

        // VEGETARISCHE GERECHTEN (met witte rijst)
        Dish::create([
            'dish_nr' => 'V1',
            'dish_type_id' => 17,
            'name' => 'Vegetarisch Tjap Tjoy',
            'price' => 8.30
        ]);
        Dish::create([
            'dish_nr' => 'V2',
            'dish_type_id' => 17,
            'name' => 'Lo Han Zhai',
            'price' => 11.20,
            'description' => 'sojakaas, Chinese paddenstoelen en groenten in knoflooksaus'
        ]);
        Dish::create([
            'dish_nr' => 'v3',
            'dish_type_id' => 17,
            'name' => 'Vegetarisch Foe Yong Hai',
            'price' => 8.30
        ]);

        // KINDERMENUS
        Dish::create([
            'dish_nr' => 'K1',
            'dish_type_id' => 18,
            'name' => 'Frites, saté (2st.) en ei',
            'price' => 6.50
        ]);
        Dish::create([
            'dish_nr' => 'K2',
            'dish_type_id' => 18,
            'name' => 'Frites, kippootje en ei',
            'price' => 6.50
        ]);
        Dish::create([
            'dish_nr' => 'K3',
            'dish_type_id' => 18,
            'name' => 'Frites, mini loempia (2st.) en ei',
            'price' => 6.50
        ]);
        Dish::create([
            'dish_nr' => 'K4',
            'dish_type_id' => 18,
            'name' => 'Kinder Bami of Nasi met saté (2st.) en ei',
            'price' => 6.50
        ]);

        // RIJSTTAFELS
        Dish::create([
            'dish_nr' => 'R1',
            'dish_type_id' => 19,
            'name' => 'Indische Rijsttafel <i>(voor 1 persoon)</i>',
            'price' => 16.40,
            'description' => 'Gado Gado, Foe Yong Hai, saté, Daging Roedjak, Daging Smoor, Ajam Ketjap, Atjar, Pisang Goreng, Pindas en Cocos'
        ]);
        Dish::create([
            'dish_nr' => 'R2',
            'dish_type_id' => 19,
            'name' => 'Indische Rijsttafel<br />Vanaf 2 personen, per persoon',
            'price' => 15.00,
            'description' => 'Ajam Ketjap, Gado Gado, Daging Smoor, Kroepoek, Daging Roedjak, Foe Yong Hai, Saté, Sambal Goreng boontjes, Sambal Goreng Kering, Atjar, Pisang Goreng, Pinda en Cocos'
        ]);
        Dish::create([
            'dish_nr' => 'R3',
            'dish_type_id' => 19,
            'name' => 'Chinese Indische Rijsttafel<br />Vanaf 4 personen, per persoon',
            'price' => 16.50,
            'description' => 'Foe Yong Hai, Babi Pangang, Tjap Tjoy, Koe Loe Yuk, Ajam Ketjap, Daging Smoor, Daging Roedjak, Saté, Ei, Kroepoek, Sambal Goreng boontjes, Atjar, Pisang Goreng, Pinda en Cocos'
        ]);
        Dish::create([
            'dish_nr' => 'R4',
            'dish_type_id' => 19,
            'name' => 'Chinese Rijsttafel<br />Vanaf 4 personen, per persoon',
            'price' => 17.00,
            'description' => 'Kippen- of Tomatensoep, Tjap Tjoy met kipfilet, Koe Loe Yuk, Gebakken garnalen, Babi Pangang, Foe Yong Hai, saté, Kroepoek'
        ]);
        Dish::create([
            'dish_nr' => 'R5',
            'dish_type_id' => 19,
            'name' => 'Kantonese Rijsttafel<br />Vanaf 2 personen, per persoon',
            'price' => 23.00,
            'description' => 'Wan Tan soep, Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pasteitje), Geroosterd Peking Eend, Lychee Kai (licht gebraden kipfilet met lychee in zoetzure saus), Tau Sie Haa (garnalen met zwarte bonensaus)'
        ]);
        Dish::create([
            'dish_nr' => 'R6',
            'dish_type_id' => 19,
            'name' => 'Sze Chuan Rijsttafel<br />Vanaf 2 personen, per persoon',
            'price' => 23.00,
            'spice_level' => 3,
            'description' => 'Peking Soep (pittige lichtzure soep), Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pasteitje), Tjieuw Yem Kai (licht gebraden kipfilet met zout en peper), Lychee Yuk (licht gebraden varkensvlees met lychee in zoetzure saus), Yu Sian Ngau Yuk (ossenhaas met licht zoet pikante kruiden saus)',
        ]);

        // BUFFET
        Dish::create([
            'dish_type_id' => 20,
            'name' => 'MENU A<br />Vanaf 15 personen, per persoon',
            'price' => 12.80,
            'description' => "Mini Loempia's, Pisang Goreng, Babi Pangang, Koe Loe Yuk, Foe Yong Hai, Kipfilet met zwarte bonensaus, Tjap Tjoy met kipfilet, saté Ajam"
        ]);
        Dish::create([
            'dish_type_id' => 20,
            'name' => 'MENU B<br />Vanaf 15 personen, per persoon',
            'price' => 15.00,
            'description' => "Mini Loempia's, Pisang Goreng, Babi Pangang, Foe Yong Hai, Kung Bao Kai, Hong Shau Yu, saté Ajam, Ossenhaas met zwarte bonensaus, Kipfilet met kerriesaus"
        ]);

        // DIVERSEN
        Dish::create([
            'dish_type_id' => 21,
            'name' => 'Bami of Nasi Goreng i.p.v. rijst',
            'price' => 0.90
        ]);
        Dish::create([
            'dish_type_id' => 21,
            'name' => 'Mihoen Goreng i.p.v. rijst',
            'price' => 2.50
        ]);
        Dish::create([
            'dish_type_id' => 21,
            'name' => 'Chinese Bami i.p.v. rijst',
            'price' => 2.50
        ]);
    }
}

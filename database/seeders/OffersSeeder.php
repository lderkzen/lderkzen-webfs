<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    public function run()
    {
        $offer = Offer::create([
            'title' => 'Speciale Studentenaanbieding',
            'name' => 'Chinese Rijsttafel (2 personen)',
            'description' => 'Maak een keuze uit 3 van onderstaande keuzegerechten:',
            'extra_info' => 'Met witte rijst. (Nasi of bami voor meerprijs mogelijk.)',
            'price' => 21.00
        ]);

        $offer->dishes()->attach([92, 73, 81, 87, 120, 111]);
    }
}

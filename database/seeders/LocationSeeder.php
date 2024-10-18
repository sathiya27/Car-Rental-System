<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
           'locationName'=> 'KLIA2',
           'isAvailable'=> true,
           'locationAddress'=> 'Terminal klia2, KL International Airport Jalan klia 
                        2/1 64000 KLIA, Sepang
                        Selangor Darul Ehsan, Malaysia'
        ]);

        Location::create([
            'locationName'=> 'Subang Skyport Airport',
           'isAvailable'=> true,
           'locationAddress'=> 'M17, Sultan Abdul Aziz Shah Airport, Terminal, 
                        Lapangan Terbang Sultan Abdul Aziz Shah, 47200 Subang,
                        Selangor'
        ]);

        Location::create([
            'locationName'=> 'Pavilion Bukit jalil',
           'isAvailable'=> true,
           'locationAddress'=> 'Persiaran Jalil 8, Bukit Jalil, 57000 Kuala Lumpur,
                        Wilayah Persekutuan Kuala Lumpur'
        ]);

        Location::create([
            'locationName'=> 'Sunway Pyramid',
           'isAvailable'=> true,
           'locationAddress'=> '3, Jalan PJS 11/15, Bandar Sunway, 47500 Petaling Jaya,
                        Selangor'
        ]);

        Location::create([
            'locationName'=> 'Midvalley',
           'isAvailable'=> true,
           'locationAddress'=> 'Lingkaran Syed Putra, Mid Valley City, 59200 Kuala Lumpur, 
                        Wilayah Persekutuan Kuala Lumpur'
        ]);
    }
}

<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Pangkat extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {

        $createMultiple = [
            ['name' => 'Pengatur Muda, II/a','asn_type' => 'PNS'],
            ['name' => 'Pengatur Muda Tk. I, II/b','asn_type' => 'PNS'],
            ['name' => 'Pengatur, II/c','asn_type' => 'PNS'],
            ['name' => 'Pengatur Tk. I, II/d','asn_type' => 'PNS'],
            ['name' => 'Penata Muda, III/a','asn_type' => 'PNS'],
            ['name' => 'Penata Muda Tk. I, III/b','asn_type' => 'PNS'],
            ['name' => 'Penata, III/c','asn_type' => 'PNS'],
            ['name' => 'Penata Tk. I, III/d','asn_type' => 'PNS'],
            ['name' => 'Pembina, IV/a','asn_type' => 'PNS'],
            ['name' => 'Pembina Tk. I, IV/b','asn_type' => 'PNS'],
            ['name' => 'Pembina Utama Muda, IV/c','asn_type' => 'PNS'],
            ['name' => 'Pembina Utama Madya, IV/d','asn_type' => 'PNS'],
            ['name' => 'Pembina Utama, IV/e','asn_type' => 'PNS'],
            ['name' => 'V','asn_type' => 'PPPK'],
            ['name' => 'VI','asn_type' => 'PPPK'],
            ['name' => 'VII','asn_type' => 'PPPK'],
            ['name' => 'VIII','asn_type' => 'PPPK'],
            ['name' => 'IX','asn_type' => 'PPPK'],
            ['name' => 'X','asn_type' => 'PPPK'],
            ['name' => 'XI','asn_type' => 'PPPK'],
            ['name' => 'XII','asn_type' => 'PPPK'],
            ['name' => 'XIII','asn_type' => 'PPPK'],
            ['name' => 'XIV','asn_type' => 'PPPK'],
            ['name' => 'XV','asn_type' => 'PPPK'],
            ['name' => 'XVI','asn_type' => 'PPPK'],
        ];
            
        DB::table('pangkats')->insert($createMultiple);
    }
}


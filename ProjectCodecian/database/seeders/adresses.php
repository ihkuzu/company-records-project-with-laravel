<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class adresses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('adresses')->insert([
        'comp_id'=>"1",
        'adress'=>"Söğütözü, 2177. Sk. No:10 D:B80, D:aire No: 32, 06510 Çankaya/Ankara​​",
        'long'=>"41.11231",
        'lat'=>"28.234234", ]);

        DB::table('adresses')->insert([
          'comp_id'=>"2",
          'adress'=>"P.K. 1, 06200, Yenimahalle / Ankara, Türkiye",
          'long'=>"40.13453",
          'lat'=>"28.23423", ]);

          DB::table('adresses')->insert([
            'comp_id'=>"3",
            'adress'=>"Nisbetiye, Aydın Sokağı No:7, 34340 Beşiktaş/İstanbul",
            'long'=>"42.234234",
            'lat'=>"28.345345", ]);
    }
}

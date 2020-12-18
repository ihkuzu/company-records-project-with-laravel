<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
          'companyname'=>"Codecian",
          'html'=>"www.codecian.com",
        ]);
        DB::table('companies')->insert([
          'companyname'=>"Aselsan",
          'html'=>"www.aselsan.com",
        ]);
        DB::table('companies')->insert([
          'companyname'=>"Microsoft",
          'html'=>"www.microsoft.com",
        ]);
    }
}

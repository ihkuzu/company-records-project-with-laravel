<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('staff')->insert([
        'comp_id'=>"1",
        'name'=>"Ahmet",
        'lastname'=>"Yazıcı",
        'title'=>"Muhasebe",
        'email'=>"ahmetyazici@hotmail.com",
        'phonenumber'=>"0531 231 89 42", ]);
        DB::table('staff')->insert([
        'comp_id'=>"1",
        'name'=>"Ayşe",
        'lastname'=>"Yılmaz",
        'title'=>"Sekreter",
        'email'=>"ayseyilmaz@gmail.com",
        'phonenumber'=>"0537 872 82 47", ]);
        DB::table('staff')->insert([
        'comp_id'=>"2",
        'name'=>"Melis",
        'lastname'=>"Bakan",
        'title'=>"Yönetici",
        'email'=>"melisb@gmail.com",
        'phonenumber'=>"0554 345 67 43", ]);
        DB::table('staff')->insert([
        'comp_id'=>"2",
        'name'=>"Mehmet",
        'lastname'=>"Dönmez",
        'title'=>"Aşçı",
        'email'=>"mehmetd@gmail.com",
        'phonenumber'=>"0537 872 82 47", ]);
        DB::table('staff')->insert([
        'comp_id'=>"3",
        'name'=>"Ali",
        'lastname'=>"Demirer",
        'title'=>"Şoför",
        'email'=>"alidemirer@gmail.com",
        'phonenumber'=>"0545 566 32 65", ]);
        DB::table('staff')->insert([
        'comp_id'=>"3",
        'name'=>"Selin",
        'lastname'=>"Gören",
        'title'=>"Sekreter",
        'email'=>"selingoren@gmail.com",
        'phonenumber'=>"0537 872 82 47",
      ]);
    }
}

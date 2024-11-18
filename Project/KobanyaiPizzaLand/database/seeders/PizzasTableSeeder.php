<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            ['id' => 1, 'nev' => 'BBQ', 'ar' => 2900, 'feltet' => 'Csirke, BBQ szósz, Hagyma, Sajt'],
            ['id' => 2, 'nev' => 'Bismark', 'ar' => 2500, 'feltet' => 'Tojás, Sajt, Sonka'],
            ['id' => 3, 'nev' => 'Bolognese', 'ar' => 2700, 'feltet' => 'Bolognai ragu, Sajt'],
            ['id' => 4, 'nev' => 'Capricciosa', 'ar' => 2600, 'feltet' => 'Sonka, Gomba, Olajbogyó, Sajt'],
            ['id' => 5, 'nev' => 'Cardinale', 'ar' => 2400, 'feltet' => 'Sonka, Kukorica, Sajt'],
            ['id' => 6, 'nev' => 'Cheese', 'ar' => 2700, 'feltet' => 'Gorgonzola, Parmezán, Ementáli'],
            ['id' => 7, 'nev' => 'Diavola', 'ar' => 2500, 'feltet' => 'Csípős kolbász, Sajt'],
            ['id' => 8, 'nev' => 'Funghi', 'ar' => 2200, 'feltet' => 'Gomba, Sajt'],
            ['id' => 9, 'nev' => 'Greek', 'ar' => 2800, 'feltet' => 'Feta sajt, Paradicsom, Csirke'],
            ['id' => 10, 'nev' => 'Hawaii', 'ar' => 2300, 'feltet' => 'Sonka, Ananász, Sajt'],
            ['id' => 11, 'nev' => 'Hot', 'ar' => 2900, 'feltet' => 'BBQ szósz, Bacon, Sajt, Paprika'],
            ['id' => 12, 'nev' => 'Húsimádó', 'ar' => 3000, 'feltet' => 'Sonka, Szalámi, Kolbász, Sajt'],
            ['id' => 13, 'nev' => 'Margherita', 'ar' => 2000, 'feltet' => 'Paradicsom, Sajt'],
            ['id' => 14, 'nev' => 'Mexicana', 'ar' => 2600, 'feltet' => 'Csípős kolbász, Bab, Hagyma'],
            ['id' => 15, 'nev' => 'Pepperoni', 'ar' => 2200, 'feltet' => 'Pepperoni, Sajt'],
            ['id' => 16, 'nev' => 'Prosciutto', 'ar' => 2200, 'feltet' => 'Sonka, Sajt'],
            ['id' => 17, 'nev' => 'Siciliana', 'ar' => 2800, 'feltet' => 'Szardella, Sajt'],
            ['id' => 18, 'nev' => 'Tenger gyümölcse', 'ar' => 3100, 'feltet' => 'Tenger gyümölcsei, Sajt'],
            ['id' => 19, 'nev' => 'Kalifornia', 'ar' => 2500, 'feltet' => 'Paprika, Sajt, Sonka'],
            ['id' => 20, 'nev' => 'Vegetarian', 'ar' => 2200, 'feltet' => 'Paprika, Hagyma, Paradicsom'],
        ]);
    }
}

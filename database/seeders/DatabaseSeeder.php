<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

        DB::table('categories')->insert([
            'name' => 'buty'
        ]);

        DB::table('categories')->insert([
            'name' => 'kurtki'
        ]);

        DB::table('categories')->insert([
            'name' => 'płaszcze'
        ]);

        DB::table('categories')->insert([
            'name' => 'sukienki'
        ]);

        for($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'categoryId' => $i % 4,
                'name' => 'adidas XR ' . $i,
                'price' => '10'.$i.'.99'
            ]);
        }
    }
}

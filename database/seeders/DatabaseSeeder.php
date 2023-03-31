<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Moderator'
        ]);

        DB::table('roles')->insert([
            'name' => 'User'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'roleId' => '1',
        ]);

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

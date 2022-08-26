<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('items')->insert([

            ['name' => 'pepperoni-pizza', 'price' => 449.99, 'desc' => 'Pepperoni pizza'],
            
            ['name' => 'cheeze-pizza', 'price' => 249.99, 'desc' => 'cheeze pizza'],
            
            ['name' => 'mushroom-pizza', 'price' => 299.99, 'desc' => 'cheeze pizza with mushrooms'],
            
            ['name' => 'pineaplle-pizza', 'price' => 299.99, 'desc' => 'many think this is an abomination. cheeze pizza with pineapples on it'],
            
            ['name' => 'coke', 'price' => 49.99, 'desc' => 'can of coke'],
            
            ['name' => 'sprite', 'price' => 49.99, 'desc' => 'can of sprite']
            
        ]);

        DB::table('usersb')->insert([

            'name' => 'testuser',
            'pass' => Hash::make('a-hashed-password')
            
        ]);

    }
}

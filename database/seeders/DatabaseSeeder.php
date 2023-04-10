<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Nabin',
            'email' => 'nabin@gmail.com',
            'password' => Hash::make('$nabin@gmail.com'),
            ],
        [
            'name' => 'Developer Zone',
            'email' => 'manmohan@gmail.com',
            'password' => Hash::make('$manmohan@gmail.com'),
            
        ]


        ]);

        $this->call([
            CourseCategorySeeder::class,
        ]);
        
}

            



}

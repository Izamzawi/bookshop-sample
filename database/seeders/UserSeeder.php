<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [                
                'name' => 'Zamza Idham',
                'email' => 'zamza@idham.com',
                'password' => Hash::make('kompor13')
            ],
            [                
                'name' => 'Putra Pradana',
                'email' => 'rpp@gmail.com',
                'password' => Hash::make('kompor16')
            ],
        ]);
    }
}

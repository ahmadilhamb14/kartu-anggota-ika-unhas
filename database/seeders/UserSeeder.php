<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'ellajalah',
            'email' => 'ellgantengg@gmail.com',
            'phonenumber' => '089519623835',
            'password' => Hash::make('ellganteng')
        ]);

        DB::table('users')->insert([
            'username' => 'ilham',
            'email' => 'ilhamdg@gmail.com',
            'phonenumber' => '08990909090',
            'password' => Hash::make('ilhamskom')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table ('users')->insert([
            'name' => 'tushar',
            'email' => 'tusharanand303@gmail.com',
            'password' => Hash::make('tushar@123'),
        ]);
    }
}

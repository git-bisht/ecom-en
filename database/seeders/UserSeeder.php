<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Harbhajan Singh',
            'email'=>'Harbhajan@gmail.com',
            'password'=>Hash::make('123456')
        ]);
    }
}

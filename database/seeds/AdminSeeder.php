<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
            'name' => 'Shakibul Islam',
            'email' => 'shakibuli08@gmail.com',
             'emplayeeId' => '163351792',
            'password' => Hash::make('bangladesh'),

            'name' => 'Shakib',
            'email' => 'shakibuli082@gmail.com',
             'emplayeeId' => '163351792',
            'password' => Hash::make('bangladesh1971'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Zizan',
            'email' => 'zizan@email.com',
            'password' => 'qazwsx123',
            'role'=> 'ppd',
        ]);

        DB::table('users')->insert([
            'name' => 'johan',
            'email' => 'johan@email.com',
            'password' => 'qazwsx123',
            'role'=> 'lp',
        ]);

    }
}

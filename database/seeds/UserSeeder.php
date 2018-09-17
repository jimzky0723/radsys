<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level' => 'admin',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'username' => 'doctor',
            'password' => bcrypt('doctor'),
            'level' => 'doctor',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'username' => 'hospital',
            'password' => bcrypt('hospital'),
            'level' => 'hospital',
            'status' => '1'
        ]);
    }
}

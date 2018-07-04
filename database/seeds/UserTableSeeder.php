<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adel',
            'email' => 'fanasolo@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('123456'),
        ]);
    
    }
}

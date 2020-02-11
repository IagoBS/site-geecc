<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'daniel',
            'email' => 'geequinho@gmail.com',
            'password' => bcrypt('iago123')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'avatar' => 'aaaaaaaaaaa.png',
            'about' => 'Sou eu sou eu',
            'facebook' => 'iagobastos',
            'twiiter' => 'iagobastos',
            'instagram' => 'iagobastos100'
        ]);
    }
}

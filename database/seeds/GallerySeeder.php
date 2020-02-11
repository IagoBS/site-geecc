<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'news_id' => 7,
            'photo' => 'meu nome é eu que sei'
        ]);
    }
}

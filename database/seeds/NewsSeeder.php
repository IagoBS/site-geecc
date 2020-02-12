<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('news')->insert([
        'user_id' => 1,
        'category_id' => 1,
        'title' => 'titulo da chave',
        'content' => 'diawndiwnad'
    ]);
    }
}

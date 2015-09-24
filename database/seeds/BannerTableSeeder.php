<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('banners')->insert(['title' => 'Imprime tus momentos','image' => 'momentos.gif','published' => '1','uri' => 'uri','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
    }
}

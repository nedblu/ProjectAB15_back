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
		DB::table('banners')->insert(['title' => 'Oferta Impresoras','image' => 'no.png','published' => '1','uri' => 'uri','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('banners')->insert(['title' => 'Oferta Tintas','image' => 'no.png','published' => '1','uri' => 'uri','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('banners')->insert(['title' => 'Bienvenida','image' => 'no.png','published' => '1','uri' => 'uri','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('banners')->insert(['title' => 'Rocket','image' => 'no.png','published' => '0','uri' => 'uri','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
    }
}

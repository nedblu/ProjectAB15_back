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
		DB::table('banners')->insert(['title' => 'Imprime tus momentos','image' => 'momentos.gif','published' => '1','uri' => 'uri','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
    }
}

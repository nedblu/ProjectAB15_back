<?php

use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('offers')->insert(['title' => 'Descuento Impresoras','description' => 'Descuento Impresoras','discount' => '15','code' => 'IMPDESC','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('offers')->insert(['title' => 'Verano loco','description' => 'Verano loco','discount' => '65','code' => 'VERLOC','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('offers')->insert(['title' => 'Navidad en Tintas','description' => 'Navidad en Tintas','discount' => '30','code' => 'NAVTIN','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
		DB::table('offers')->insert(['title' => 'Febrero de viniles','description' => 'Febrero de viniles','discount' => '70','code' => 'FEBVIN','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => '0000-00-00 00:00:00']);
    }
}

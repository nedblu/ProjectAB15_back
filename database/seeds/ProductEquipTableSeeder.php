<?php

use Illuminate\Database\Seeder;

class ProductEquipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('product_equips')->insert(['product_id' => '1','equip_ar' => 'L800,L1800','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '2','equip_ar' => '3880,3800','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '3','equip_ar' => 'GS6000','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '4','equip_ar' => 'T3070,T5070,T7070','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '5','equip_ar' => 'F6070,F7170','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '6','equip_ar' => 'F2000','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '7','equip_ar' => 'R2400','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '8','equip_ar' => '4900','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '9','equip_ar' => '7800,9800,7880,9880','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '10','equip_ar' => '4800,4880','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '11','equip_ar' => 'R270,R290','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '13','equip_ar' => '9600,4400,4000','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('product_equips')->insert(['product_id' => '14','equip_ar' => 'S30670','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}

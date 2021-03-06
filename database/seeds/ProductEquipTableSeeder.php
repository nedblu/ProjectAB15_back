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
		DB::table('product_equips')->insert(['product_id' => '35','equip_ar' => 'L800,L1800','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '36','equip_ar' => '3880,3800','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '37','equip_ar' => 'GS6000','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '38','equip_ar' => 'T3070,T5070,T7070','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '39','equip_ar' => 'F6070,F7170','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '40','equip_ar' => 'F2000','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '41','equip_ar' => 'R2400','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '42','equip_ar' => '4900','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '43','equip_ar' => '7800,9800,7880,9880','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '44','equip_ar' => '4800,4880','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '45','equip_ar' => 'R270,R290','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '46','equip_ar' => '9600,4400,4000','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_equips')->insert(['product_id' => '47','equip_ar' => 'S30670','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

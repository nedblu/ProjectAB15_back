<?php

use Illuminate\Database\Seeder;

class ProductInkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('product_inks')->insert(['product_id' => '1','inks_ar' => 'Epson UltraChrome DS (sublimación)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '2','inks_ar' => 'Epson UltraChrome DS (sublimación)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '3','inks_ar' => 'Epson UltraChrome DG ( Impresión directa)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '4','inks_ar' => 'Epson UltraChrome GS2 (Eco-solvente)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '5','inks_ar' => 'Epson UltraChrome GS2 (Eco-solvente)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '6','inks_ar' => 'Epson UltraChrome GS2x (Eco-solvente)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '7','inks_ar' => 'Epson UltraChrome XD (Base agua)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '8','inks_ar' => 'Epson UltraChrome XD (Base agua)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '9','inks_ar' => 'Epson UltraChrome XD (Base agua)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '10','inks_ar' => 'Epson UltraChrome XD (Base agua)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '11','inks_ar' => 'Epson UltraChrome XD (Base agua)','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '13','inks_ar' => 'Epson Inagotable','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '14','inks_ar' => 'Epson tinta Inagotable','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '15','inks_ar' => 'Epson UltraChrome K3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '16','inks_ar' => 'Epson UltraChrome HDR Ink','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '17','inks_ar' => 'Epson UltraChrome K3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '18','inks_ar' => 'Epson UltraChrome HDR Ink','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '19','inks_ar' => 'Epson UltraChrome K3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '20','inks_ar' => 'Epson UltraChrome HDR Ink','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '21','inks_ar' => 'Toner OKI','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('product_inks')->insert(['product_id' => '22','inks_ar' => 'Toner OKI','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

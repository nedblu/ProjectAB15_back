<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('products')->insert(['name' => 'Epson SureColor F6070','image' => null,'description_id' => '1','category_id' => '4','parent_id' => '10','sku' => 'AR13256','offer_id' => '2','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor F7170','image' => null,'description_id' => '2','category_id' => '4','parent_id' => '10','sku' => 'AR13257','offer_id' => '2','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor F2000','image' => null,'description_id' => '3','category_id' => '4','parent_id' => '12','sku' => 'AR13258','offer_id' => '1','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor S30670','image' => null,'description_id' => '4','category_id' => '4','parent_id' => '11','sku' => 'AR13259','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor S50670','image' => null,'description_id' => '5','category_id' => '4','parent_id' => '11','sku' => 'AR13260','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor S70670','image' => null,'description_id' => '6','category_id' => '4','parent_id' => '11','sku' => 'AR13261','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor T3270','image' => null,'description_id' => '7','category_id' => '4','parent_id' => '15','sku' => 'AR13262','offer_id' => '1','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor T5270','image' => null,'description_id' => '8','category_id' => '4','parent_id' => '15','sku' => 'AR13263','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor T7270','image' => null,'description_id' => '9','category_id' => '4','parent_id' => '15','sku' => 'AR13264','offer_id' => '1','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor T5270D','image' => null,'description_id' => '10','category_id' => '4','parent_id' => '15','sku' => 'AR13265','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson SureColor T7270D','image' => null,'description_id' => '11','category_id' => '4','parent_id' => '15','sku' => 'AR13266','offer_id' => '3','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson escáner multifuncional','image' => null,'description_id' => '12','category_id' => '4','parent_id' => '15','sku' => 'AR13267','offer_id' => '3','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Eco-Tank L800','image' => null,'description_id' => '13','category_id' => '4','parent_id' => '14','sku' => 'AR13268','offer_id' => '3','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Eco-Tank L1800','image' => null,'description_id' => '14','category_id' => '4','parent_id' => '14','sku' => 'AR13269','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 3880','image' => null,'description_id' => '15','category_id' => '4','parent_id' => '14','sku' => 'AR13270','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 4900','image' => null,'description_id' => '16','category_id' => '4','parent_id' => '14','sku' => 'AR13271','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 7890','image' => null,'description_id' => '17','category_id' => '4','parent_id' => '14','sku' => 'AR13272','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 7900','image' => null,'description_id' => '18','category_id' => '4','parent_id' => '14','sku' => 'AR13273','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 9890','image' => null,'description_id' => '19','category_id' => '4','parent_id' => '14','sku' => 'AR13274','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Stylus Pro 9900','image' => null,'description_id' => '20','category_id' => '4','parent_id' => '14','sku' => 'AR13275','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'OKI C941dn','image' => null,'description_id' => '21','category_id' => '4','parent_id' => '13','sku' => 'AR13276','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'OKI C911dn','image' => null,'description_id' => '22','category_id' => '4','parent_id' => '13','sku' => 'AR13277','offer_id' => '0','stock' => '1','colors' => '1','ink' => '1','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Sublimadora digital combo 8 en 1','image' => null,'description_id' => '23','category_id' => '5','parent_id' => '5','sku' => 'AR13278','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Plancha SENKO','image' => null,'description_id' => '24','category_id' => '5','parent_id' => '5','sku' => 'AR13279','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Plancha Doble cama','image' => null,'description_id' => '25','category_id' => '5','parent_id' => '5','sku' => 'AR13280','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'EasyWeed','image' => null,'description_id' => '26','category_id' => '6','parent_id' => '6','sku' => 'AR13281','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'EasyWeed Extra','image' => null,'description_id' => '27','category_id' => '6','parent_id' => '6','sku' => 'AR13282','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'EasyWeed Strech','image' => null,'description_id' => '28','category_id' => '6','parent_id' => '6','sku' => 'AR13283','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Glitter','image' => null,'description_id' => '29','category_id' => '6','parent_id' => '6','sku' => 'AR13284','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'CADflex','image' => null,'description_id' => '30','category_id' => '6','parent_id' => '6','sku' => 'AR13285','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Color Print PU','image' => null,'description_id' => '31','category_id' => '6','parent_id' => '6','sku' => 'AR13286','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'TTD Eassy','image' => null,'description_id' => '32','category_id' => '6','parent_id' => '6','sku' => 'AR13287','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Strip Flock','image' => null,'description_id' => '33','category_id' => '6','parent_id' => '6','sku' => 'AR13288','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Holographic','image' => null,'description_id' => '34','category_id' => '6','parent_id' => '6','sku' => 'AR13289','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Inagotable','image' => null,'description_id' => '35','category_id' => '7','parent_id' => '7','sku' => 'AR13290','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome K3','image' => null,'description_id' => '36','category_id' => '7','parent_id' => '7','sku' => 'AR13291','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome GS','image' => null,'description_id' => '37','category_id' => '7','parent_id' => '7','sku' => 'AR13292','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome XD','image' => null,'description_id' => '38','category_id' => '7','parent_id' => '7','sku' => 'AR13293','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome DS','image' => null,'description_id' => '39','category_id' => '7','parent_id' => '7','sku' => 'AR13294','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Impresion Directa','image' => null,'description_id' => '40','category_id' => '7','parent_id' => '7','sku' => 'AR13295','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome K3','image' => null,'description_id' => '41','category_id' => '7','parent_id' => '7','sku' => 'AR13296','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome HDR','image' => null,'description_id' => '42','category_id' => '7','parent_id' => '7','sku' => 'AR13297','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome K3','image' => null,'description_id' => '43','category_id' => '7','parent_id' => '7','sku' => 'AR13298','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome K3','image' => null,'description_id' => '44','category_id' => '7','parent_id' => '7','sku' => 'AR13299','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome HD','image' => null,'description_id' => '45','category_id' => '7','parent_id' => '7','sku' => 'AR13300','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome','image' => null,'description_id' => '46','category_id' => '7','parent_id' => '7','sku' => 'AR13301','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'UltraChrome GS2','image' => null,'description_id' => '47','category_id' => '7','parent_id' => '7','sku' => 'AR13302','offer_id' => '0','stock' => '1','colors' => '1','ink' => '0','equipment' => '1','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Satin','image' => null,'description_id' => '48','category_id' => '8','parent_id' => '8','sku' => 'AR13303','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Aperlado','image' => null,'description_id' => '49','category_id' => '8','parent_id' => '8','sku' => 'AR13304','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Aperlado','image' => null,'description_id' => '50','category_id' => '8','parent_id' => '8','sku' => 'AR13305','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Aperlado','image' => null,'description_id' => '51','category_id' => '8','parent_id' => '8','sku' => 'AR13306','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Photo Matte','image' => null,'description_id' => '52','category_id' => '8','parent_id' => '8','sku' => 'AR13307','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Matte 1 cara','image' => null,'description_id' => '53','category_id' => '8','parent_id' => '8','sku' => 'AR13308','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Matte 2 cara','image' => null,'description_id' => '54','category_id' => '8','parent_id' => '8','sku' => 'AR13309','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Matte 2 cara','image' => null,'description_id' => '55','category_id' => '8','parent_id' => '8','sku' => 'AR13310','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson fotográfico luster','image' => null,'description_id' => '56','category_id' => '8','parent_id' => '8','sku' => 'AR13311','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Cold Press Bright','image' => null,'description_id' => '57','category_id' => '8','parent_id' => '8','sku' => 'AR13312','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Hot Press Bright','image' => null,'description_id' => '58','category_id' => '8','parent_id' => '8','sku' => 'AR13313','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Print Pack Matte','image' => null,'description_id' => '59','category_id' => '8','parent_id' => '8','sku' => 'AR13314','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Print Pack Gloss','image' => null,'description_id' => '60','category_id' => '8','parent_id' => '8','sku' => 'AR13315','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Multiproposito','image' => null,'description_id' => '61','category_id' => '9','parent_id' => '16','sku' => 'AR13316','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Adhesivo','image' => null,'description_id' => '62','category_id' => '9','parent_id' => '16','sku' => 'AR13317','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Production','image' => null,'description_id' => '63','category_id' => '9','parent_id' => '16','sku' => 'AR13318','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Transfer','image' => null,'description_id' => '64','category_id' => '9','parent_id' => '16','sku' => 'AR13319','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'AB Adhesivo','image' => null,'description_id' => '65','category_id' => '9','parent_id' => '16','sku' => 'AR13320','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel Poster','image' => null,'description_id' => '66','category_id' => '9','parent_id' => '17','sku' => 'AR13321','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Canvas Glossy','image' => null,'description_id' => '67','category_id' => '9','parent_id' => '17','sku' => 'AR13322','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Fotografico Glossy','image' => null,'description_id' => '68','category_id' => '9','parent_id' => '17','sku' => 'AR13323','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Fotografico Semi Glossy','image' => null,'description_id' => '69','category_id' => '9','parent_id' => '17','sku' => 'AR13324','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Fotografico Matte','image' => null,'description_id' => '70','category_id' => '9','parent_id' => '17','sku' => 'AR13325','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Irrompible','image' => null,'description_id' => '71','category_id' => '9','parent_id' => '17','sku' => 'AR13326','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Banner Glossy','image' => null,'description_id' => '72','category_id' => '9','parent_id' => '17','sku' => 'AR13327','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Backlite Mate','image' => null,'description_id' => '73','category_id' => '9','parent_id' => '17','sku' => 'AR13328','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Canvas','image' => null,'description_id' => '74','category_id' => '9','parent_id' => '17','sku' => 'AR13329','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Placard','image' => null,'description_id' => '75','category_id' => '9','parent_id' => '17','sku' => 'AR13330','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Vinil Matte','image' => null,'description_id' => '76','category_id' => '9','parent_id' => '17','sku' => 'AR13331','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Vinil Glossy','image' => null,'description_id' => '77','category_id' => '9','parent_id' => '17','sku' => 'AR13332','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Vinil Microperforado','image' => null,'description_id' => '78','category_id' => '9','parent_id' => '17','sku' => 'AR13333','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Lona Matte','image' => null,'description_id' => '79','category_id' => '9','parent_id' => '17','sku' => 'AR13334','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Lona Bilboard Respaldo Gris','image' => null,'description_id' => '80','category_id' => '9','parent_id' => '17','sku' => 'AR13335','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Lona Bilboard','image' => null,'description_id' => '81','category_id' => '9','parent_id' => '17','sku' => 'AR13336','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Pelicula Metalica con Adhesivo','image' => null,'description_id' => '82','category_id' => '9','parent_id' => '17','sku' => 'AR13337','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel Premium Glossy','image' => null,'description_id' => '83','category_id' => '9','parent_id' => '18','sku' => 'AR13338','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel Premium semi Matte','image' => null,'description_id' => '84','category_id' => '9','parent_id' => '18','sku' => 'AR13339','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel fotográfico Matte','image' => null,'description_id' => '85','category_id' => '9','parent_id' => '18','sku' => 'AR13340','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel Dobleway Matte','image' => null,'description_id' => '86','category_id' => '9','parent_id' => '18','sku' => 'AR13341','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Papel Satin','image' => null,'description_id' => '87','category_id' => '9','parent_id' => '18','sku' => 'AR13342','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Generico Papel Aperlado','image' => null,'description_id' => '88','category_id' => '9','parent_id' => '18','sku' => 'AR13343','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
		DB::table('products')->insert(['name' => 'Epson Papel Premium Luster','image' => null,'description_id' => '89','category_id' => '9','parent_id' => '18','sku' => 'AR13344','offer_id' => '0','stock' => '1','colors' => '0','ink' => '0','equipment' => '0','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),'deleted_at' => null]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('categories')->insert(['name' => 'Equipos','description' => 'None','slug' => str_slug('Equipos'),'image' => 'no.png','user_id' => '1','parent_id' => '0','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Consumibles','description' => 'None','slug' => str_slug('Consumibles'),'image' => 'no.png','user_id' => '1','parent_id' => '0','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresoras','description' => 'None','slug' => str_slug('Impresoras'),'image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Planchas','description' => 'None','slug' => str_slug('Planchas'),'image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Vinyl','description' => 'None','slug' => str_slug('Vinyl'),'image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Tintas','description' => 'None','slug' => str_slug('Tintas'),'image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Papeles','description' => 'None','slug' => str_slug('Papeles'),'image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Rollos','description' => 'None','slug' => str_slug('Rollos'),'image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Sublimación','description' => 'None','slug' => str_slug('Sublimacion'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Solvente','description' => 'None','slug' => str_slug('Solvente'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresión directa','description' => 'None','slug' => str_slug('Impresion directa'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresión digital','description' => 'None','slug' => str_slug('Impresion digital'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Fotografía','description' => 'None','slug' => str_slug('Fotografia'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'CAD','description' => 'None','slug' => str_slug('CAD'),'image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Sublimación','description' => 'None','slug' => str_slug('Sublimacion'),'image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Solvente','description' => 'None','slug' => str_slug('Solvente'),'image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Fotográfico','description' => 'None','slug' => str_slug('Fotografico'),'image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

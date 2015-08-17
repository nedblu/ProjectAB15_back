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
		DB::table('categories')->insert(['name' => 'Equipos','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '0','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Consumibles','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '0','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Impresoras','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Planchas','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Vinyl','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Tintas','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Papeles','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Rollos','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '2','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Sublimación','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Solvente','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Impresión directa','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Impresión digital','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Fotografía','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'CAD','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Sublimación','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Solvente','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('categories')->insert(['name' => 'Fotográfico','description' => 'None','image' => 'no.png','user_id' => '1','parent_id' => '8','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}

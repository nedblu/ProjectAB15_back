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
		DB::table('categories')->insert(['name' => 'Sin categoría','description' => 'No disponible','slug' => str_slug('Sin categoria'),'image' => null,'user_id' => '1','parent_id' => '0','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Equipos','description' => 'No disponible','slug' => str_slug('Equipos'),'image' => null,'user_id' => '1','parent_id' => '0','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Consumibles','description' => 'No disponible','slug' => str_slug('Consumibles'),'image' => null,'user_id' => '1','parent_id' => '0','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresoras','description' => 'No disponible','slug' => str_slug('Impresoras'),'image' => null,'user_id' => '1','parent_id' => '2','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Planchas','description' => 'No disponible','slug' => str_slug('Planchas'),'image' => null,'user_id' => '1','parent_id' => '2','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Vinyl','description' => 'No disponible','slug' => str_slug('Vinyl'),'image' => null,'user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Tintas','description' => 'No disponible','slug' => str_slug('Tintas'),'image' => null,'user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Papeles','description' => 'No disponible','slug' => str_slug('Papeles'),'image' => null,'user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Rollos','description' => 'No disponible','slug' => str_slug('Rollos'),'image' => null,'user_id' => '1','parent_id' => '3','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Sublimación (Impresoras)','description' => 'No disponible','slug' => str_slug('Sublimación (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Solvente (Impresoras)','description' => 'No disponible','slug' => str_slug('Solvente (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresión directa (Impresoras)','description' => 'No disponible','slug' => str_slug('Impresión directa (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Impresión digital (Impresoras)','description' => 'No disponible','slug' => str_slug('Impresión digital (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Fotografía (Impresoras)','description' => 'No disponible','slug' => str_slug('Fotografía (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'CAD (Impresoras)','description' => 'No disponible','slug' => str_slug('CAD (Impresoras)'),'image' => null,'user_id' => '1','parent_id' => '4','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Sublimación (Rollos)','description' => 'No disponible','slug' => str_slug('Sublimación (Rollos)'),'image' => null,'user_id' => '1','parent_id' => '9','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Solvente (Rollos)','description' => 'No disponible','slug' => str_slug('Solvente (Rollos)'),'image' => null,'user_id' => '1','parent_id' => '9','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('categories')->insert(['name' => 'Fotográfico (Rollos)','description' => 'No disponible','slug' => str_slug('Fotográfico (Rollos)'),'image' => null,'user_id' => '1','parent_id' => '9','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

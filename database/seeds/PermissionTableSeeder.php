<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('permissions')->insert(['name' => 'product.edit','description' => 'Edición de productos','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'product.delete','description' => 'Eliminación de productos','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'product.create','description' => 'Creación de productos','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'user.create','description' => 'Adición de usuarios','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'user.edit','description' => 'Edición de usuarios','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'user.delete','description' => 'Eliminación de usuarios','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'techique.edit','description' => 'Edición de artículo técnicas','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'techique.create','description' => 'Creación de artículo técnicas','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'techique.remove','description' => 'Eliminación de artículo técnicas','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'slideshow.add','description' => 'Adición de nuevas imágenes','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'slideshow.remove','description' => 'Elminación de imágenes','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'slideshow.edit','description' => 'Edición de items del slide show','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'contact.add','description' => 'Adición de contactos al formulario','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'contact.edit','description' => 'Edición de contactos','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('permissions')->insert(['name' => 'contact.remove','description' => 'Elimación de contactos','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}

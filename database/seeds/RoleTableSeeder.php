<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert(['name' => 'Soporte','slug' => str_slug('SUPPORT'),'description' => 'No provided.','level' => 1,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Propietario','slug' => str_slug('OWNER'),'description' => 'El propietario que puede administrar usuarios, recursos y páginas del sistema.','level' => 2,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);	
		DB::table('roles')->insert(['name' => 'Administrador','slug' => str_slug('ADMIN'),'description' => 'El administrador puede administrar usuarios, recursos, y páginas del sistema.','level' => 3,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Editor','slug' => str_slug('EDITOR'),'description' => 'El editor puede administrar recursos, y páginas del sistema.','level' => 4,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Diseño','slug' => str_slug('DESIGN'),'description' => 'El diseñador sólo puede accesar a aplicaciones que requieran imágenes estáticas.','level' => 5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}
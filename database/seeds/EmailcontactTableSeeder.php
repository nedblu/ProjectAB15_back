<?php

use Illuminate\Database\Seeder;

class EmailcontactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('emailcontacts')->insert(['name' => 'Carlos David Aguilar Ruiz','email' => 'carlosaguilarnet@gmail.com','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('emailcontacts')->insert(['name' => 'Felipe Arturo Pérez Camargo','email' => 'perez.camargo7@gmail.com','user_id' => '1','created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

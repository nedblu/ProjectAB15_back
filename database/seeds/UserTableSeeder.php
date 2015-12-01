<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 'first_name' => 'Carlos David',  'last_name' => 'Aguilar Ruiz',  'username' => 'david_support',  'email' => 'carlosaguilarnet@gmail.com', 'password' => Hash::make('devtest'), 'active' => '1', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('users')->insert([ 'first_name' => 'Felipe Arturo', 'last_name' => 'Pérez Camargo', 'username' => 'felipe_support', 'email' => 'perez.camargo7@gmail.com',   'password' => Hash::make('devtest'), 'active' => '1', 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}

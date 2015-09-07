<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('colors')->insert(['name' => 'agua_c','code' => 'C001','image' => 'agua_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'agua_t','code' => 'C002','image' => 'agua_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'amarillo','code' => 'C003','image' => 'amarillo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'amarillo_fluorecente','code' => 'C004','image' => 'amarillo_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'amarillo_fosforecente_t','code' => 'C005','image' => 'amarillo_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_cielo','code' => 'C006','image' => 'azul_cielo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_columbia','code' => 'C007','image' => 'azul_columbia.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_fluorecente','code' => 'C008','image' => 'azul_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_fosforecente_t','code' => 'C009','image' => 'azul_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_marino','code' => 'C010','image' => 'azul_marino.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_marino_c','code' => 'C011','image' => 'azul_marino_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_palido','code' => 'C012','image' => 'azul_palido.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_pastel','code' => 'C013','image' => 'azul_pastel.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_rey','code' => 'C014','image' => 'azul_rey.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_rey_t','code' => 'C015','image' => 'azul_rey_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_t','code' => 'C016','image' => 'azul_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'azul_viejo_t','code' => 'C017','image' => 'azul_viejo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'berenjena_t','code' => 'C018','image' => 'berenjena_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'blanco','code' => 'C019','image' => 'blanco.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'blanco_t','code' => 'C020','image' => 'blanco_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'borgona','code' => 'C021','image' => 'borgona.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'borgona_t','code' => 'C022','image' => 'borgona_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'brillo_en_la_oscuridad','code' => 'C023','image' => 'brillo_en_la_oscuridad.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'bronce_t','code' => 'C024','image' => 'bronce_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'bronceado','code' => 'C025','image' => 'bronceado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cafe','code' => 'C026','image' => 'cafe.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'canela','code' => 'C027','image' => 'canela.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'carbon','code' => 'C028','image' => 'carbon.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cardinal','code' => 'C029','image' => 'cardinal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cereza','code' => 'C030','image' => 'cereza.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cereza_t','code' => 'C031','image' => 'cereza_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'chicle','code' => 'C032','image' => 'chicle.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cielo_c','code' => 'C033','image' => 'cielo_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cobre_t','code' => 'C034','image' => 'cobre_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'confeti_oro_t','code' => 'C035','image' => 'confeti_oro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'confeti_plata_t','code' => 'C036','image' => 'confeti_plata_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'confeti_t','code' => 'C037','image' => 'confeti_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'coral_fluorecente','code' => 'C038','image' => 'coral_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'crema','code' => 'C039','image' => 'crema.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'cristal','code' => 'C040','image' => 'cristal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'esmeralda','code' => 'C041','image' => 'esmeralda.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'esmeralda_t','code' => 'C042','image' => 'esmeralda_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'frambuesa_fluorecente','code' => 'C043','image' => 'frambuesa_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'fucsia_c','code' => 'C044','image' => 'fucsia_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'glitter_oro','code' => 'C045','image' => 'glitter_oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'glitter_plata','code' => 'C046','image' => 'glitter_plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'gris','code' => 'C047','image' => 'gris.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'hibiscus','code' => 'C048','image' => 'hibiscus.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'hot_pink_t','code' => 'C049','image' => 'hot_pink_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'jade_t','code' => 'C050','image' => 'jade_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'kelly','code' => 'C051','image' => 'kelly.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'lavanda_t','code' => 'C052','image' => 'lavanda_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'lente_de_oro','code' => 'C053','image' => 'lente_de_oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'lente_de_plata','code' => 'C054','image' => 'lente_de_plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'light_multi_t','code' => 'C055','image' => 'light_multi_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'lila','code' => 'C056','image' => 'lila.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'lima','code' => 'C057','image' => 'lima.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'limon','code' => 'C058','image' => 'limon.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'marino','code' => 'C059','image' => 'marino.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'marron','code' => 'C060','image' => 'marron.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'marron_oscuro','code' => 'C061','image' => 'marron_oscuro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'mezclilla','code' => 'C062','image' => 'mezclilla.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'morado','code' => 'C063','image' => 'morado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'morado_c','code' => 'C064','image' => 'morado_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'morado_t','code' => 'C065','image' => 'morado_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja','code' => 'C066','image' => 'naranja.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja_c','code' => 'C067','image' => 'naranja_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja_fluorecente','code' => 'C068','image' => 'naranja_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja_fosforecente_t','code' => 'C069','image' => 'naranja_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja_texas','code' => 'C070','image' => 'naranja_texas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'naranja_translucido_t','code' => 'C071','image' => 'naranja_translucido_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'negro','code' => 'C072','image' => 'negro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'negro_c','code' => 'C073','image' => 'negro_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'negro_t','code' => 'C074','image' => 'negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro','code' => 'C075','image' => 'oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_c','code' => 'C076','image' => 'oro_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_cristal','code' => 'C077','image' => 'oro_cristal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_negro_t','code' => 'C078','image' => 'oro_negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_t','code' => 'C079','image' => 'oro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_vegas','code' => 'C080','image' => 'oro_vegas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'oro_viejo_t','code' => 'C081','image' => 'oro_viejo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'orquideas','code' => 'C082','image' => 'orquideas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'perla','code' => 'C083','image' => 'perla.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'plata','code' => 'C084','image' => 'plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'plata_c','code' => 'C085','image' => 'plata_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'plata_negro_t','code' => 'C086','image' => 'plata_negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'plata_t','code' => 'C087','image' => 'plata_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'purpura_fosforecente_t','code' => 'C088','image' => 'purpura_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rey','code' => 'C089','image' => 'rey.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rojo','code' => 'C090','image' => 'rojo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rojo_brillante','code' => 'C091','image' => 'rojo_brillante.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rojo_c','code' => 'C092','image' => 'rojo_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rojo_t','code' => 'C093','image' => 'rojo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosa','code' => 'C094','image' => 'rosa.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosa_c','code' => 'C095','image' => 'rosa_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosa_claro','code' => 'C096','image' => 'rosa_claro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosa_fluorecente','code' => 'C097','image' => 'rosa_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosa_translucido_t','code' => 'C098','image' => 'rosa_translucido_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rosacia_fosforecente_t','code' => 'C099','image' => 'rosacia_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'rubor_t','code' => 'C100','image' => 'rubor_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'sol','code' => 'C101','image' => 'sol.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'spectrum','code' => 'C102','image' => 'spectrum.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'turquesa','code' => 'C103','image' => 'turquesa.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde','code' => 'C104','image' => 'verde.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_azulado','code' => 'C105','image' => 'verde_azulado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_c','code' => 'C106','image' => 'verde_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_claro_t','code' => 'C107','image' => 'verde_claro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_fluorecente','code' => 'C108','image' => 'verde_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_fosforecente_t','code' => 'C109','image' => 'verde_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_manzana','code' => 'C110','image' => 'verde_manzana.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_oscuro','code' => 'C111','image' => 'verde_oscuro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_oscuro_t','code' => 'C112','image' => 'verde_oscuro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'verde_pasto_t','code' => 'C113','image' => 'verde_pasto_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'zairo_t','code' => 'C114','image' => 'zairo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}

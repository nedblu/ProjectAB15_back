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
		DB::table('colors')->insert(['name' => 'Agua Confeti','code' => 'C001','image' => 'agua_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Agua con Textura','code' => 'C002','image' => 'agua_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Amarillo','code' => 'C003','image' => 'amarillo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Amarillo Fluorecente','code' => 'C004','image' => 'amarillo_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Amarillo Fosforecente','code' => 'C005','image' => 'amarillo_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Cielo','code' => 'C006','image' => 'azul_cielo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Columbia','code' => 'C007','image' => 'azul_columbia.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Fluorecente','code' => 'C008','image' => 'azul_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Fosforecente','code' => 'C009','image' => 'azul_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Marino','code' => 'C010','image' => 'azul_marino.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Marino Confeti','code' => 'C011','image' => 'azul_marino_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Pálido','code' => 'C012','image' => 'azul_palido.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Pastel','code' => 'C013','image' => 'azul_pastel.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Rey','code' => 'C014','image' => 'azul_rey.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Rey con Textura','code' => 'C015','image' => 'azul_rey_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul con Textura','code' => 'C016','image' => 'azul_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Azul Viejo','code' => 'C017','image' => 'azul_viejo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Berenjena','code' => 'C018','image' => 'berenjena_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Blanco','code' => 'C019','image' => 'blanco.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Blanco con Textura','code' => 'C020','image' => 'blanco_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Borgoña','code' => 'C021','image' => 'borgona.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Borgoña con Textura','code' => 'C022','image' => 'borgona_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Brillo en la Oscuridad','code' => 'C023','image' => 'brillo_en_la_oscuridad.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Bronce','code' => 'C024','image' => 'bronce_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Bronceado','code' => 'C025','image' => 'bronceado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Café','code' => 'C026','image' => 'cafe.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Canela','code' => 'C027','image' => 'canela.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Carbón','code' => 'C028','image' => 'carbon.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cardinal','code' => 'C029','image' => 'cardinal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cereza','code' => 'C030','image' => 'cereza.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cereza con Textura','code' => 'C031','image' => 'cereza_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Chicle','code' => 'C032','image' => 'chicle.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cielo Confeti','code' => 'C033','image' => 'cielo_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cobre','code' => 'C034','image' => 'cobre_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Confeti Oro','code' => 'C035','image' => 'confeti_oro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Confeti Plata','code' => 'C036','image' => 'confeti_plata_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Confeti','code' => 'C037','image' => 'confeti_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Coral Fluorecente','code' => 'C038','image' => 'coral_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Crema','code' => 'C039','image' => 'crema.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Cristal','code' => 'C040','image' => 'cristal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Esmeralda','code' => 'C041','image' => 'esmeralda.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Esmeralda con Textura','code' => 'C042','image' => 'esmeralda_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Frambuesa Fluorecente','code' => 'C043','image' => 'frambuesa_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Fucsia Confeti','code' => 'C044','image' => 'fucsia_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Glitter Oro','code' => 'C045','image' => 'glitter_oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Glitter Plata','code' => 'C046','image' => 'glitter_plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Gris','code' => 'C047','image' => 'gris.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Hibiscus','code' => 'C048','image' => 'hibiscus.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Hot Pink','code' => 'C049','image' => 'hot_pink_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Jade','code' => 'C050','image' => 'jade_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Kelly','code' => 'C051','image' => 'kelly.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Lavanda','code' => 'C052','image' => 'lavanda_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Lente de Oro','code' => 'C053','image' => 'lente_de_oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Lente de Plata','code' => 'C054','image' => 'lente_de_plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Light Multi','code' => 'C055','image' => 'light_multi_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Lila','code' => 'C056','image' => 'lila.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Lima','code' => 'C057','image' => 'lima.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Limón','code' => 'C058','image' => 'limon.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Marino','code' => 'C059','image' => 'marino.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Marrón','code' => 'C060','image' => 'marron.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Marron Oscuro','code' => 'C061','image' => 'marron_oscuro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Mezclilla','code' => 'C062','image' => 'mezclilla.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Morado','code' => 'C063','image' => 'morado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Morado Confeti','code' => 'C064','image' => 'morado_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Morado con Textura','code' => 'C065','image' => 'morado_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja','code' => 'C066','image' => 'naranja.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja Confeti','code' => 'C067','image' => 'naranja_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja Fluorecente','code' => 'C068','image' => 'naranja_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja Fosforecente','code' => 'C069','image' => 'naranja_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja Texas','code' => 'C070','image' => 'naranja_texas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Naranja Translucido','code' => 'C071','image' => 'naranja_translucido_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Negro','code' => 'C072','image' => 'negro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Negro Confeti','code' => 'C073','image' => 'negro_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Negro con Textura','code' => 'C074','image' => 'negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro','code' => 'C075','image' => 'oro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro Confeti','code' => 'C076','image' => 'oro_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro Cristal','code' => 'C077','image' => 'oro_cristal.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro Negro','code' => 'C078','image' => 'oro_negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro con Textura','code' => 'C079','image' => 'oro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro Vegas','code' => 'C080','image' => 'oro_vegas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Oro Viejo','code' => 'C081','image' => 'oro_viejo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Orquideas','code' => 'C082','image' => 'orquideas.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Perla','code' => 'C083','image' => 'perla.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Plata','code' => 'C084','image' => 'plata.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Plata Confeti','code' => 'C085','image' => 'plata_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Plata Negro','code' => 'C086','image' => 'plata_negro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Plata con Textura','code' => 'C087','image' => 'plata_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Purpura Fosforecente','code' => 'C088','image' => 'purpura_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rey','code' => 'C089','image' => 'rey.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rojo','code' => 'C090','image' => 'rojo.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rojo Brillante','code' => 'C091','image' => 'rojo_brillante.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rojo Confeti','code' => 'C092','image' => 'rojo_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rojo con Textura','code' => 'C093','image' => 'rojo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosa','code' => 'C094','image' => 'rosa.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosa Confeti','code' => 'C095','image' => 'rosa_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosa Claro','code' => 'C096','image' => 'rosa_claro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosa Fluorecente','code' => 'C097','image' => 'rosa_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosa Translucido','code' => 'C098','image' => 'rosa_translucido_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rosacia Fosforecente','code' => 'C099','image' => 'rosacia_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Rubor','code' => 'C100','image' => 'rubor_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Sol','code' => 'C101','image' => 'sol.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Spectrum','code' => 'C102','image' => 'spectrum.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Turquesa','code' => 'C103','image' => 'turquesa.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde','code' => 'C104','image' => 'verde.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Azulado','code' => 'C105','image' => 'verde_azulado.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Confeti','code' => 'C106','image' => 'verde_c.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Claro','code' => 'C107','image' => 'verde_claro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Fluorecente','code' => 'C108','image' => 'verde_fluorecente.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Fosforecente','code' => 'C109','image' => 'verde_fosforecente_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Manzana','code' => 'C110','image' => 'verde_manzana.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Oscuro','code' => 'C111','image' => 'verde_oscuro.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Oscuro con Textura','code' => 'C112','image' => 'verde_oscuro_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Verde Pasto','code' => 'C113','image' => 'verde_pasto_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('colors')->insert(['name' => 'Zairo','code' => 'C114','image' => 'zairo_t.png','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}

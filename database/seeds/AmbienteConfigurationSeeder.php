<?php

use App\AmbienteConfiguration;
use Illuminate\Database\Seeder;

class AmbienteConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AmbienteConfiguration::create([
            "url_embed_video_home" => "https://player.vimeo.com/video/21709803?autoplay=1",
            "imagen_video_home" => "bg_video-870x490.jpg",
            "url_producto_2_home" => "shop",
            "imagen_2_home" => "2promo.jpg",
            "url_producto_3_home" => "shop",
            "imagen_3_home" => "banner_extra_promo.jpg",
            "url_producto_5_home" => "shop",
            "imagen_instagram_1_home" => "inst1.jpg",
            "imagen_instagram_2_home" => "inst2.jpg",
            "imagen_instagram_3_home" => "inst3.jpg",
            "imagen_instagram_4_home" => "inst4.jpg",
            "url_nueva_colleccion" => ""
        ]);
    }
}

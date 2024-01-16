<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Destinos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('destinos')->insert([
            [
                'nombre' => 'Playa del Carmen',
                'precio' => 1200.00,
                'fecha_ida' => '2024-02-01',
                'fecha_vuelta' => '2024-02-07',
                'total_personas' => 2,
                'descripcion' => 'Descubre las hermosas playas de Playa del Carmen en la Riviera Maya.',
                'ubicacion' => 'Playa del Carmen, México',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/hermosa-playa-tropical-mar-oceano-palmera-coco-sombrilla-silla-cielo-azul_74190-8827.jpg?w=996&t=st=1705420761~exp=1705421361~hmac=724d1f9376efca18d93ef0212d980def924a55d2abb3d3b03d53d94a6ccced39',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Maldivas',
                'precio' => 2500.00,
                'fecha_ida' => '2024-03-15',
                'fecha_vuelta' => '2024-03-22',
                'total_personas' => 4,
                'descripcion' => 'Experimenta el lujo y la belleza de las islas Maldivas en el océano Índico.',
                'ubicacion' => 'Maldivas, Asia',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/isla-maldivas_1203-7357.jpg?w=996&t=st=1705420820~exp=1705421420~hmac=d104968cfeda6e90ea4d8489cffcaa19aec2595612990d822b9b2df01878403a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'París',
                'precio' => 1500.00,
                'fecha_ida' => '2024-04-10',
                'fecha_vuelta' => '2024-04-15',
                'total_personas' => 3,
                'descripcion' => 'Sumérgete en la cultura y la historia en la hermosa ciudad de París, la Ciudad de la Luz.',
                'ubicacion' => 'París, Francia',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/paisaje-urbano-paris-luz-sol-cielo-azul-fra_181624-50289.jpg?w=996&t=st=1705420889~exp=1705421489~hmac=b0ca0aae4e71abbb3157c6298c86c4edfad1cc427506292761d5c991e1f249dd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Costa Rica',
                'precio' => 1800.00,
                'fecha_ida' => '2024-05-05',
                'fecha_vuelta' => '2024-05-12',
                'total_personas' => 5,
                'descripcion' => 'Descubre la biodiversidad y la aventura en la exuberante Costa Rica.',
                'ubicacion' => 'Costa Rica, América Central',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/fascinante-vista-lago-rodeado-montanas-cubiertas-verde-cielo-azul_181624-20175.jpg?w=900&t=st=1705420922~exp=1705421522~hmac=cc5cbbef350a35fabe41c93d52b7209ebd8f113484705c91b1c9ea15f5464346',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alpes Suizos',
                'precio' => 2000.00,
                'fecha_ida' => '2024-06-20',
                'fecha_vuelta' => '2024-06-27',
                'total_personas' => 2,
                'descripcion' => 'Disfruta de las impresionantes vistas de los Alpes Suizos y actividades al aire libre.',
                'ubicacion' => 'Alpes Suizos, Suiza',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/vista-panoramica-picos-nevados-aiguille-verte-alpes-franceses_181624-45537.jpg?w=996&t=st=1705420958~exp=1705421558~hmac=ac221817e5d4f1da8b24d89d159d31817f7e5be1fdbfb76f08c25cb3cbe0a8af',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Bora Bora',
                'precio' => 3000.00,
                'fecha_ida' => '2024-07-15',
                'fecha_vuelta' => '2024-07-22',
                'total_personas' => 6,
                'descripcion' => 'Relájate en las lujosas cabañas sobre el agua en la paradisíaca isla de Bora Bora.',
                'ubicacion' => 'Bora Bora, Polinesia Francesa',
                'imagen_principal' => 'https://img.freepik.com/foto-gratis/naturaleza-villa-vacaciones-playa-mar_1203-5314.jpg?w=996&t=st=1705421000~exp=1705421600~hmac=baabd28ffc8cbd5cdf96ab373cf626692ed32ec6358f9724a7265e7dda9319c0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

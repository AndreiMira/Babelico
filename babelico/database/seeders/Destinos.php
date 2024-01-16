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
                'imagen_principal' => 'imatges/playa_del_carmen.jpg',
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
                'imagen_principal' => 'imatges/maldivas.jpg',
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
                'imagen_principal' => 'imatges/paris.jpg',
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
                'imagen_principal' => 'imatges/costa_rica.jpg',
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
                'imagen_principal' => 'imatges/alpes_suizos.jpg',
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
                'imagen_principal' => 'imatges/bora_bora.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

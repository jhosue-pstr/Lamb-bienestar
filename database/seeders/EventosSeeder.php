<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'name' => 'Evento General 1',
                'type' => 'todos',
                'location' => 'Auditorio',
                'date' => '2024-11-10',
                'time' => '10:00:00',
                'description' => 'Evento para todos.',
            ],
            [
                'name' => 'Evento General 2',
                'type' => 'todos',
                'location' => 'Plaza',
                'date' => '2024-11-12',
                'time' => '15:00:00',
                'description' => 'Otro evento para todos.',
            ],
            [
                'name' => 'Evento de Ingeniería',
                'type' => 'carrera',
                'location' => 'Sala 3',
                'date' => '2024-11-15',
                'time' => '08:00:00',
                'description' => 'Evento para ingeniería.',
            ],
            [
                'name' => 'Evento de Medicina',
                'type' => 'carrera',
                'location' => 'Aula 1',
                'date' => '2024-11-18',
                'time' => '13:00:00',
                'description' => 'Evento para medicina.',
            ],
        ]);
    }
}

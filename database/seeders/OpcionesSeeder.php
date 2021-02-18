<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pregunta;
use App\Models\Opciones;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->delete();
        $preguntas=Pregunta::all();
        $preguntas->each(function ($pregunta) {
            Opciones::factory()->count(4)->create(['pregunta_id' => $pregunta-> id ]);
        });
    }
}

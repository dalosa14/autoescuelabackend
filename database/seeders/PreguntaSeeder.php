<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Test;
use App\Models\Pregunta;
class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->delete();
        $tests=Test::all();
        $tests->each(function ($test) {
            Pregunta::factory()->count(30)->create(['test_id' => $test-> id ]);
        });
    }
}

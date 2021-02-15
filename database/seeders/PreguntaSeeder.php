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
        $tests->each(function ($user) {
            Pregunta::factory()->count(2)->create(['test_id' => $user-> id ]);
        });
    }
}

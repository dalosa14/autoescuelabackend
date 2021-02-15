<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Modalidadpermiso;
class ModalidadPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidadpermiso')->delete();
        Modalidadpermiso::factory()->count(2)->create();
    }
}

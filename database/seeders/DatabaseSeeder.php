<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ModalidadPermisoSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(OpcionesSeeder::class);
        
    }
}

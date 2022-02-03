<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsuarioSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creando usuarios de seed
        $this->call(UsuarioSeed::class);
        //categorias
        $this->call(CategoriaSeed::class);
    }
}

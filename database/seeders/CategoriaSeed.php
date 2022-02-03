<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Restaurante',
            'slug' => Str::slug('Restaurante'),
        ]);

        Categoria::create([
            'nombre' => 'Hotel',
            'slug' => Str::slug('Hotel'),
        ]);

        Categoria::create([
            'nombre' => 'Bar',
            'slug' => Str::slug('Bar'),
        ]);

        Categoria::create([
            'nombre' => 'Hospital',
            'slug' => Str::slug('Hospital'),
        ]);

        Categoria::create([
            'nombre' => 'Gimnasio',
            'slug' => Str::slug('Gimnasio'),
        ]);

        Categoria::create([
            'nombre' => 'Doctor',
            'slug' => Str::slug('Doctor'),
        ]);
    }
}

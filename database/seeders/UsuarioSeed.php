<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'federico',
            'email' => 'federicoelbroder@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('fadr085805')
        ]);

        User::create([
            'name' => 'raishid',
            'email' => 'raishidavid@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('fadr085805')
        ]);
    }
}

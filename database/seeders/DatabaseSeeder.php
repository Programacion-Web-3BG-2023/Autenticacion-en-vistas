<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        \App\Models\User::factory(1)->create([
            'id' => 1,
            'name' => "usuario",
            'email' => "usuario@usuario",
            'password' => Hash::make("12345678")
        ]);
        \App\Models\Persona::factory(1)->create([
            'user_id' => 1
        ]);
    }
}

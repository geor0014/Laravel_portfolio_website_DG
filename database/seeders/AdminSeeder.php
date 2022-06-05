<?php

namespace Database\Seeders;

use App\Models\Admin;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Ishmael',
            'email' => 'callmeishmael@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Dani159753852?'), // password
            // 'password' => 'Swordfish', // password
            'remember_token' => Str::random(10),
        ]);
    }
}

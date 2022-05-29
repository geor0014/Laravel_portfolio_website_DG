<?php

namespace Database\Seeders;

use App\Http\Middleware\Admin;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminFactory::factory(1)->create();
    }
}

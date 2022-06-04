<?php

namespace Database\Seeders;

use App\Http\Middleware\Admin;
use App\Models\Article;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Grade;
use App\Models\User;
use Database\Factories\AdminFactory;
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
        Grade::truncate();
        Article::truncate();
        Faq::truncate();
        // Course::truncate();

        User::factory()->create();

        // Grade::factory(10)->create();
        $this->call([ArticleSeeder::class, FaqSeeder::class,]);
    }
}

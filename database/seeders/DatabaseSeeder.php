<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $user = User::factory()->create([
        'name' => 'John Doe',
        'email' => 'johndoe@gmail.com'
       ]);

       $category = Category::factory()->create([
        'name' => 'news'
       ]);

        Article::factory(50)->create([
            'author_id' => $user->id,
            'category_id' => $category->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

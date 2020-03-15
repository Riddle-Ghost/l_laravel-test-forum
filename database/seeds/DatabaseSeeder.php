<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Models\Category::class, 5)->create();
        factory(\App\Models\Tag::class, 5)->create();
        factory(\App\Models\User::class, 5)->create();
        factory(\App\Models\Topic::class, 15)->create();
        factory(\App\Models\Post::class, 60)->create();
    }
}

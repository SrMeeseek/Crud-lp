<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Jhoan Gutierrez',
            'email' => 'jhoan@mail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Camilo Velasquez',
            'email' => 'Camilo@mail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Jhoan Camilo Gut',
            'email' => 'jcg@mail.com',
            'password' => bcrypt('12345678')
        ]);

        Post::factory(24)->create();
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::first(); // Assuming you have seeded a user
        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'user_id' => $user->id,
                'title' => 'Post Title ' . $i,
                'body' => 'This is the body of post ' . $i,
            ]);
        }
    }
    
}

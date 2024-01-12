<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('db.posts');
        foreach ($posts as $post) {
            $newPost = new Post;
            $newPost->image = $post['image'];
            $newPost->title = $post['title'];
            $newPost->body = $post['body'];
            $newPost->user_id = 1;
            $newPost->slug = Str::slug($post['title'] . '-' . $newPost->id, '-');
            $newPost->save();

        }
    }
}

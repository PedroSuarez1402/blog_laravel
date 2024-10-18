<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'post 1';
        $post->slug = Str::slug($post->title); // Generar slug a partir del título
        $post->content = 'content 1';
        $post->categoria = 'categoria 1';
        $post->autor = 'Autor 1';
        $post->published_at = now();

        $post->save();
    }
}

<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $posts = Post::all();

         foreach ($posts as $post) {
            $randomTag = Tag::inRandomOrder()->limit(3)->get();

            foreach ($randomTag as $tag) {
                $post->tags()->attach($tag->id);
            }
        }
    }
}

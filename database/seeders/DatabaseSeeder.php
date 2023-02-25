<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Muhammad Rizky Perdana',
            'username' => 'Kyana',
            'email' => 'www.mrizkyperdana75@gmail.com',
            'password' => bcrypt('Kyana99123')
        ]);

        // User::create([
        //     'name' => 'Kyana',
        //     'email' => 'kyana@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt a totam ea maxime dolorum perspiciatis rerum quasi cupiditate nobis obcaecati! Consequuntur aliquam qui eaque magni mollitia, corporis voluptatem sequi veniam quam ex ea fugiat alias minima voluptatum numquam adipisci unde laboriosam eveniet nam assumenda, accusamus dolorem et sit ut.</p> <p>Corporis qui perspiciatis veritatis explicabo eveniet nemo molestias amet culpa sed dolorem assumenda placeat mollitia, laboriosam, quia consequuntur? Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident. Numquam quas odio laborum! Expedita molestias, error vitae aperiam quasi magni similique, voluptatum, tenetur harum assumenda nisi adipisci consectetur quibusdam. Ab nulla pariatur nemo vel ullam, architecto assumenda corrupti.</p> <p>Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt a totam ea maxime dolorum perspiciatis rerum quasi cupiditate nobis obcaecati! Consequuntur aliquam qui eaque magni mollitia, corporis voluptatem sequi veniam quam ex ea fugiat alias minima voluptatum numquam adipisci unde laboriosam eveniet nam assumenda, accusamus dolorem et sit ut.</p> <p>Corporis qui perspiciatis veritatis explicabo eveniet nemo molestias amet culpa sed dolorem assumenda placeat mollitia, laboriosam, quia consequuntur? Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident. Numquam quas odio laborum! Expedita molestias, error vitae aperiam quasi magni similique, voluptatum, tenetur harum assumenda nisi adipisci consectetur quibusdam. Ab nulla pariatur nemo vel ullam, architecto assumenda corrupti.</p> <p>Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt a totam ea maxime dolorum perspiciatis rerum quasi cupiditate nobis obcaecati! Consequuntur aliquam qui eaque magni mollitia, corporis voluptatem sequi veniam quam ex ea fugiat alias minima voluptatum numquam adipisci unde laboriosam eveniet nam assumenda, accusamus dolorem et sit ut.</p> <p>Corporis qui perspiciatis veritatis explicabo eveniet nemo molestias amet culpa sed dolorem assumenda placeat mollitia, laboriosam, quia consequuntur? Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident. Numquam quas odio laborum! Expedita molestias, error vitae aperiam quasi magni similique, voluptatum, tenetur harum assumenda nisi adipisci consectetur quibusdam. Ab nulla pariatur nemo vel ullam, architecto assumenda corrupti.</p> <p>Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt a totam ea maxime dolorum perspiciatis rerum quasi cupiditate nobis obcaecati! Consequuntur aliquam qui eaque magni mollitia, corporis voluptatem sequi veniam quam ex ea fugiat alias minima voluptatum numquam adipisci unde laboriosam eveniet nam assumenda, accusamus dolorem et sit ut.</p> <p>Corporis qui perspiciatis veritatis explicabo eveniet nemo molestias amet culpa sed dolorem assumenda placeat mollitia, laboriosam, quia consequuntur? Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident. Numquam quas odio laborum! Expedita molestias, error vitae aperiam quasi magni similique, voluptatum, tenetur harum assumenda nisi adipisci consectetur quibusdam. Ab nulla pariatur nemo vel ullam, architecto assumenda corrupti.</p> <p>Consequatur sint quis similique iste, sequi unde sed est, repellendus voluptates pariatur, soluta tempore excepturi amet cupiditate! Eius nesciunt doloribus fuga quas, consectetur provident.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

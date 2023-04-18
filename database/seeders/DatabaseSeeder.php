<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Yodra Muhamad',
        //     'email' => 'yodra.muhamad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhamad Akbar',
        //     'email' => 'muhamad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia   labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi. Sint incidunt consequuntur ducimus facilis reiciendis quos blanditiis vel omnis, alias, doloremque nihil.</p><p> Enim, a officiis sunt dignissimos perspiciatis nobis repudiandae, nam unde cupiditate facere ratione. Illo, nihil reprehenderit mollitia laborum corrupti aperiam necessitatibus nemo vitae fugiat nulla repudiandae eum blanditiis provident, molestias, dignissimos praesentium? Voluptatem est magni rem nihil laudantium magnam unde excepturi, pariatur adipisci! Laboriosam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia   labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi. Sint incidunt consequuntur ducimus facilis reiciendis quos blanditiis vel omnis, alias, doloremque nihil.</p><p> Enim, a officiis sunt dignissimos perspiciatis nobis repudiandae, nam unde cupiditate facere ratione. Illo, nihil reprehenderit mollitia laborum corrupti aperiam necessitatibus nemo vitae fugiat nulla repudiandae eum blanditiis provident, molestias, dignissimos praesentium? Voluptatem est magni rem nihil laudantium magnam unde excepturi, pariatur adipisci! Laboriosam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia   labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi. Sint incidunt consequuntur ducimus facilis reiciendis quos blanditiis vel omnis, alias, doloremque nihil.</p><p> Enim, a officiis sunt dignissimos perspiciatis nobis repudiandae, nam unde cupiditate facere ratione. Illo, nihil reprehenderit mollitia laborum corrupti aperiam necessitatibus nemo vitae fugiat nulla repudiandae eum blanditiis provident, molestias, dignissimos praesentium? Voluptatem est magni rem nihil laudantium magnam unde excepturi, pariatur adipisci! Laboriosam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia   labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi explicabo, doloribus aspernatur delectus exercitationem numquam tempore fuga officia labore culpa sit iste voluptas quaerat totam. Perferendis vitae ab aut, nemo velit aperiam, ad pariatur voluptates ducimus ex asperiores maxime quos atque libero commodi. Sint incidunt consequuntur ducimus facilis reiciendis quos blanditiis vel omnis, alias, doloremque nihil.</p><p> Enim, a officiis sunt dignissimos perspiciatis nobis repudiandae, nam unde cupiditate facere ratione. Illo, nihil reprehenderit mollitia laborum corrupti aperiam necessitatibus nemo vitae fugiat nulla repudiandae eum blanditiis provident, molestias, dignissimos praesentium? Voluptatem est magni rem nihil laudantium magnam unde excepturi, pariatur adipisci! Laboriosam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        

        User::create([
            'name' => 'Eko Purwanto',
            'username' => 'Eko',
            'email' => 'eko@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Dagus Widaryanto',
        //     'email' => 'dagus@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Framework',
            'slug' => 'web-framework'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul I',
        //     'slug' => 'judul-i',
        //     'excerpt' => 'I Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam,',
        //     'body' => '<p>I Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam, delectus, sit veniam officiis, exercitationem voluptates quisquam iure recusandae odit error aspernatur accusantium dolorem harum autem nostrum similique tempora a perspiciatis qui. Repudiandae aperiam non debitis. Quasi vero fugiat optio dolorum modi.</p><p>Vitae cum, odio doloribus repudiandae illo quas provident possimus necessitatibus ullam impedit similique itaque ducimus beatae quaerat adipisci id pariatur aperiam numquam recusandae delectus harum ipsa, autem perferendis? Deleniti aperiam iste laudantium reiciendis placeat ullam unde vero optio in dolor harum necessitatibus illum nihil cumque praesentium, voluptate velit facilis quasi inventore aut eos sapiente aliquid! Eligendi quis et magni culpa ratione quisquam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul II',
        //     'slug' => 'judul-ii',
        //     'excerpt' => 'II Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam,',
        //     'body' => '<p>II Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam, delectus, sit veniam officiis, exercitationem voluptates quisquam iure recusandae odit error aspernatur accusantium dolorem harum autem nostrum similique tempora a perspiciatis qui. Repudiandae aperiam non debitis. Quasi vero fugiat optio dolorum modi.</p><p>Vitae cum, odio doloribus repudiandae illo quas provident possimus necessitatibus ullam impedit similique itaque ducimus beatae quaerat adipisci id pariatur aperiam numquam recusandae delectus harum ipsa, autem perferendis? Deleniti aperiam iste laudantium reiciendis placeat ullam unde vero optio in dolor harum necessitatibus illum nihil cumque praesentium, voluptate velit facilis quasi inventore aut eos sapiente aliquid! Eligendi quis et magni culpa ratione quisquam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul III',
        //     'slug' => 'judul-iii',
        //     'excerpt' => 'III Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam,',
        //     'body' => '<p>I Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam, delectus, sit veniam officiis, exercitationem voluptates quisquam iure recusandae odit error aspernatur accusantium dolorem harum autem nostrum similique tempora a perspiciatis qui. Repudiandae aperiam non debitis. Quasi vero fugiat optio dolorum modi.</p><p>Vitae cum, odio doloribus repudiandae illo quas provident possimus necessitatibus ullam impedit similique itaque ducimus beatae quaerat adipisci id pariatur aperiam numquam recusandae delectus harum ipsa, autem perferendis? Deleniti aperiam iste laudantium reiciendis placeat ullam unde vero optio in dolor harum necessitatibus illum nihil cumque praesentium, voluptate velit facilis quasi inventore aut eos sapiente aliquid! Eligendi quis et magni culpa ratione quisquam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul IV',
        //     'slug' => 'judul-iv',
        //     'excerpt' => 'IV Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam,',
        //     'body' => '<p>I Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis autem excepturi debitis aspernatur repellat, nemo dolorem consequatur ut hic, inventore quam ipsam ullam eius! Culpa totam, delectus, sit veniam officiis, exercitationem voluptates quisquam iure recusandae odit error aspernatur accusantium dolorem harum autem nostrum similique tempora a perspiciatis qui. Repudiandae aperiam non debitis. Quasi vero fugiat optio dolorum modi.</p><p>Vitae cum, odio doloribus repudiandae illo quas provident possimus necessitatibus ullam impedit similique itaque ducimus beatae quaerat adipisci id pariatur aperiam numquam recusandae delectus harum ipsa, autem perferendis? Deleniti aperiam iste laudantium reiciendis placeat ullam unde vero optio in dolor harum necessitatibus illum nihil cumque praesentium, voluptate velit facilis quasi inventore aut eos sapiente aliquid! Eligendi quis et magni culpa ratione quisquam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    

    }
}

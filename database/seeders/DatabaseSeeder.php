<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(30)->create();
        // User::create([
        //     'name' => 'Rio Andrianto',
        //     'email' => 'r.andrianto@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // Post::create([
        //     'user_id'=>1,
        //     'title' => 'Posting Pertama',
        //     'slug' => 'posting-pertama',
        //     'expert'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam debitis ipsam dolor quae amet exercitationem sapiente omnis. Non nulla deleniti, veritatis enim vitae ab mollitia incidunt accusantium ullam quisquam! Fuga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, voluptatibus ducimus. Quo voluptate molestias quod fuga neque nulla enim, labore beatae aut, ea accusantium sunt rem omnis eaque eligendi alias aperiam, voluptatem adipisci ipsum! Tempora iure consequatur eveniet quos fuga, repudiandae omnis dolores deleniti voluptatum',

        // ]);

        // Post::create([
        //     'user_id'=>1,
        //     'title' => 'Posting Kedua',
        //     'slug' => 'posting-kedua',
        //     'expert'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam debitis ipsam dolor quae amet exercitationem sapiente omnis. Non nulla deleniti, veritatis enim vitae ab mollitia incidunt accusantium ullam quisquam! Fuga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, voluptatibus ducimus. Quo voluptate molestias quod fuga neque nulla enim, labore beatae aut, ea accusantium sunt rem omnis eaque eligendi alias aperiam, voluptatem adipisci ipsum! Tempora iure consequatur eveniet quos fuga, repudiandae omnis dolores deleniti voluptatum',

        // ]);

        // Post::create([
        //     'user_id'=>1,
        //     'title' => 'Posting Ketiga',
        //     'slug' => 'posting-ketiga',
        //     'expert'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam debitis ipsam dolor quae amet exercitationem sapiente omnis. Non nulla deleniti, veritatis enim vitae ab mollitia incidunt accusantium ullam quisquam! Fuga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, voluptatibus ducimus. Quo voluptate molestias quod fuga neque nulla enim, labore beatae aut, ea accusantium sunt rem omnis eaque eligendi alias aperiam, voluptatem adipisci ipsum! Tempora iure consequatur eveniet quos fuga, repudiandae omnis dolores deleniti voluptatum',

        // ]);

        // Post::create([
        //     'user_id'=>1,
        //     'title' => 'Posting Keempat',
        //     'slug' => 'posting-keempat',
        //     'expert'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam debitis ipsam dolor quae amet exercitationem sapiente omnis. Non nulla deleniti, veritatis enim vitae ab mollitia incidunt accusantium ullam quisquam! Fuga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, voluptatibus ducimus. Quo voluptate molestias quod fuga neque nulla enim, labore beatae aut, ea accusantium sunt rem omnis eaque eligendi alias aperiam, voluptatem adipisci ipsum! Tempora iure consequatur eveniet quos fuga, repudiandae omnis dolores deleniti voluptatum',

        // ]);

        // Post::create([
        //     'user_id'=>1,
        //     'title' => 'Posting Kelima',
        //     'slug' => 'posting-kelima',
        //     'expert'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam debitis ipsam dolor quae amet exercitationem sapiente omnis. Non nulla deleniti, veritatis enim vitae ab mollitia incidunt accusantium ullam quisquam! Fuga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, voluptatibus ducimus. Quo voluptate molestias quod fuga neque nulla enim, labore beatae aut, ea accusantium sunt rem omnis eaque eligendi alias aperiam, voluptatem adipisci ipsum! Tempora iure consequatur eveniet quos fuga, repudiandae omnis dolores deleniti voluptatum',

        // ]);
    }
}

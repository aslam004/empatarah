<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Team;
use App\Models\Head;
use App\Models\AboutUs;
use App\Models\Concept;
use App\Models\menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        AboutUs::create([
            'main_title'=>'About Us Seed',
            'title'=>'Title',
            'article'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aliquam natus dicta incidunt? Facere dolor voluptate sequi, culpa architecto vero quibusdam repellat sed quia libero ab recusandae quod beatae eius mollitia quas autem.</p><p> Ut enim facere autem temporibus delectus, quidem veritatis voluptates quisquam labore iste libero quis accusantium alias fugit vero corporis ea eius molestiae dicta. Voluptatum assumenda et sit quisquam dolorem totam aspernatur, nihil obcaecati, quaerat quidem molestiae nulla ex ea perferendis. In natus ea dolorum reprehenderit eveniet labore omnis magni placeat sed et facilis, ullam mollitia ratione maxime architecto nulla explicabo! Temporibus, mollitia expedita nostrum natus placeat dolorem!</p>',
        ]);

        Concept::create([
            'title'=>'Concept Seed',
            'slogan'=>'slogan Seed1',
            'img'=>'bomb',
        ]);
        Concept::create([
            'title'=>'Concept Seed',
            'slogan'=>'slogan Seed21',
            'img'=>'apartmen',
        ]);
        Concept::create([
            'title'=>'Concept Seed',
            'slogan'=>'slogan Seed321',
            'img'=>'code',
        ]);

        Head::create([
            'title'=>'Title Dari seed',
            'article'=>'Article dari Seed',
        ]);

        menu::create([
            'menu_img'=>'coconut',
        ]);
        menu::create([
            'menu_img'=>'wine',
        ]);
        menu::create([
            'menu_img'=>'mocktail',
        ]);
        menu::create([
            'menu_img'=>'coffee',
        ]);

        User::create([
            'name'=>'SuperUser',
            'email'=>'SuperUser@gmail.com',
            'password'=>bcrypt('admin'),
        ]);

        Team::create([
            'face_img'=>'raven',
        ]);
        Team::create([
            'face_img'=>'deer',
        ]);
        Team::create([
            'face_img'=>'bear',
        ]);
        Team::create([
            'face_img'=>'panther',
        ]);

    }
}

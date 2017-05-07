<?php

use Illuminate\Database\Seeder;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::find(1);
        for($i = 0; $i < 10; $i++){
            $faker = Faker\Factory::create();
            $article = new \App\Article([
                'content'   => $faker->paragraph,
                'title'     => $faker->catchPhrase
            ]);
            $user->articles()->save($article);
        }
        //
    }
}

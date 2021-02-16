<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $article = new Article();

            $article->title= $faker->sentence(2);
            $article->subtitle= $faker->sentence(2);
            $article->author= $faker->name;
            $article->text= $faker->text(500);
            $article->pubblication_year= $faker->year($max = 'now');
            $article->save();
        }
    }
}

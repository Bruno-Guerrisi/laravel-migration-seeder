<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 20; $i++) { 
            
            $new_travel = new Travel();

            $new_travel->poster = $faker->imageUrl(640, 480, 'animals', true);
            $new_travel->title = $faker->text(20);
            $new_travel->description = $faker->paragraphs(1, true);
            $new_travel->city = $faker->word();
            $new_travel->price = rand(80, 500);
            $new_travel->max_people = rand(10, 50);


            $new_travel->save();

        }

    }
}

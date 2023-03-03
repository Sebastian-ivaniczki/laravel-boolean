<?php

namespace Database\Seeders;

use App\Models\Egg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $egg = new Egg();
            $egg->name = $faker->word();
            $egg->color = $faker->hexColor();
            $egg->content = $faker->sentence();
            $egg->content_thumb = $faker->imageUrl(640, 480, 'animals', true);
            $egg->chocolate_type = $faker->sentence(2);
            $egg->size = $faker->randomElement(['Big', 'Small', 'Medium']);
            $egg->main_thumb = $faker->imageUrl(640, 480, 'animals', true);

            $egg->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->words(1);
            $newTrain->departure_station = $faker->words(1);
            $newTrain->arrival_station = $faker->words(1);
            $newTrain->departure_time = $faker->date('2022_12_d');
            $newTrain->arrival_time = $faker->date('2022_12_d');
            $newTrain->train_code = $faker->numberBetween(1, 1000);
            $newTrain->numner_of_carriages = $faker->numberBetween(7, 30);
        }
    }
}

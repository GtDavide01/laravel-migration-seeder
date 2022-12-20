<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = $faker->date('2022_12_d');
            $newTrain->arrival_time = $faker->date('2022_12_d');
            $newTrain->train_code = $faker->numberBetween(1, 1000);
            $newTrain->number_of_carriages = $faker->numberBetween(7, 30);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
        $trains = Helpers::getCsvData(__DIR__ . '/trains.csv');
        foreach ($trains as $key => $train) {
            // nell'indice 0 trovo l'intestazione della tabella, quindi non la includo
            if ($key !== 0) {
                $newTrain = new Train();
                $newTrain->agency = $train[1];
                $newTrain->departure_station = $train[2];
                $newTrain->arrival_station = $train[2];
                $newTrain->departure_time = $train[3];
                $newTrain->arrival_time = $train[4];
                $newTrain->train_code = $train[5];
                $newTrain->number_of_carriages = $train[6];
                $newTrain->in_time = $train[7];
                $newTrain->deleted = $train[8];
                $newTrain->save();
            }
        }
    }
}

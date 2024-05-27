<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        $agency = ['Frecciarossa', 'Intercity', 'Eurocity', 'Frecciargento', 'Frecciabianca'];
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->agency = $faker->randomElement($agency);
            $newTrain->departure_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_station = $faker->city();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->bothify('??-####');
            $newTrain->number_carriages = $faker->numberBetween(5, 50);
            $newTrain->in_time = $faker->boolean();
            $newTrain->delate = $faker->boolean();

            $newTrain->save();
        }
    }
}

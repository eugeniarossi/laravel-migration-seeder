<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 40; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-5 days', '+5 days');
            $newTrain->arrival_time = Carbon::parse($newTrain->departure_time)->addHours(rand(1, 23));
            $newTrain->train_code = $faker->bothify('???###');
            $newTrain->coaches = $faker->numberBetween(1, 15);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}

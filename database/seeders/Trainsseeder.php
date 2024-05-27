<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Trains;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Trainsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('trains')->truncate();

        $company = ['Italo', 'Trenitalia'];

        for($i = 0; $i < 50; $i++){
            $newTrain = new Trains();
            $newTrain->company = $faker->randomElement($company);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 day','now');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '+1 day');
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{3}[A-Z]{3}[0-9]{1}');
            $newTrain->coach_number = $faker->numberBetween(1, 11);
            $newTrain->delay = $faker->boolean(0);
            $newTrain->deleted = $faker->boolean(0);
            $newTrain->save();

        }
    }
}

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
        for($i = 0; $i < 50; $i++){
            $newTrain = new Trains();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->bothify('?????-#####');
            $newTrain->coach_number = $faker->numberBetween(1, 11);
            $newTrain->delay = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();

        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        
        for ($i=0; $i <= 30; $i++) { 
            //istazio un oggetto del modello
            $new_train = new Train();
    
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            while($new_train->departure_station === $new_train->arrival_station){
                $new_train->arrival_station = $faker->city();
            }
            $new_train->departure_time = $faker->dateTimeBetween('-1 days', '+2 days');
            $new_train->arrival_time = $faker->dateTime();
            $new_train->code = $faker->numberBetween(0,100) . $faker->randomLetter() . $faker->randomLetter();
            $new_train->wagon = $faker->randomDigit();
            $new_train->is_in_time = rand(0,1);
            $new_train->is_cancelled = rand(0,1);
            //salva il recordo nel DB
            $new_train->save();
        }
    }
}

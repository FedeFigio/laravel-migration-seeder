<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;
use Carbon\Carbon;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $randomDate = $faker->date();
            $travel = new Travel();
            $travel->name = $faker->sentence(6);;
            $travel->description = $faker->sentence(100);
            $travel->price = $faker->randomFloat(2, 1000, 10000);
            $travel->start_date = $randomDate;
            $travel->end_date = Carbon::parse($randomDate)->addDays(10);
            $travel->destination = 'brazil';
            $travel->has_hotel = $faker->boolean();
            $travel->save();
        }
    }
}

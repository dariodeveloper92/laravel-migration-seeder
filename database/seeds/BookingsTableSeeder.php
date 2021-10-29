<?php

use Illuminate\Database\Seeder;
use App\Booking;
use Faker\Generator as Faker;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_booking = new Booking();
            $new_booking->city = $faker->city() ;
            $new_booking->room = 5 . $i;
            $new_booking->baby = $faker->numberBetween(1, 3);
            $new_booking->adults = $faker->numberBetween(1, 5);
            $new_booking->price = $faker->randomFloat(2, 5000, 100000);
            $new_booking->save();
        }
    }
}

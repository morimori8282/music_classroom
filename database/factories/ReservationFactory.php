<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $faker = Faker\Factory::create('ja_JP');
        $ret_start = $this->faker->dateTimeBetween('-50day', '-10day');

        // echo var_dump($ret_start);
        // dd ($ret_start);

        return [
            //
            'user_id' => $this->faker->numberBetween(1,5),
            'start' => $ret_start->format('Y-m-d H:i:s'),
            'end' => $ret_start->modify('+1hour')->format('Y-m-d H:i:s'),
            'status' => '1',
        ];
    }
}

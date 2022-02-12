<?php

namespace Database\Factories;
use App\Models\Reservation;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'user' => $this->faker->numberBetween(1,10),
            'product' =>$this->faker->numberBetween(1,10),
            'reservationdate'=>Carbon::now(),
            'amount'=>$this->faker->numberBetween(1,10),
        ];
    }
}

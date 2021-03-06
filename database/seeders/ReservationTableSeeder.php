<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ride;
class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::factory()->count(10)->create();
    }
}

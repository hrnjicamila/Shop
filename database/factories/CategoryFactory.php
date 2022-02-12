<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'typeofclothing'=>$this->faker->randomElement(['Jakne i kaputi','Džemperi','Hlače','Majice','Trenerke','Dkserice','Pidžame','Suknje','Hajine','Košulje','Bluze i tunike']),
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description'=>'opis proizvoda',
            'price'=>$this->faker->randomNumber(1,1000),
            'code'=>$this->faker->unique()->numberBetween(1,1000),
            'type'=>$this->faker->randomElement(['M','Ž']),
            'color'=>$this->faker->randomElement(['crvena','plava','zelena','roza']),
            'size'=>$this->faker->randomElement(['XS','S','M','L','XL']),

            'category'=>$this->faker->numberBetween(1,3),
            'brand'=>$this->faker->numberBetween(1,3)


        ];
    }
}

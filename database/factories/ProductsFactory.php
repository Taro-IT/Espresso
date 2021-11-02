<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1, true),
            'description' => $this->faker->text(),
            'image' =>$this->faker->image(),
            'author' =>$this->faker->name(),
            'price' =>$this->faker->numberBetween(0,1000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company() ,
            'description' => $this->faker->sentence() ,
            'place' => $this->faker->country()  ,
            'phone' =>  $this->faker->e164PhoneNumber() ,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'nombre' => $this->faker->name(),
                'apellidos' => $this->faker->firstName(),
                'documento'=> $this->faker->text(5),
                'telefono' => $this->faker->phoneNumber(),
                'email'=>  $this->faker->unique()->safeEmail,
                'direccion'=> $this->faker->address(),
                
        
            
        ];
    }
}

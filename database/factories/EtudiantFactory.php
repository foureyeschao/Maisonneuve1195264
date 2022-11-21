<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;


class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->streetAddress,
            'phone' =>$this->faker->numerify('+1(###)-###-####'),
            'email' => $this->faker->unique()->Email(),
            'date_de_naissance' => $this->faker->date($format='Y-m-d',$max='2007-01-01'),
            'villeId' => Ville::all()->random()->id,
        ];
    }
}

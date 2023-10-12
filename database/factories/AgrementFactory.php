<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agrement>
 */
class AgrementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'AGREMENT_DATE' => $this->faker->dateTime(),
            'AGREMENT_HEURE' => $this->faker->time(),
            'AGREMENT_TITULAIRE' => $this->faker->name,
            'AGREMENT_DOSSIER' => $this->faker->text(20),
            'AGREMENT_AUTORISATION' => $this->faker->text(20),
            'AGREMENT_GERANT' => $this->faker->text(50),
            'AGREMENT_VEHICUL_ID' => $this->faker->numberBetween(1, 1000),
            'AGREMENT_PLACES' => $this->faker->numberBetween(1, 10),
            'AGREMENT_NBR_PLACES' => $this->faker->text(15),
            'AGREMENT_DATE_VALABLE' => $this->faker->dateTime(),
            'AGREMENT_MONTANTLOYER' => $this->faker->randomFloat(2, 0, 10000),
            'AGREMENT_LIGNE' => $this->faker->text(40),
        ];
    }
}

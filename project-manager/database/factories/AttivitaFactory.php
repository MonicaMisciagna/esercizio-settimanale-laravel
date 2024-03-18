<?php

namespace Database\Factories;

use App\Models\Attivita;
use App\Models\Progetto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttivitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attivita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $progetto_id = Progetto::inRandomOrder()->first()->id;

        return [
            'nome' => $this->faker->sentence,
            'descrizione' => $this->faker->paragraph,
            'stato' => $this->faker->randomElement(['in_corso', 'concluso']),
            'progetto_id' => $progetto_id,
        ];
    }
}

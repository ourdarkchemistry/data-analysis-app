<?php

namespace Database\Factories;

use App\Models\DataRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataRecordFactory extends Factory
{
    protected $model = DataRecord::class;

    public function definition()
    {
        return [
            'field1' => $this->faker->word,
            'field2' => $this->faker->word,
            'field3' => $this->faker->numberBetween(1, 100),
        ];
    }
}

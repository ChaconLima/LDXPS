<?php

namespace Database\Factories\LDXPS;

use App\Models\LDXPS\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vendor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DSNOME' => $this->faker->name,
            'CDTAB' => rand(5000,10000),
            'DTNASC' => $this->faker->dateTimeBetween('1970-01-01', '2000-12-31')->format('Y-m-d H:i:s')
        ];
    }
}

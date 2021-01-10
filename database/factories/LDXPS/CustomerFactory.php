<?php

namespace Database\Factories\LDXPS;

use App\Models\LDXPS\Customer;
use App\Models\LDXPS\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['PF','PJ',''];
        return [            
            'DSNOME'=> $this->faker->name,
            'IDTIPO'=> $type[rand(0,2)],
            'CDVEND'=> Vendor::factory(),
            'DSLIM' => (rand(150000,2500000))/100,
        ];
    }
}

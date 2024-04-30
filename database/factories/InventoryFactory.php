<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstNameFemale(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Inventory $inventory){
            foreach(Material::pluck('id')->take(rand(1,10)) as $id)
            {
                $inventory->materials()->attach($id,[
                    'quantity'=>rand(1,9),
                ]);
            }
        });
    }
}

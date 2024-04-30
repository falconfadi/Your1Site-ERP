<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\MaterialUnit;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->colorName(),
            'type'=>$this->faker->randomElement(['1','2']),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Material $material){
            $material->units()->attach(Unit::pluck('id')->random(),[
                'is_default'=>1,
                'main_unit'=>null,
                'rate_to_main_unit'=>0
            ]);
            $def = $material->units()->where('is_default',1)->first();
            $material->units()->attach(Unit::where('id','!=',$def->pivot->unit_id)->first()->id,[
                'is_default'=>0,
                'main_unit'=>$def->pivot->unit_id,
                'rate_to_main_unit'=>rand(5,10)
            ]);
            
        });
    }
}

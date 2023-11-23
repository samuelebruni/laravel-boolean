<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = ['Rum', 'Lime', 'Sugar', 'Mint', 'Tonic Water', 'Ice', 'Vodka', 'Triple Sec', 'Cranberry Juice', 'Gin', 'Tequila', 'Wiskhey', 'Bitter', 'Orange Peel', 'Orange juice', 'Lemonsoda'];

        foreach ($ingredients as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient;
            $newIngredient->slug = Str::slug($newIngredient->name);
            $newIngredient->save();
        }
    }
}

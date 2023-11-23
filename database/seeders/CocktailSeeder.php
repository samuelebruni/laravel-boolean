<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;
use Illuminate\Support\Str;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = config('cocktails');

        foreach ($cocktails as $cocktail) {
            $new_cocktail = new Cocktail();
            $new_cocktail->thumb = $cocktail['thumb'];
            $new_cocktail->name = $cocktail['name'];
            $new_cocktail->slug = Str::slug($cocktail['name']);
            $new_cocktail->price = $cocktail['price'];
            $new_cocktail->alcoholic = $cocktail['alcoholic'];
            $new_cocktail->preparation = $cocktail['preparation'];
            $new_cocktail->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 1,
            'ingredients' => 'kluwak',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 1,
            'ingredients' => 'sego',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 1,
            'ingredients' => 'toge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 2,
            'ingredients' => 'Daun Salam',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 1,
            'ingredients' => 'Daun Jeruk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

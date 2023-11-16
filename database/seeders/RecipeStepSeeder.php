<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 1,
            'step' => 'Pertama Masuka Ini kedalam Mangkok',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 1,
            'step' => 'Selanjutnya Rebus kluwwak',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 1,
            'step' => 'Masukan Toge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 1,
            'step' => 'Blender Sambal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

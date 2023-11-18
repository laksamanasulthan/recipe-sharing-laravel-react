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
            'recipe_post_id' => 3,
            'ingredients' => '1 bungkus pasta spaghetti/fettucini atau secukupnya
                                200 ml susu cair,sisakan sedikit untuk campuran telur
                                1/2 sdt maizena/trigu
                                1/2 batang keju cheddar/quick melt parut
                                3 lembar smoked beef/sosis
                                1 sdm butter/mentega
                                2 siung bawang putih haluskan
                                1/2 buah bawang bombay potong2
                                1/2 sdt lada hitam/lada biasa
                                1/2 sdt garam
                                secukupnya oregano
                                1 sdm minyak goreng
                                1 butir telur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 2,
            'ingredients' => '1 bungkus pasta spaghetti/fettucini atau secukupnya
                                200 ml susu cair,sisakan sedikit untuk campuran telur
                                1/2 sdt maizena/trigu
                                1/2 batang keju cheddar/quick melt parut
                                3 lembar smoked beef/sosis
                                1 sdm butter/mentega
                                2 siung bawang putih haluskan
                                1/2 buah bawang bombay potong2
                                1/2 sdt lada hitam/lada biasa
                                1/2 sdt garam
                                secukupnya oregano
                                1 sdm minyak goreng
                                1 butir telur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_ingredients')->insert([
            'recipe_post_id' => 1,
            'ingredients' => '
                                1 bungkus pasta spaghetti/fettucini atau secukupnya
                                200 ml susu cair,sisakan sedikit untuk campuran telur
                                1/2 sdt maizena/trigu
                                1/2 batang keju cheddar/quick melt parut
                                3 lembar smoked beef/sosis
                                1 sdm butter/mentega
                                2 siung bawang putih haluskan
                                1/2 buah bawang bombay potong2
                                1/2 sdt lada hitam/lada biasa
                                1/2 sdt garam
                                secukupnya oregano
                                1 sdm minyak goreng
                                1 butir telur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

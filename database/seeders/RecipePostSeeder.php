<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipe_posts')->insert([
            'recipe_user_id' => 1,
            'judul' => 'Resep Rawon Enak',
            'desc' => 'Konon katanya resep rawon daging sapi khas Jawa Timur adalah salah satu masakan yang paling tua di Indonesia dan benar-benar otentik. Kita juga mengenal banyak pengaruh asing yang sudah berasimilasi dengan kearifan lokal dan kini menjadi berbagai masakan tradisional. Tapi rawon terhitung sebagai yang paling klasik dan penampilannya yang unik ini sudah dikenal sejak abad ke 10!',
            'photo' => 'photo.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_posts')->insert([
            'recipe_user_id' => 2,
            'judul' => 'Resep Rawon Super',
            'desc' => 'Konon katanya resep rawon daging sapi khas Jawa Timur adalah salah satu masakan yang paling tua di Indonesia dan benar-benar otentik. Kita juga mengenal banyak pengaruh asing yang sudah berasimilasi dengan kearifan lokal dan kini menjadi berbagai masakan tradisional. Tapi rawon terhitung sebagai yang paling klasik dan penampilannya yang unik ini sudah dikenal sejak abad ke 10!',
            'photo' => 'photo.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_posts')->insert([
            'recipe_user_id' => 2,
            'judul' => 'Resep Soto',
            'desc' => 'Konon katanya resep rawon daging sapi khas Jawa Timur adalah salah satu masakan yang paling tua di Indonesia dan benar-benar otentik. Kita juga mengenal banyak pengaruh asing yang sudah berasimilasi dengan kearifan lokal dan kini menjadi berbagai masakan tradisional. Tapi rawon terhitung sebagai yang paling klasik dan penampilannya yang unik ini sudah dikenal sejak abad ke 10!',
            'photo' => 'photo.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

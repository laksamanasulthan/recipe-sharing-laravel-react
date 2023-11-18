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
            'step' => 'Tumis bawang putih yang sudah dicincang halus hingga harum.
                        Lalu, tambahkan telur yang sudah dikocok, lalu orak-arik.
                        Kemudian, tambahkan daging ayam yang sudah dicincang halus dan juga sosis. Masukkan daun bawang yang sudah diiris halus. Tumis semua bahan yang sudah dimasukkan.
                        Masukkan nasi, kemudian aduk sampai merata.
                        Tambahkan bumbu-bumbu seperti garam, merica, penyedap rasa, dan kecap ikan.
                        Setelah semua sudah tercampur, aduk kembali semuanya hingga merata, sampai tercium aroma sedap.
                        Jika sudah matang, pindahkan ke piring. Taburi bawang merah goreng sebagai tambahan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 2,
            'step' => 'Tumis bawang putih yang sudah dicincang halus hingga harum.
                        Lalu, tambahkan telur yang sudah dikocok, lalu orak-arik.
                        Kemudian, tambahkan daging ayam yang sudah dicincang halus dan juga sosis. Masukkan daun bawang yang sudah diiris halus. Tumis semua bahan yang sudah dimasukkan.
                        Masukkan nasi, kemudian aduk sampai merata.
                        Tambahkan bumbu-bumbu seperti garam, merica, penyedap rasa, dan kecap ikan.
                        Setelah semua sudah tercampur, aduk kembali semuanya hingga merata, sampai tercium aroma sedap.
                        Jika sudah matang, pindahkan ke piring. Taburi bawang merah goreng sebagai tambahan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('recipe_steps')->insert([
            'recipe_post_id' => 3,
            'step' => 'Tumis bawang putih yang sudah dicincang halus hingga harum.
                        Lalu, tambahkan telur yang sudah dikocok, lalu orak-arik.
                        Kemudian, tambahkan daging ayam yang sudah dicincang halus dan juga sosis. Masukkan daun bawang yang sudah diiris halus. Tumis semua bahan yang sudah dimasukkan.
                        Masukkan nasi, kemudian aduk sampai merata.
                        Tambahkan bumbu-bumbu seperti garam, merica, penyedap rasa, dan kecap ikan.
                        Setelah semua sudah tercampur, aduk kembali semuanya hingga merata, sampai tercium aroma sedap.
                        Jika sudah matang, pindahkan ke piring. Taburi bawang merah goreng sebagai tambahan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

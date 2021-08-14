<?php

use App\Artikel;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Perulangan sebanyak $x untuk membuat artikel dan simpan
         * Tabel Artikel
         */
        $x = 10;
        for($i=0; $i < $x; $i++){
            $faker = Faker::create();
            $title = $faker->sentence;
            $slug = Str::slug($title, '-');
            Artikel::create([
                'title'     => $title,
                'slug'      => $slug,
                'content'   => $faker->text(2000),
                // rand() isi dengan id pertama dan terakhir di tabel kategori
                'kategori_id'   => rand(1,6),
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }   
    }
}

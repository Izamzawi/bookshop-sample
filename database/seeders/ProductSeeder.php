<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Kitab Rasa',
                'price' => '48000',
                'category' => 'Cerpen',
                'description' => 'Warung makan yang menarik adalah warung makan yang di dalamnya tersimpan kisah manusia yang bersambung menghadapi hidup ini.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/08/KR-Depan-768x1119.jpg'
            ],
            [
                'name' => 'Merasa Pintar',
                'price' => '68000',
                'category' => 'Esai',
                'description' => 'A collection of writing in a span of 2 years time.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/07/Merasa-Pintar-Bodoh-Saja-Tak-Punya.jpeg'
            ],
            [
                'name' => 'Dunia Kali',
                'price' => '78000',
                'category' => 'Biografi',
                'description' => 'A record of interaction between a father and his son.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/02/dunia-kali-cover-baru-depan.jpeg'
            ],
            [
                'name' => 'Konspirasi Hujan',
                'price' => '48000',
                'category' => 'Romance',
                'description' => 'A collection of short story from loneliness.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/02/konspirasi-hujan-1.jpg'
            ],
        ]);
    }
}

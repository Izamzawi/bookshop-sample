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
                'name' => 'Cinta Tak Pernah Tepat Waktu',
                'price' => '78000',
                'category' => 'Novel',
                'author' => 'Puthut EA',
                'description' => 'A sad romance about a guy searching for his love.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2018/11/Cinta-Tak-Pernah-Tepat-Waktu.jpg'
            ],
            [
                'name' => 'Kitab Rasa',
                'price' => '48000',
                'category' => 'Short stories',
                'author' => 'Puthut EA',
                'description' => 'In this small resto, people tell their stories about life.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/08/KR-Depan-768x1119.jpg'
            ],
            [
                'name' => 'Merasa Pintar',
                'price' => '68000',
                'category' => 'Essay',
                'author' => 'Rusdi Mathari',
                'description' => 'A collection of writing in a span of 2 years time.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/07/Merasa-Pintar-Bodoh-Saja-Tak-Punya.jpeg'
            ],
            [
                'name' => 'Dunia Kali',
                'price' => '78000',
                'category' => 'Biography',
                'author' => 'Puthut EA',
                'description' => 'A record of interaction between a father and his son.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/02/dunia-kali-cover-baru-depan.jpeg'
            ],
            [
                'name' => 'Konspirasi Hujan',
                'price' => '48000',
                'category' => 'Romance',
                'author' => 'Adia Puja',
                'description' => 'A collection of short story from loneliness.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/02/konspirasi-hujan-1.jpg'
            ],
            [
                'name' => '24 Jam Bersama gaspar',
                'price' => '68000',
                'category' => 'Novel',
                'author' => 'Sabda Armandio',
                'description' => 'A small crew plans to rob a jewelry shop.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/12/Front-768x1124.png'
            ],
            [
                'name' => 'Manusia-Manusia Teluk',
                'price' => '48000',
                'category' => 'Short stories',
                'author' => 'Artie Ahmad',
                'description' => 'A life of couple that is threatened by territory appropriation.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2020/02/Manusia-Teluk-Depan-768x1131.jpg'
            ],
            [
                'name' => 'Aleppo',
                'price' => '78000',
                'category' => 'Biography',
                'author' => 'Rusdi Mathari',
                'description' => 'A writer\'s story collection of how he became a husband and father.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2020/05/Aleppo.jpg'
            ],
            [
                'name' => 'Sunyi di Dada Sumirah',
                'price' => '78000',
                'category' => 'Novel',
                'author' => 'Artie Ahmad',
                'description' => 'Three ladies in three different generation and their fate of life.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2020/02/Sunyi-Depan-768x1193.jpg'
            ],
            [
                'name' => 'Ambivert',
                'price' => '58000',
                'category' => 'Romance',
                'author' => 'Arshy Mentari',
                'description' => 'A woman\'s journey in facing quarter-life crisis.',
                'image' => 'https://bukumojok.com/wp-content/uploads/2020/05/Ambivert.jpg'
            ],
            [
                'name' => 'Orang-Orang Gila',
                'price' => '68000',
                'category' => 'Novel',
                'author' => 'Han Gagas',
                'description' => 'In this crazy world, who\'s exactly the crazies are?',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/02/Orang-Orang-Gila-cover.jpeg'
            ],
            [
                'name' => 'Muslimah yang Diperdebatkan',
                'price' => '78000',
                'category' => 'Essay',
                'author' => 'Kalis Mardiasih',
                'description' => 'A collection of women experience in religiosity and humanity',
                'image' => 'https://bukumojok.com/wp-content/uploads/2019/08/Muslimah-yang-Diperdebatkan-NC.jpg'
            ],
        ]);
    }
}

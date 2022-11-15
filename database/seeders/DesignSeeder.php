<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Design;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'tittle' => 'Dino Gallery Apps',
                'category_id' => 2,
                'user_id' => 1,
                'slug' => 'dino-gallery-apps',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_1.jpg'
            ],
            [
                'tittle' => 'Mobile Sallery Dasboard',
                'category_id' => 1,
                'user_id' => 2,
                'slug' => 'mobile-sallery-dasboard',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_2.jpg'
            ],
            [
                'tittle' => 'Plant Shop Apps',
                'category_id' => 3,
                'user_id' => 3,
                'slug' => 'plant-shop-apps',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_3.jpg'
            ],
            [
                'tittle' => 'Food Ninja',
                'category_id' => 4,
                'user_id' => 4,
                'slug' => 'food-ninja',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_4.jpg'
            ],
            [
                'tittle' => 'Dasboard UI',
                'category_id' => 5,
                'user_id' => 5,
                'slug' => 'dasboard-ui',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_5.jpg'
            ],
            [
                'tittle' => 'Weather Apps',
                'category_id' => 2,
                'user_id' => 5,
                'slug' => 'weather-apps',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_6.jpg'
            ],
        ])->each(function ($design) {
            Design::create($design);
        });
    }
}
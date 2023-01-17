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
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_1.jpg'
            ],
            [
                'tittle' => 'Mobile Sallery Dasboard',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_2.jpg'
            ],
            [
                'tittle' => 'Plant Shop Apps',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_3.jpg'
            ],
            [
                'tittle' => 'Food Ninja',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_4.jpg'
            ],
            [
                'tittle' => 'Dasboard UI',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_5.jpg'
            ],
            [
                'tittle' => 'Weather Apps',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/design/design_6.jpg'
            ],
        ])->each(function ($design) {
            Design::create($design);
        });
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;

class ProjectSeeder extends Seeder
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
                'tittle' => "Photografer's Memories",
                'slug' => 'photografer-s-memories',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_1.jpg'
            ],
            [
                'tittle' => 'Art Gallery Background',
                'slug' => 'art-gallery-background',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_2.jpg'
            ],
            [
                'tittle' => 'Crypto Transanction',
                'slug' => 'crypto-transanction',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_3.jpg'
            ],
        ])->each(function ($project) {
            project::create($project);
        });
    }
}
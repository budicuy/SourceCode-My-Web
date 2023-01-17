<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

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
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_1.jpg'
            ],
            [
                'tittle' => 'Art Gallery Background',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_2.jpg'
            ],
            [
                'tittle' => 'Crypto Transanction',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'image' => 'img/project/project_3.jpg'
            ],
        ])->each(function ($project) {
            project::create($project);
        });
    }
}

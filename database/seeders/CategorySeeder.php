<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
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
                'category_name' => 'Web Design',
                'slug' => 'web-design',
            ],
            [
                'category_name' => 'Mobile Apps',
                'slug' => 'mobile-apps',
            ],
            [
                'category_name' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
            ],
            [
                'category_name' => 'Branding',
                'slug' => 'branding',
            ],
            [
                'category_name' => 'Photography',
                'slug' => 'photography',
            ],
        ])->each(function ($category) {
            Category::create($category);
        });
    }
}

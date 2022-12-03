<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project as project;
use App\Models\User as user;
use App\Models\Design as design;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::factory(23)->create();
        $this->call([
            CategorySeeder::class,
            DesignSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}

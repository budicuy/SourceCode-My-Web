<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\User as budi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
                'name' => 'BUDIANNOR',
                'email' => 'budibudiannor90@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]
        ])->each(function ($user) {
            budi::create($user);
        });
    }
}

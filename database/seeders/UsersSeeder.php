<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password
            ]);
        }
    }
}

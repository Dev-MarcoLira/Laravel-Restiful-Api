<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password
            ]);

            Books::create([
                'title'=>$faker->sentence,
                'author'=>$faker->name,
                'description'=>$faker->sentence
            ]);
        }
    }
}

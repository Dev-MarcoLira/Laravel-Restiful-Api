<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++){
            Books::create([
                'title'=>$faker->sentence,
                'author'=>$faker->name,
                'description'=>$faker->sentence
            ]);
        }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //per ripristinare la tabella project
        Project::truncate();
            for ($i = 0; $i < 10; $i++) {
                Project::create([
                    //titolo con 3 parole generate da faker
                    "title" => fake()->sentence(3),
                    //titolo con 5 frasi generate da faker
                    "description"=> fake()->paragraph(5),
                    // ricordati di chiedere questo 
                    "image" => fake()->imageUrl(640, 480, 'project', true),
                ]);
        }
    }
}
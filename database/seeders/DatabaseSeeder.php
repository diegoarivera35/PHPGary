<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); 
        // Asi creamos el usuario que va a ser el admin de todo
        User::factory()->create([
            'name' => 'Diego',
            'email' => 'diegoarivera35@gmail.com',
            'password' => 'password'
        ]);

        //asi creamos lo cursos del la base de datos
        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225',
        ]);

        Course::factory()->create([
            'courseName' => 'JavaScript',
            'courseID' => 'HTTP5226',
        ]);

        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5227',
        ]);
        

        //Para hacer 20 estudiantes random usando faker
        Student::factory(20)->create();
        
    }
}

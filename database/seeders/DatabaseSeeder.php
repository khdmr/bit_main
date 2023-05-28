<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Modul::factory(10)->create();
        \App\Models\CourseCategory::factory(4)->create();
        \App\Models\Course::factory(8)->create();
        \App\Models\Course_Model::factory(10)->create();
        \App\Models\Material::factory(8)->create();
        \App\Models\BlogPost::factory(10)->create();

        // $coursecategory = ['Web Development', 'Mobile Development', 'Game Development', 'Data Science'];
        // foreach ($coursecategory as $category) {
        //     \App\Models\CourseCategory::factory()->create([
        //         'name_category' => $category,
        //     ]);
        // }

        // $courses = ['Web Developments', 'Mobile Developments', 'Game Developments', 'Data Sciences'];
        // $i = 1;
        // foreach ($courses as $category) {
        //     \App\Models\Course::factory()->create([
        //         'title' => $category,
        //         'id_category' => $i++,
        //         'summary' => fake()->paragraph(1),
        //         'price' => fake()->randomNumber(5, true),
        //     ]);
        // }  

        // \App\Models\Course_Model::factory(10)->create();
        // \App\Models\Material::factory(8)->create();
        // \App\Models\BlogPost::factory(10)->create();   

        $roles = ['admin', 'mentor', 'user'];
        foreach ($roles as $role) {
            \App\Models\Role::factory()->create([
                'role_name' => $role,
            ]);
        }   
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => fake()->name(),
        //     'role_id' => 1, // 'admin
        //     'email' => 'abc@gmail.com',
        //     'username' => fake()->unique()->userName(),
        //     'no_telp' => fake()->unique()->phoneNumber(),
        //     'password' => '123', // password
        // ]);

        
    }
}

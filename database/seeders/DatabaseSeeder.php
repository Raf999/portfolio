<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'firstname'        => 'Gafaru',
            'lastname'         => 'Rafiu',
            'othernames'       => 'Abdul',
            'title'            => 'Fullstack Developer',
            'date_of_birth'    => '2000-01-07',
            'website'          => 'www.example.com',
            'bio'              => 'Motivated Computer Science student with 5 years’ experience in teaching and administration. Skilled in organization and programming, eager to apply technical expertise in dynamic, tech-driven environments.',
            'experience_years' => 5,
            'profile_image'    => 'assets/img/profile.jpg',
            'email'            => 'rafiugafaru7@gmail.com',
            'email_verified_at'=> now(),
            'primary_contact'  => '+233530241453',
            'secondary_contact'=> '+233504266853',
            'address'          => 'GW-0292-6414, Agya herbal, North Ofankor, Accra, Ghana',
            'password'         => Hash::make('Aura24/7'),
        ]);

        Project::create([
            'user_id'    => 1,
            'title'       => 'Student Mental Health Prediction',
            'category'    => 'Machine Learning',
            'description' => 'End of semester machine learning project done to predict student mental health issues. Using a Stacked Model combining various algorithms.',
            'image_url'    => 'https://plus.unsplash.com/premium_photo-1682002256864-d1faf0d9b055?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'project_url'  => 'https://student-mental-health-group7.streamlit.app/',
            'source_code_url' => 'https://github.com/Raf999/student-mental-health-app'
        ]);


        Skill::insert([
            ['user_id' => 1, 'name' => 'Laravel', 'proficiency' => 90],
            ['user_id' => 1, 'name' => 'Python', 'proficiency' => 75],
            ['user_id' => 1, 'name' => 'PHP', 'proficiency' => 70],
            ['user_id' => 1, 'name' => 'MySQL', 'proficiency' => 60],
        ]);



    }
}

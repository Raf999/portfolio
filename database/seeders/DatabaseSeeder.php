<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Edu;
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

        Edu::insert( [
                'institution' => 'Odorgonno Senior High School',
                'degree' => 'W.A.S.S.C.E',
                'start_date' => '2015-09-14',
                'end_date' => '2018-05-10',
                'icon_url' => 'assets/img/school/ossa-logo.jpeg',
                'created_at' => now(),
                'updated_at' => now(),

        ]);

        Edu::insert( [
                'institution' => 'Accra Technical University',
                'degree' => 'HND Computer Science',
                'start_date' => '2022-01-11',
                'end_date' => '2024-09-17',
                'icon_url' => 'assets/img/school/atu-logo.png',
                'created_at' => now(),
                'updated_at' => now(),

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

        Project::create([
            'user_id'    => 1,
            'title'       => 'Student Mental Health Prediction',
            'category'    => 'Machine Learning',
            'description' => 'End of semester machine learning project done to predict student mental health issues. Using a Stacked Model combining various algorithms.',
            'image_url'    => 'https://plus.unsplash.com/premium_photo-1682002256864-d1faf0d9b055?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'project_url'  => 'https://student-mental-health-group7.streamlit.app/',
            'source_code_url' => 'https://github.com/Raf999/student-mental-health-app'
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
            ['user_id' => 1, 'name' => 'Java', 'proficiency' => 65],
            ['user_id' => 1, 'name' => 'PHP', 'proficiency' => 70],
            ['user_id' => 1, 'name' => 'MySQL', 'proficiency' => 60],
            ['user_id' => 1, 'name' => 'Microsoft Office', 'proficiency' => 90],
            ['user_id' => 1, 'name' => 'Photoshop', 'proficiency' => 90],
        ]);

        $user = User::first();

        if ($user) {
            Testimonial::create([
                'user_id'   => $user->id,
                'name'      => 'Mr. Samuel Annor',
                'role'      => 'Director & Founder',
                'company'   => 'Royalty Mont. Int. School',
                'image_url' => 'https://randomuser.me/api/portraits/men/32.jpg',
                'rating'    => 5,
                'message'   => 'Working with you was an absolute pleasure! The project exceeded expectations and was delivered ahead of schedule.',
            ]);

            Testimonial::create([
                'user_id'   => $user->id,
                'name'      => 'Sara Wilsson',
                'role'      => 'Designer',
                'company'   => 'Creative Studio',
                'image_url' => 'https://randomuser.me/api/portraits/women/44.jpg',
                'rating'    => 4,
                'message'   => 'Amazing eye for design and detail. Your creativity transformed our brand identity completely.',
            ]);

            Testimonial::create([
                'user_id'   => $user->id,
                'name'      => 'Jena Karlis',
                'role'      => 'Store Owner',
                'company'   => 'LocalMart',
                'image_url' => 'https://randomuser.me/api/portraits/women/65.jpg',
                'rating'    => 5,
                'message'   => 'Professional, reliable, and easy to work with. I would recommend your services to anyone!',
            ]);
        }



    }
}

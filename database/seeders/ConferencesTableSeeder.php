<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([

            [
                'name' => 'Web Summit',
                'location' => 'Lisbon, Portugal',
                'description' => 'Web Summit is a technology conference held annually in Lisbon, bringing together tech industry leaders, startups, and innovators from around the world.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'TED Conference',
                'location' => 'Vancouver, Canada',
                'description' => 'TED Conference is a global gathering that features a wide range of speakers sharing ideas and insights on various topics, including technology, entertainment, design, science, and more.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Dreamforce',
                'location' => 'San Francisco, USA',
                'description' => 'Dreamforce is an annual conference organized by Salesforce, focusing on customer relationship management (CRM) and cloud computing technologies.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'CES (Consumer Electronics Show)',
                'location' => 'Las Vegas, USA',
                'description' => 'CES is a renowned trade show that showcases the latest innovations and advancements in consumer electronics, including gadgets, smart devices, and emerging technologies.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'WWDC (Apple Worldwide Developers Conference)',
                'location' => 'San Jose, USA',
                'description' => 'WWDC is an annual conference held by Apple, providing developers with insights into the latest advancements in Apple technologies, including software, hardware, and services.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Google I/O',
                'location' => 'Mountain View, USA',
                'description' => 'Google I/O is an annual developer conference organized by Google, showcasing their latest products, technologies, and platforms, including Android, Google Cloud, AI, and more.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'SXSW (South by Southwest)',
                'location' => 'Austin, USA',
                'description' => 'SXSW is an interdisciplinary conference and festival that celebrates the convergence of film, music, and interactive media. It features sessions, performances, and exhibitions from various creative industries.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'AWS re:Invent',
                'location' => 'Las Vegas, USA',
                'description' => 'AWS re:Invent is the largest global cloud computing conference organized by Amazon Web Services (AWS). It provides deep technical sessions, workshops, and announcements related to cloud services.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Mobile World Congress',
                'location' => 'Barcelona, Spain',
                'description' => 'Mobile World Congress is the world\'s largest exhibition and conference for the mobile industry, featuring the latest advancements in mobile technologies, devices, and services.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Adobe MAX',
                'location' => 'Los Angeles, USA',
                'description' => "Adobe MAX is an annual creativity conference that brings together designers, developers, and artists to learn about Adobe's creative products, explore new tools, and gain inspiration.",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'E3 (Electronic Entertainment Expo)',
                'location' => 'Los Angeles, USA',
                'description' => 'E3 is a premier trade event for the video game industry, featuring product launches, game announcements, and showcases from major game developers and publishers.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'RSA Conference',
                'location' => 'San Francisco, USA',
                'description' => 'RSA Conference is a leading cybersecurity conference that brings together experts, professionals, and organizations to discuss and address the latest trends, challenges, and innovations in the field.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'TEDx',
                'location' => 'Various Locations Worldwide',
                'description' => 'TEDx events are independently organized TED-like conferences held worldwide, showcasing inspiring talks and ideas from local communities on a wide range of topics.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Strata Data Conference',
                'location' => 'Various Locations Worldwide',
                'description' => 'Strata Data Conference is a conference that focuses on big data, data science, and machine learning. It provides insights, case studies, and best practices for handling and analyzing data.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Collision',
                'location' => 'Various Locations Worldwide',
                'description' => 'Collision is a technology conference that brings together startups, investors, and industry leaders to discuss emerging technologies, innovation, and entrepreneurship.',
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ]


        ]);
    }
}

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
        $this->call([
            ServiceSeeder::class,
            FaqSeeder::class,
            SocialSeeder::class,
            MembershipSeeder::class,
            ProjectSeeder::class,
            ProjectGalleryImageSeeder::class,
            TeamMemberSeeder::class,
        ]);
    }
}

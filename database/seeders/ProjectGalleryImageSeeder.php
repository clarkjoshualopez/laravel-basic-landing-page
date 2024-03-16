<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectGalleryImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectGalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming each project will have multiple gallery images
        // You might need to adjust the logic based on your application's requirements
        $projects = Project::all();

        foreach ($projects as $project) {
            ProjectGalleryImage::factory()->count(5)->create([
                'project_id' => $project->id,
            ]);
        }
    }
}

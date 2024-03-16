<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TeamMember;

class LandingPageController extends Controller
{
    public function index()
    {
        $projects = Project::limit(3)->get();
        $teamMembers = TeamMember::limit(8)->get();

        return view('landing-page', [
            'projects' => $projects,
            'teamMembers' => $teamMembers,
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::all();

        $solarProjects = Project::all()->where('type', 'Solar');
        $oheProjects = Project::all()->where('type', 'OHE');


        return view('projects', compact('solarProjects','oheProjects'));

    }
}

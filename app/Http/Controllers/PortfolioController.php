<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id')->get();

        return view('home', [
            'projects' => $projects,
            'categories' => $projects->pluck('category')->unique()->values(),
        ]);
    }
}
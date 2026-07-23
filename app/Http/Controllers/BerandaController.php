<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;

class BerandaController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $projects = Project::with('images')->get();

        return view('beranda', compact('projects'));
    }
}

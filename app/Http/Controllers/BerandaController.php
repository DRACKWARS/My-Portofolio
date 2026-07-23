<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;

class BerandaController extends Controller
{
    public function index()
    {
        $projects = collect([]); // <- Ganti dengan ini

    return view('beranda', compact('projects'));
    }
}

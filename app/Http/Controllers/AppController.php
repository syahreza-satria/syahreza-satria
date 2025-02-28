<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        return view('index', compact('projects'));
    }

    public function project()
    {
        $projects = Project::latest()->take(3)->get();
        return view('project', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

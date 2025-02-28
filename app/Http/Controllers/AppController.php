<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AppController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        return view('index', compact('projects'));
    }

    public function downloadCV()
    {
        $filePath = storage_path('app/public/cv/CV_Syahreza_Satria_Alfath.pdf'); // Ubah path ke storage langsung
        $fileName = 'CV_Syahreza_Satria_Alfath.pdf';

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath, $fileName);
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

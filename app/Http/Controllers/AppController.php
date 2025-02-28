<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AppController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(2)->get();
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

    public function project(Request $request)
    {
        $categories = Category::all(); // Ambil semua kategori
        $projects = Project::when($request->category_id, function ($query) use ($request) {
            return $query->where('category_id', $request->category_id);
        })->latest()->get();
        return view('project', compact('projects', 'categories'));
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

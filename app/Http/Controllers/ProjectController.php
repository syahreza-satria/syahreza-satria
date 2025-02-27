<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('dashboards.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboards.projects.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'image' => 'required|file|image|max:2048',
            'url' => 'nullable|url',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $project = Project::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'url' => $request->url,
        ]);

        return redirect()->route('dashboard.projects.index');
    }

    public function show($id)
    {
        return view('projects.show');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all();
        return view('dashboards.projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'image' => 'nullable|file|image|max:2048',
        ]);

        $project = Project::findOrFail($id);

        // Proses Upload File
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $project->image = $imagePath;
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->category_id = $request->category_id;
        $project->url = $request->url;
        $project->save();

        return redirect()->route('dashboard.projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id); // Cari produk berdasarkan ID

        // Hapus gambar dari storage jika ada
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Hapus produk dari database
        $project->delete();

        return redirect()->route('dashboard.projects.index');
    }
}

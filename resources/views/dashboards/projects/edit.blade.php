@extends('dashboards.layouts.dashboard')

@section('content')
    <div class="p-6 bg-white shadow rounded-xl">
        <h1 class="mb-8 text-2xl font-bold">Edit Project</h1>
        <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4 ">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}"
                            class="block w-full px-4 py-2 mt-1 text-sm border rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category_id" id="category"
                            class="block w-full px-4 py-2 mt-1 text-sm border rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">
                            <option value="" disabled selected>-Choose Categories-</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $project->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="3"
                        class="block w-full px-4 py-2 mt-1 text-sm border rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">{{ old('description', $project->description) }}</textarea>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image"
                        class="block w-full px-4 py-2 mt-1 text-sm border rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">
                </div>

                <div>
                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                    <input type="text" name="url" id="url" value="{{ old('url', $project->url) }}"
                        class="block w-full px-4 py-2 mt-1 text-sm border rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="px-4 py-2 text-sm text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">
                    Update Project
                </button>
            </div>
        </form>
    </div>
@endsection

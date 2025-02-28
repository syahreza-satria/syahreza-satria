@extends('dashboards.layouts.dashboard')

@section('content')
    <div class="p-6 bg-white shadow rounded-xl">
        <h1 class="mb-8 text-2xl font-bold">Add Project</h1>

        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-xl">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}"
                class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            @error('title')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <label for="description">Description</label>
            <textarea name="description" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <label for="image">Image</label>
            <input type="file" name="image" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            @error('image')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <label for="category_id">Category</label>
            <select name="category_id" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
                <option value="" disabled selected>- Choose Category -</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <label for="url">URL</label>
            <input type="text" name="url" value="{{ old('url') }}"
                class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            @error('url')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="w-full p-2 text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">
                Add Project
            </button>
        </form>
    </div>
@endsection

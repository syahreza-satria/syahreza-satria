@extends('dashboards.layouts.dashboard')

@section('content')
    <div class="p-6 bg-white shadow rounded-xl">
        <h1 class="mb-8 text-2xl font-bold">Add Project</h1>
        <form action="{{ route('dashboard.projects.store') }}" method="post">
            @csrf
            <label for="">title</label>
            <input type="text" name="title" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            <label for="">description</label>
            <textarea name="description" class="w-full p-2 mb-4 border border-gray-300 rounded-xl"></textarea>
            <label for="">image</label>
            <input type="file" name="image" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            <label for="">Category</label>
            <select name="category_id" id="" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
                <option value="" disabled selected>-Choose Categories-</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="">URL</label>
            <input type="text" name="url" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">
            <button type="submit"
                class="w-full p-2 text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">Add
                Project</button>
        </form>
    </div>
@endsection

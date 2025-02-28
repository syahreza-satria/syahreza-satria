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

        <form action="{{ route('dashboard.categories.index') }}" method="POST">
            @csrf
            <label for="name">Nama Kategori</label>
            <input type="text" name="name" class="w-full p-2 mb-4 border border-gray-300 rounded-xl">

            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('dashboard.projects.index') }}"
                    class="p-2 text-center text-white transition duration-300 bg-gray-500 hover:bg-gray-400 rounded-xl">Cancel</a>
                <button type="submit"
                    class="p-2 text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">
                    Add Project
                </button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <h1 class="mb-2 text-4xl font-bold text-black font-secondary">Projects</h1>
    <div class="items-center justify-between block mb-4 md:flex">
        <p class="mb-1 md:mb-0 text-slate-400">Projects that i've work on 🚀:</p>
        <form action="{{ route('project') }}" method="GET">
            <select name="category_id" id="category" class="px-4 py-2 text-xs border rounded-full"
                onchange="this.form.submit()">
                <option value="">All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="grid justify-between grid-cols-1 gap-6 md:grid-cols-2">
        @if ($projects->isNotEmpty())
            @foreach ($projects as $project)
                <a href="{{ $project->url }}" class="transition duration-500 hover:shadow rounded-xl">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}"
                        class="object-cover rounded-xl aspect-video">
                    <div class="p-3">
                        <div class="flex items-center justify-between mb-1 font-secondary">
                            <h2 class="text-lg font-semibold md:text-base">{{ $project->title }}</h2>
                            <h3 class="items-center text-sm font-light text-sky-500">{{ $project->category->name }}</h3>
                        </div>
                        <p class="mb-2 text-xs text-slate-400">{{ $project->description }}</p>
                        {{-- <div class="flex gap-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                            alt="" class="object-contain w-6 h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                            alt="" class="object-contain w-6 h-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                            alt="" class="object-contain w-6 h-6">
                    </div> --}}
                    </div>
                </a>
            @endforeach
        @else
            <p class="py-48 text-center text-gray-500 col-span-full ">Belum ada proyek yang tersedia.</p>
        @endif
    </div>
@endsection

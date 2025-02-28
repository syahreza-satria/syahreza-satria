@extends('layouts.main')

@section('content')
    <p class="mb-4">Hello World 👋, My Name Is...</p>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-black font-secondary md:text-6xl">SYAHREZA SATRIA</h1>
        <p class="font-secondary">
            <a href="https://github.com/syahreza-satria"
                class="transition duration-500 hover:text-sky-300 text-sky-500">Fullstack Web Developer</a>,
            <a href="https://www.youtube.com/@SyahrezaSatria"
                class="transition duration-500 hover:text-rose-300 text-rose-500">Content Creator</a>
        </p>
    </div>
    <p class="mb-4 text-sm font-light leading-normal text-justify">
        Dedicated Web Developer & UI Designer 🎨 with strong problem-solving skills 🧩 and a high passion for
        learning 🔥!
        Able to communicate effectively 🗣️, adapt quickly 🤸💨, and work systematically ⚙️, meticulously 🔍✨, and
        even under pressure 😅💪!
    </p>
    <button
        class="flex items-center gap-2 px-4 py-2 mb-8 text-sm text-white transition duration-300 rounded-full bg-slate-800 hover:bg-slate-600">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
                d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875Zm5.845 17.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V12a.75.75 0 0 0-1.5 0v4.19l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z"
                clip-rule="evenodd" />
            <path
                d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
        </svg>
        Download My CV
    </button>

    <!-- Project -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold text-black">Latest Projects</h2>
            <a href="#" class="text-sm transition duration-500 text-sky-500 hover:text-sky-700">View All</a>
        </div>
        <div class="grid grid-cols-2 gap-6 md:grid-cols-3">
            @if ($projects->isNotEmpty())
                @foreach ($projects as $project)
                    <a href="{{ $project->url }}" class="flex flex-col rounded-xl">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}"
                            class="object-cover w-full aspect-video rounded-xl">
                        <div class="pt-3">
                            <h3 class="mb-1 text-base font-semibold">{{ $project->title }}</h3>
                            <p class="text-xs text-slate-400">
                                {{ $project->description }}
                            </p>
                        </div>
                    </a>
                @endforeach
            @else
                <p class="py-24 text-center text-gray-500 col-span-full">Belum ada proyek yang tersedia.</p>
            @endif
        </div>
    </div>
@endsection

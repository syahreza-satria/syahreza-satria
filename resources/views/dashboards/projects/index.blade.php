@extends('dashboards.layouts.dashboard')

@section('content')
    <div class="flex justify-between px-8 py-4 mb-8 bg-white border rounded-2xl">
        <h1 class="text-2xl font-bold">Daftar Projects</h1>
        <a href="{{ route('dashboard.projects.create') }}"
            class="flex items-center gap-2 px-4 py-2 text-sm text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl"><span
                class="hidden sm:block">Tambah
                Projects</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
        @if ($projects->isNotEmpty())
            @foreach ($projects as $project)
                <div class="flex flex-col h-full transition duration-300 bg-white shadow rounded-xl hover:shadow-xl">
                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                        class="object-cover aspect-video rounded-t-xl">
                    <div class="flex flex-col flex-grow p-4">
                        <div class="flex items-center justify-between mb-1">
                            <h2 class="text-lg font-semibold">{{ $project->title }}</h2>
                            <h3 class="text-sm text-sky-500">{{ $project->category->name }}</h3>
                        </div>
                        <p class="mb-4 text-sm text-gray-500">
                            {{ $project->description }}
                        </p>
                        <!-- Spacer untuk mendorong tombol ke bawah -->
                        <div class="flex justify-end gap-2 mt-auto">
                            <a href="{{ route('dashboard.projects.edit', $project->id) }}"
                                class="p-2 text-white transition duration-300 bg-yellow-500 rounded-lg hover:bg-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path
                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>
                            </a>
                            <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="p-2 text-white transition duration-300 bg-red-500 rounded-lg hover:bg-red-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="py-16 text-center text-gray-500 bg-white border shadow col-span-full rounded-2xl">
                Belum ada Project masuk disini
            </div>
        @endif
    </div>

@endsection

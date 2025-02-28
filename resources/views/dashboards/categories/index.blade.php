@extends('dashboards.layouts.dashboard')

@section('content')
    @extends('dashboards.layouts.dashboard')

@section('content')
    <div class="flex justify-between mb-8">
        <h1 class="text-2xl font-bold">Daftar Kategori</h1>
        <a href="{{ route('dashboard.projects.create') }}"
            class="flex items-center gap-2 px-4 py-2 text-sm text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">Tambah
            Kategori <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
    <div class="grid grid-cols-5 gap-2">
        @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
                <div class="px-6 py-4 font-semibold text-gray-800 bg-white shadow-lg rounded-xl">
                    {{ $category->name }}
                </div>
            @endforeach
        @else
            <div class="py-16 text-center text-gray-500 bg-white border shadow col-span-full rounded-2xl">Belum ada kategori
                masuk disini
            </div>
        @endif
    </div>
@endsection

@endsection

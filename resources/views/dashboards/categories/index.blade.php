@extends('dashboards.layouts.dashboard')

@section('content')
    @extends('dashboards.layouts.dashboard')

@section('content')
    <div class="flex justify-between px-8 py-4 mb-8 bg-white border rounded-2xl">
        <h1 class="text-2xl font-bold">Daftar Kategori</h1>
        <a href="{{ route('dashboard.categories.create') }}"
            class="flex items-center gap-2 px-4 py-2 text-sm text-white transition duration-300 bg-sky-500 hover:bg-sky-400 rounded-xl">Tambah
            Kategori <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
    <div class="grid gap-2 sm:grid-cols-3 md:grid-cols-5">
        @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
                <div x-data="{ showButtons: false }" @mouseenter="showButtons = true" @mouseleave="showButtons = false"
                    class="relative px-6 py-4 font-semibold text-gray-800 transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-2xl hover:scale-105">

                    {{ $category->name }}

                    <!-- Tombol Edit & Delete (Dengan Animasi) -->
                    <div x-show="showButtons" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                        class="absolute inset-0 flex items-center justify-center gap-2 bg-gray-500/60 rounded-xl">

                        <a href="{{ route('dashboard.categories.edit', $category->id) }}"
                            class="p-2 text-white transition duration-300 transform bg-yellow-500 rounded-lg hover:bg-yellow-600 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </a>

                        <form action="{{ route('dashboard.categories.destroy', $category->id) }}" method="POST"
                            onsubmit="return confirm('Apakah yakin ingin menghapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="p-2 text-white transition duration-300 transform bg-red-500 rounded-lg hover:bg-red-600 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </form>
                    </div>

                </div>
            @endforeach
        @else
            <div class="py-16 text-center text-gray-500 bg-white border shadow col-span-full rounded-2xl">
                Belum ada kategori masuk disini
            </div>
        @endif
    </div>
@endsection

@endsection

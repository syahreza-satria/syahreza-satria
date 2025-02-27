@extends('layouts.main')

@section('content')
    <h1 class="mb-2 text-4xl font-bold text-black font-secondary">Projects</h1>
    <div class="items-center justify-between block mb-4 md:flex">
        <p class="mb-1 md:mb-0 text-slate-400">Projects that i've work on 🚀:</p>
        <select name="" id="" class="px-4 py-2 text-xs border rounded-full">
            <option value="">All</option>
            <option value="">Web Development</option>
            <option value="">Photography</option>
        </select>
    </div>
    <div class="grid justify-between grid-cols-1 gap-6 md:grid-cols-2">
        <a href="#" class="transition duration-500 hover:shadow rounded-xl">
            <img src="https://placehold.co/900x900" alt="" class="object-cover rounded-xl aspect-video">
            <div class="p-3">
                <h2 class="mb-1 text-base font-semibold font-secondary md:text-base">Projects #1</h2>
                <p class="mb-2 text-xs text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In,
                    repellendus.
                    Accusantium animi expedita
                    consectetur fugit numquam saepe voluptas et ex?</p>
                <div class="flex gap-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                        alt="" class="object-contain w-6 h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                        alt="" class="object-contain w-6 h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                        alt="" class="object-contain w-6 h-6">
                </div>
            </div>
        </a>
    </div>
@endsection

@extends('layouts.auth-main')

@section('content')
    <div class="h-[50vh] border rounded-2xl shadow bg-white p-16 flex justify-center items-center">
        <div class="w-full max-w-sm">
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold text-gray-700">DASHBOARD LOGIN</h1>
            </div>

            <form action="{{ route('login') }}" method="post">
                @csrf

                {{-- Email Input --}}
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
                    <div class="relative">
                        <input type="email" name="email" id="email" placeholder="admin@email.com"
                            class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                        <svg class="absolute w-5 h-5 text-gray-400 left-3 top-3" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12H8m8 4H8m8-8H8m-4 8h16M4 4h16v16H4V4z" />
                        </svg>
                    </div>
                </div>

                {{-- Password Input --}}
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="********"
                            class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                        <svg class="absolute w-5 h-5 text-gray-400 left-3 top-3" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14v2m0-8v4m-7 4h14m-7-14a9 9 0 110 18 9 9 0 010-18z" />
                        </svg>
                    </div>
                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="w-full p-3 text-white transition duration-300 rounded-lg bg-gradient-to-r from-blue-500 to-blue-400 hover:from-blue-600 hover:to-blue-500">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection

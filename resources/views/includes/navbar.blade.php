<nav x-data="{ open: false }" class="max-w-2xl mx-auto p-4 flex justify-between items-center relative">
    <a href="{{ route('index') }}" class="font-semibold">Syahreza Satria Alfath</a>

    <!-- Hamburger Button (Mobile) -->
    <button @click="open = !open" class="md:hidden text-slate-500 focus:outline-none transition duration-300">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex gap-4 text-sm text-slate-500">
        <li><a href="{{ route('index') }}" class="hover:text-black transition duration-500">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-black transition duration-500">About</a></li>
        <li><a href="{{ route('project') }}" class="hover:text-black transition duration-500">Projects</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-black transition duration-500">Contact</a></li>
    </ul>

    <!-- Mobile Menu with Animation -->
    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 scale-90 -translate-y-2"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-90 -translate-y-2"
        class="absolute top-14 left-0 w-full bg-white border-t shadow-md md:hidden">
        <ul class="flex flex-col gap-2 p-4 text-sm text-slate-500">
            <li><a href="{{ route('index') }}" class="hover:text-black transition duration-500">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-black transition duration-500">About</a></li>
            <li><a href="{{ route('project') }}" class="hover:text-black transition duration-500">Projects</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-black transition duration-500">Contact</a></li>
        </ul>
    </div>
</nav>

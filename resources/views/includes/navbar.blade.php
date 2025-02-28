<nav x-data="{ open: false }" class="relative flex items-center justify-between max-w-2xl p-4 mx-auto">
    <a href="{{ route('index') }}" class="font-semibold">Syahreza Satria Alfath</a>

    <!-- Hamburger Button (Mobile) -->
    <button @click="open = !open" class="transition duration-300 md:hidden text-slate-500 focus:outline-none">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Desktop Menu -->
    <ul class="hidden gap-4 text-sm md:flex text-slate-500">
        <li><a href="{{ route('index') }}" class="transition duration-500 hover:text-black">Home</a></li>
        <li><a href="{{ route('about') }}" class="transition duration-500 hover:text-black">About</a></li>
        <li><a href="{{ route('project') }}" class="transition duration-500 hover:text-black">Projects</a></li>
        <li><a href="{{ route('contact') }}" class="transition duration-500 hover:text-black">Contact</a></li>
    </ul>

    <!-- Mobile Menu with Animation -->
    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 scale-90 -translate-y-2"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-90 -translate-y-2"
        class="absolute left-0 w-full bg-white border-t shadow-md top-14 md:hidden">
        <ul class="flex flex-col gap-2 p-4 text-sm text-slate-500">
            <li><a href="{{ route('index') }}" class="block transition duration-500 hover:text-black">Home</a></li>
            <li><a href="{{ route('about') }}" class="block transition duration-500 hover:text-black">About</a></li>
            <li><a href="{{ route('project') }}" class="block transition duration-500 hover:text-black">Projects</a>
            </li>
            <li><a href="{{ route('contact') }}" class="block transition duration-500 hover:text-black">Contact</a></li>
        </ul>
    </div>
</nav>

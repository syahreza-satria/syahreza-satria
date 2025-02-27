@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-4xl font-bold text-black font-secondary">About Me</h1>
    <div class="text-sm font-light leading-relaxed text-justify">
        <p class="mb-6">
            ✨ <span class="font-semibold text-sky-500 animate-pulse">Halo! 👋 Saya Syahreza Satria Alfath</span>,
            seorang <span class="font-semibold text-green-500 animate-text-gradient">fresh graduate</span>
            di bidang <span class="px-1 text-black bg-yellow-200 rounded shadow-lg shadow-yellow-500/50">
                Teknologi Informasi</span> dari Telkom University.
            Saya sangat antusias dengan <span class="font-medium text-purple-500 animate-bounce">pengembangan web
                full-stack</span>,
            mulai dari <span class="font-medium text-red-500">front-end yang interaktif</span>,
            <span class="font-medium text-blue-500">back-end yang efisien</span>,
            hingga <span class="font-medium text-orange-500">UX/UI yang intuitif</span>. 🎨💻
        </p>

        <p class="mb-6 animate-fade-in">
            ❤️ Selain teknologi, saya juga memiliki ketertarikan besar pada
            <span class="font-medium text-green-600">bisnis</span> dan
            <span class="font-medium text-yellow-500">digitalisasi sistem</span>.
            Saya ingin melihat bagaimana teknologi dapat membantu
            <span class="px-1 text-black bg-blue-200 rounded shadow-md shadow-blue-400">
                UMKM berkembang</span>. Saat ini, saya sedang mengerjakan
            <span class="font-semibold text-orange-500 animate-bounce">website profil</span>
            untuk sebuah <span class="px-1 text-black rounded shadow-lg bg-brown-200 shadow-brown-400">
                coffee shop ☕</span>,
            agar bisnis kecil bisa tampil lebih profesional di dunia digital.
            Saya percaya bahwa **teknologi harus menjadi solusi, bukan sekadar tren!** 💡✨
        </p>

        <p class="mb-6 animate-fade-in">
            🚀 Saya selalu **terbuka untuk diskusi & kolaborasi**, baik dalam proyek teknologi maupun
            ide-ide inovatif lainnya. Jika ingin ngobrol lebih lanjut atau mungkin ingin bekerja sama,
            **jangan ragu untuk**
            <a href="{{ route('contact') }}"
                class="font-semibold transition duration-300 text-sky-500 hover:text-pink-500 animate-pulse">
                menghubungi saya! 📩
            </a>
        </p>
    </div>

    <hr class="border-black border-solid rounded border-1">
    <div class="my-4">
        <h2 class="mb-4 text-lg font-bold font-secondary md:text-base">TECH STACKS</h2>
        <div class="flex flex-wrap justify-start gap-4">
            <a href="https://laravel.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png"
                    alt="Laravel" class="object-contain w-8 h-8">
            </a>
            <div id="tooltip" class="fixed hidden px-2 py-1 text-xs text-white bg-gray-800 rounded shadow-md"></div>

            <a href="https://tailwindcss.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/2560px-Tailwind_CSS_Logo.svg.png?20230715030042"
                    alt="TailwindCSS" class="object-contain w-8 h-8">
            </a>
            <a href="https://getbootstrap.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1024px-Bootstrap_logo.svg.png?20210507000024"
                    alt="Bootstrap" class="object-contain w-8 h-8">
            </a>
            <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png?20170517184425"
                    alt="HTML5" class="object-contain w-8 h-8">
            </a>
            <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/726px-CSS3_logo_and_wordmark.svg.png?20160530175649"
                    alt="CSS" class="object-contain w-8 h-8">
            </a>
            <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Javascript_Logo.png?20210407134359"
                    alt="Javascript" class="object-contain w-8 h-8">
            </a>
            <a href="https://www.python.org/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Python_logo_01.svg/1200px-Python_logo_01.svg.png?20210503135843"
                    alt="Python" class="object-contain w-8 h-8">
            </a>
            <a href="https://www.figma.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Figma-logo.svg/1024px-Figma-logo.svg.png?20190122211436"
                    alt="Figma" class="object-contain w-8 h-8">
            </a>
            <a href="https://www.mysql.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Database-mysql.svg/1024px-Database-mysql.svg.png?20220815123837"
                    alt="MYSQL" class="object-contain w-8 h-8">
            </a>
        </div>
    </div>
    <hr class="border-black border-solid rounded border-1">
@endsection

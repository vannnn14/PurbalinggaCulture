<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data x-init="const nav = document.querySelector('nav');
    const body = document.body;
    function setBodyPadding() {
        body.style.paddingTop = nav.offsetHeight + 'px';
    }
    window.addEventListener('load', setBodyPadding);
    window.addEventListener('resize', setBodyPadding);">
    <section>
        <nav x-data="{ lastScroll: 0, hidden: false }" x-init="
        window.addEventListener('scroll', () => {
            let currentScroll = window.pageYOffset;
            if (currentScroll <= 0) { hidden = false; return }
            hidden = currentScroll > lastScroll;
            lastScroll = currentScroll;
        })
    " :class="hidden ? '-translate-y-full' : 'translate-y-0'" class="fixed top-0 left-0 right-0 z-50 transition-transform duration-300
           bg-[url('/images/batiknavbar.jpg')] bg-cover bg-center
           items-center justify-between border-b text-white px-6 py-4">

            <!-- Overlay warna coklat -->
            <div class="absolute inset-0 bg-[#532700] opacity-100"></div>

            <!-- Konten navbar di atas overlay -->
            <div class="relative z-10">
                <div class="flex justify-between items-center">
                    <div class="absolute left-1/2 transform -translate-x-1/2 text-center mt-3">
                        <h1 class="text-lg font-bold tracking-wide ">Purbalingga Culture</h1>
                    </div>
                </div>
                <div class="flex justify-center space-x-6 mt-6 w-3/4 mx-auto border-t border-opacity-40 pt-2">
                    <ul class="flex items-center space-x-20">
                        <li>
                            <a href="/home" class="px-4 py-2 rounded-md transition-colors duration-300 
                                hover:bg-[#C59867] hover:text-white">Home</a>
                        </li>
                        <li x-data="{open: false}" class="relative">
                            <button @click="open = !open" class="focus:outline-none px-4 py-2 rounded-md transition-colors duration-300
                                    hover:bg-[#C59867] text-white cursor-pointer flex items-center gap-1"
                                :class="{ 'bg-[#C59867] text-white':open}">
                                Jelajah Budaya
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <ul x-show="open" @click.away="open = false"
                                class="absolute left-0 mt-2 w-48 bg-[#F8EED6] border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                                <li><a href="/sejarah" class="block px-4 py-2 text-black hover:bg-[#C59867]">Sejarah
                                        Purbalingga</a></li>
                                <li><a href="/senitradisi" class="block px-4 py-2 text-black hover:bg-[#C59867]">Seni &
                                        Tradisi Lokal</a></li>
                                <li><a href="#Cerita" class="block px-4 py-2 text-black hover:bg-[#C59867]">Cerita
                                        Rakyat</a></li>
                                <li><a href="/batik" class="block px-4 py-2 text-black hover:bg-[#C59867]">Batik
                                        Daerah</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Kuliner" class="px-4 py-2 rounded-md transition-colors duration-300 
                                hover:bg-[#C59867] hover:text-white">Kuliner</a>
                        </li>
                        <li>
                            <a href="#Bahasa" class="px-4 py-2 rounded-md transition-colors duration-300 
                                hover:bg-[#C59867] hover:text-white">Bahasa</a>
                        </li>
                        <li>
                            <a href="#Tentang" class="px-4 py-2 rounded-md transition-colors duration-300 
                                hover:bg-[#C59867] hover:text-white">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar End -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purba Culture</title>
  @vite('resources/css/app.css')
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body
  x-data
  x-init="const nav = document.querySelector('nav'); const body = document.body;
          function setBodyPadding(){ body.style.paddingTop = nav.offsetHeight + 'px' }
          window.addEventListener('load', setBodyPadding);
          window.addEventListener('resize', setBodyPadding);">

  <section>
    <nav
      x-data="{ lastScroll: 0, hidden: false, mobile:false, jelajah:false }"
      x-init="
        window.addEventListener('scroll', () => {
          let y = window.pageYOffset;
          if (y <= 0) { hidden = false; return }
          hidden = y > lastScroll; lastScroll = y;
        });
        window.addEventListener('keydown', e => { if(e.key==='Escape'){ mobile=false; jelajah=false }});
      "
      :class="hidden ? '-translate-y-full' : 'translate-y-0'"
      class="fixed top-0 left-0 right-0 z-50 transition-transform duration-300
             bg-[url('/images/batiknavbar.jpg')] bg-cover bg-center
             border-b text-white">

      <!-- Overlay warna coklat -->
      <div class="absolute inset-0 bg-[#532700] opacity-100"></div>

      <!-- Konten navbar -->
      <div class="relative z-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
          <!-- Bar atas -->
          <div class="h-16 flex items-center justify-between">
            <!-- Brand -->
            <a href="/home" class="flex-1 text-left sm:text-center">
              <h1 class="text-base sm:text-lg font-bold tracking-wide">Purbalingga Culture</h1>
            </a>

            <!-- Tombol mobile -->
            <button
              @click="mobile=!mobile"
              :aria-expanded="mobile"
              aria-controls="mobileMenu"
              class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-md bg-white/10 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/60">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path x-show="!mobile" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/>
                <path x-show="mobile" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>

          <!-- Menu Desktop -->
          <div class="hidden md:flex justify-center border-t border-white/40 pt-2 pb-3">
            <ul class="flex items-center gap-8 lg:gap-12 text-sm">
              <li><a href="/home" class="px-4 py-2 rounded-md transition hover:bg-[#C59867] hover:text-white">Home</a></li>

              <!-- Dropdown Jelajah Budaya (Desktop) -->
              <li class="relative" @click.outside="jelajah=false">
                <button @click="jelajah=!jelajah"
                        :class="jelajah ? 'bg-[#C59867] text-white' : ''"
                        class="px-4 py-2 rounded-md transition flex items-center gap-1 hover:bg-[#C59867] cursor-pointer">
                  Jelajah Budaya
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <ul x-show="jelajah" x-transition
                    class="absolute left-0 mt-2 w-56 bg-[#FFECD1] border border-gray-200 rounded-lg shadow-lg py-2 text-black z-50">
                  <li><a href="/sejarah"     class="block px-4 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Sejarah Purbalingga</a></li>
                  <li><a href="/senitradisi" class="block px-4 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Seni & Tradisi Lokal</a></li>
                  <li><a href="/cerita"      class="block px-4 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Cerita Rakyat</a></li>
                  <li><a href="/batik"       class="block px-4 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Batik Daerah</a></li>
                </ul>
              </li>

              <li><a href="/kuliner" class="px-4 py-2 rounded-md transition hover:bg-[#C59867] hover:text-white">Kuliner</a></li>
              <li><a href="/bahasa"  class="px-4 py-2 rounded-md transition hover:bg-[#C59867] hover:text-white">Bahasa</a></li>
              <li><a href="/tentang" class="px-4 py-2 rounded-md transition hover:bg-[#C59867] hover:text-white">Tentang</a></li>
            </ul>
          </div>

          <!-- Menu Mobile -->
          <div id="mobileMenu" class="md:hidden" x-show="mobile" x-transition>
            <div class="border-t border-white/40 py-2">
              <a href="/home" class="block px-3 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Home</a>

              <!-- Dropdown Mobile (rapi kiri) -->
              <div>
                <button @click="jelajah=!jelajah"
                        class="w-full flex items-center justify-between px-3 py-2 rounded-md hover:bg-[#C59867] hover:text-white cursor-pointer">
                  <span>Jelajah Budaya</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" stroke-width="2">
                    <path x-show="!jelajah" stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/>
                    <path x-show="jelajah"  stroke-linecap="round" stroke-linejoin="round" d="M18 15l-6-6-6 6"/>
                  </svg>
                </button>
                <div x-show="jelajah" x-transition
                     class="mt-1 mx-3 bg-[#FFECD1] text-black rounded-lg overflow-hidden">
                  <a href="/sejarah"     class="block px-4 py-2 hover:bg-[#C59867] hover:text-white">Sejarah Purbalingga</a>
                  <a href="/senitradisi" class="block px-4 py-2 hover:bg-[#C59867] hover:text-white">Seni & Tradisi Lokal</a>
                  <a href="/cerita"      class="block px-4 py-2 hover:bg-[#C59867] hover:text-white">Cerita Rakyat</a>
                  <a href="/batik"       class="block px-4 py-2 hover:bg-[#C59867] hover:text-white">Batik Daerah</a>
                </div>
              </div>

              <a href="/kuliner" class="block px-3 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Kuliner</a>
              <a href="/bahasa"  class="block px-3 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Bahasa</a>
              <a href="/tentang" class="block px-3 py-2 rounded-md hover:bg-[#C59867] hover:text-white">Tentang</a>
            </div>
          </div>

        </div>
      </div>
    </nav>
  </section>
  <!-- Navbar End -->

</body>
</html>

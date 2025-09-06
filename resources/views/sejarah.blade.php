<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sejarah — Purbalingga Culture</title>
  <meta name="description" content="Sejarah Purbalingga: tokoh, peristiwa, dan peninggalan yang membentuk kabupaten.">

  {{-- CSS dari Vite (hindari memuat Tailwind via CDN di halaman ini) --}}
  @vite('resources/css/app.css')

  {{-- Alpine untuk interaksi ringan --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  {{-- SEO & Social --}}
  <link rel="canonical" href="{{ url()->current() }}">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#8b5e34">

  <meta property="og:type" content="article">
  <meta property="og:locale" content="id_ID">
  <meta property="og:site_name" content="PurbaCulture">
  <meta property="og:title" content="Sejarah — Purbalingga Culture">
  <meta property="og:description" content="Sejarah Purbalingga: tokoh, peristiwa, dan peninggalan yang membentuk kabupaten.">
  <meta property="og:image" content="{{ asset('images/gambarsejarah.png') }}">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Sejarah — Purbalingga Culture">
  <meta name="twitter:description" content="Sejarah Purbalingga: tokoh, peristiwa, dan peninggalan yang membentuk kabupaten.">
  <meta name="twitter:image" content="{{ asset('images/gambarsejarah.png') }}">

  {{-- Preload gambar hero untuk percepat LCP --}}
  <link rel="preload"
        as="image"
        href="/images/gambarsejarah.png"
        imagesrcset="/images/gambarsejarah.png 800w"
        imagesizes="(min-width: 1024px) 640px, 100vw">
</head>

<body class="antialiased bg-[#FFECD1] text-gray-800">
  {{-- Skip link untuk aksesibilitas --}}
  <a href="#content"
     class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-white focus:text-black focus:rounded-lg">
     Loncat ke konten
  </a>

  {{-- NAVBAR --}}
  @include('navbar')

  <main id="content" class="scroll-smooth" tabindex="-1">
    {{-- HERO (teks + gambar) --}}
    <section class="bg-[#FFECD1]/50" role="region" aria-labelledby="judul-sejarah">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 pb-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
        <article class="space-y-6">
          <header class="space-y-2">
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Purbalingga</p>
            <h1 id="judul-sejarah" class="text-3xl md:text-4xl font-extrabold text-gray-900">
              Sejarah Purbalingga
            </h1>
            <p class="text-gray-700">
              Lini masa berdirinya kabupaten, tokoh penting, dan peristiwa berpengaruh.
            </p>
          </header>

          <div class="bg-[#F8EED6] p-6 rounded-xl shadow-sm ring-1 ring-black/5 text-[15px] leading-relaxed space-y-4">
            <p><strong>Kyai Arsantaka</strong> (Arsakusuma), putra Bupati Onje II, menjadi sosok sentral. Ia diangkat anak oleh Kyai Wanakusuma di Masaran dan pada 1740–1760 menjabat demang di Pagendolan di bawah Tumenggung Dipayuda I.</p>
            <p>Dalam <em>Perang Jenar</em> (bagian dari perang Mangkubumen), Kyai Arsantaka berpihak pada Kadipaten Banyumas yang membela Paku Buwono. Atas jasanya, Adipati Banyumas R.T. Yudanegara mengangkat putranya, <strong>Kyai Arsayuda</strong>, menjadi menantu.</p>
            <p>Kelak, Kyai Arsayuda menjadi Tumenggung Karangwelas bergelar <strong>R.T. Dipayuda III</strong> dan memindahkan pusat pemerintahan ke desa Purbalingga—yang berkembang menjadi pusat kabupaten hingga kini.</p>
          </div>
        </article>

        <figure class="flex justify-center items-start">
          <div class="w-full max-w-xl aspect-[4/3] bg-gray-200/40 rounded-xl overflow-hidden shadow">
            <img src="/images/sejarah.jpg" alt="Ilustrasi sejarah Purbalingga"
                 class="w-full h-full object-cover" loading="lazy" decoding="async">
            <img
              src="/images/sejarah.jpg"
              alt="Ilustrasi sejarah Purbalingga, pemindahan pusat pemerintahan ke Purbalingga"
              class="w-full h-full object-cover"
              loading="eager"
              fetchpriority="high"
              decoding="async"
              width="1024" height="768">

          </div>
          <figcaption class="sr-only">Ilustrasi pemindahan pusat pemerintahan ke Purbalingga.</figcaption>
        </figure>
      </div>
    </section>

    {{-- PEMBATAS GARIS --}}
    <hr class="border-0 h-px bg-gray-300">

    {{-- CAROUSEL (tanpa auto-geser, dukung keyboard) --}}
    <section class="bg-[#1c1005] py-6 md:py-10" role="region" aria-labelledby="judul-linimasa">
      <header class="max-w-7xl mx-auto px-4 sm:px-6 text-white/80 pb-3">
        <p class="text-xs uppercase tracking-wider">Lini Masa Visual</p>
        <h2 id="judul-linimasa" class="text-xl md:text-2xl font-semibold text-white">
          Potret Purbalingga Tempo Dulu
        </h2>
      </header>

      <div
        x-data="{
          current: 0,
          slides: [
            { img:'/images/pbg.jpg',     text:'Alun-Alun Selatan tempo dulu', w: 1920, h: 1080 },
            { img:'/images/stasiun.jpg', text:'Stasiun Poerbolinggo',          w: 1920, h: 1080 },
            { img:'/images/masjid.jpg',  text:'Masjid Agung Darussalam',       w: 1920, h: 1080 }
          ],
          next(){ this.current = (this.current + 1) % this.slides.length },
          prev(){ this.current = (this.current - 1 + this.slides.length) % this.slides.length },
          go(i){ this.current = i },
        }"
        x-init="
          // Dukungan keyboard
          $el.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') { e.preventDefault(); prev(); }
            if (e.key === 'ArrowRight') { e.preventDefault(); next(); }
          });
        "
        class="relative max-w-7xl mx-auto px-4 sm:px-6 outline-none"
        tabindex="0"
        role="group"
        aria-roledescription="carousel"
        aria-label="Arsip Purbalingga"
      >
        <!-- Viewport -->
        <div class="relative overflow-hidden rounded-lg">
          <!-- Track -->
          <div class="flex motion-safe:transition-transform duration-500 ease-out will-change-[transform]"
               :style="`transform: translateX(-${current * 100}%);`"
               aria-live="polite" aria-atomic="true">

            <!-- Slides -->
            <template x-for="(slide, i) in slides" :key="i">
              <div class="min-w-full relative">
                <div class="w-full aspect-[16/9] md:h-[520px]">
                  <img
                    :src="slide.img"
                    :alt="slide.text"
                    class="w-full h-full object-cover"
                    loading="lazy"
                    decoding="async"
                    :width="slide.w" :height="slide.h">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center px-6 pointer-events-none">
                  <p class="text-white text-xl md:text-3xl font-semibold text-center max-w-3xl" x-text="slide.text"></p>
                </div>
              </div>
            </template>
          </div>

          <!-- Controls -->
          <div class="absolute inset-0 flex items-center justify-between px-2 md:px-4">
            <button @click="prev"
              class="bg-black/60 hover:bg-black/75 text-white px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-white"
              aria-label="Slide sebelumnya"
              type="button">⟨</button>
            <button @click="next"
              class="bg-black/60 hover:bg-black/75 text-white px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-white"
              aria-label="Slide berikutnya"
              type="button">⟩</button>
          </div>

          <!-- Dots -->
          <div class="absolute bottom-3 md:bottom-4 w-full flex justify-center gap-2">
            <template x-for="(slide, i) in slides" :key="`dot-${i}`">
              <button @click="go(i)"
                class="w-3 h-3 rounded-full ring-1 ring-white/60 focus:outline-none focus:ring-2 focus:ring-white"
                :class="current===i ? 'bg-white' : 'bg-white/40'"
                :aria-label="`Ke slide ${i+1}`"
                :aria-current="current===i ? 'true' : 'false'"
                type="button"></button>
            </template>
          </div>
        </div>
      </div>
    </section>

    {{-- PEMBATAS GARIS --}}
    <hr class="border-0 h-px bg-gray-300">

    {{-- TOKOH PURBALINGGA (header + 4 highlight) --}}
    <section id="tokoh" class="py-12 bg-[#FFECD1]/50 mb-5" role="region" aria-labelledby="judul-tokoh">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between">
          <h2 id="judul-tokoh" class="text-2xl md:text-[34px] leading-none font-semibold text-[#5a371c]">
            Tokoh Purbalingga
          </h2>
 
          
        </div>
        <div class="mt-4 h-px bg-[#8b5e34]/60"></div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center ">
        <p class="text-gray-600 mt-5 font-bold">
          Beberapa tokoh dari Purbalingga yang memberi warna bagi sejarah dan budaya.
        </p>

        {{-- Grid tokoh (4 highlight) --}}
        <ul role="list" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

          
          {{-- Jendral Soedirman --}}
          <li>
            <article class="relative rounded-xl overflow-hidden shadow-lg group">
                 <a href="{{ route('berita', ['tokoh' => 'soedirman']) }}">
                <img src="/images/soedirman.jpeg" alt="Jendral Soedirman"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     loading="lazy" decoding="async" width="640" height="384" />
                <div class="p-3 text-left">
                  <h3 class="text-lg font-bold text-black">Jendral Soedirman</h3>
                  <p class="text-sm text-black/80 mb-2">Panglima TNI, Pahlawan Nasional</p>
                </div>
              </a>
            </article>
          </li>
          {{-- Mayjen Soengkono --}}
          <li>
            <article class="relative rounded-xl overflow-hidden shadow-lg group">
              <a href="{{ route('berita', ['tokoh' => 'soengkono']) }}" class="block">
                <img src="/images/soengkono1.jpg" alt="Mayjen Soengkono"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     loading="lazy" decoding="async" width="640" height="384" />
                <div class="p-3 text-left">
                  <h3 class="text-lg font-bold text-black">Mayjen Soengkono</h3>
                  <p class="text-sm text-black/80 mb-2">Tokoh militer</p>
                </div>
              </a>
            </article>
          </li>

          {{-- Sukatani --}}
          <li>
            <article class="relative rounded-xl overflow-hidden shadow-lg group">
              <a href="{{ route('berita', ['tokoh' => 'sukatani']) }}" class="block">
                <img src="/images/sukatani1.png" alt="Sukatani"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     loading="lazy" decoding="async" width="640" height="384" />
                <div class="p-3 text-left">
                  <h3 class="text-lg font-bold text-black">Sukatani</h3>
                  <p class="text-sm text-black/80 mb-2">Seniman</p>
                </div>
              </a>
            </article>
          </li>

          {{-- Indrodjojo Kusumonegoro (Indro Warkop) --}}
          <li>
            <article class="relative rounded-xl overflow-hidden shadow-lg group">
              <a href="{{ route('berita', ['tokoh' => 'indro']) }}" class="block">
                <img src="/images/indro.jpeg" alt="Indrodjojo Kusumonegoro (Indro Warkop)"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     loading="lazy" decoding="async" width="640" height="384" />
                <div class="p-3 text-left">
                  <h3 class="text-lg font-bold text-black">Indrodjojo Kusumonegoro</h3>
                  <p class="text-sm text-black/80 mb-2">Komedian & aktor (Warkop DKI)</p>
                </div>
              </a>
            </article>
          </li>

        </ul>
      </div>
    </section>
  </main>

  {{-- FOOTER --}}
  @include('footer')

  {{-- Fallback untuk non‑JS: tampilkan pesan singkat (opsional) --}}
  <noscript>
    <style>
      [x-data] { display: block; }
    </style>
  </noscript>
</body>
</html>

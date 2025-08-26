<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sejarah — Purbalingga Culture</title>
  <meta name="description" content="Sejarah Purbalingga: tokoh, peristiwa dan peninggalan yang membentuk kabupaten.">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased text-gray-800">
  {{-- NAVBAR --}}
  @include('navbar')

  <main id="content" class="scroll-smooth">

    {{-- HERO (teks + gambar) --}}
    <section class="bg-[#FFECD1]/50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 pb-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
        <article class="space-y-6">
          <header class="space-y-2">
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Purbalingga</p>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900">Sejarah Purbalingga</h1>
            <p class="text-gray-700">Lini masa berdirinya kabupaten, tokoh penting, dan peristiwa berpengaruh.</p>
          </header>

          <div class="bg-[#F8EED6] p-6 rounded-xl shadow-sm ring-1 ring-black/5 text-[15px] leading-relaxed space-y-4">
            <p><strong>Kyai Arsantaka</strong> (Arsakusuma), putra Bupati Onje II, menjadi sosok sentral. Ia diangkat anak oleh Kyai Wanakusuma di Masaran dan pada 1740–1760 menjabat demang di Pagendolan di bawah Tumenggung Dipayuda I.</p>
            <p>Dalam <em>Perang Jenar</em> (bagian dari perang Mangkubumen), Kyai Arsantaka berpihak pada Kadipaten Banyumas yang membela Paku Buwono. Atas jasanya, Adipati Banyumas R.T. Yudanegara mengangkat putranya, <strong>Kyai Arsayuda</strong>, menjadi menantu.</p>
            <p>Kelak, Kyai Arsayuda menjadi Tumenggung Karangwelas bergelar <strong>R.T. Dipayuda III</strong> dan memindahkan pusat pemerintahan ke desa Purbalingga—yang berkembang menjadi pusat kabupaten hingga kini.</p>
          </div>
        </article>

        <figure class="flex justify-center items-start">
          <div class="w-full max-w-xl aspect-[4/3] bg-gray-200/40 rounded-xl overflow-hidden shadow">
            <img src="/images/gambarsejarah.png" alt="Ilustrasi sejarah Purbalingga"
                 class="w-full h-full object-cover" loading="lazy" decoding="async">
          </div>
          <figcaption class="sr-only">Ilustrasi pemindahan pusat pemerintahan ke Purbalingga.</figcaption>
        </figure>
      </div>
    </section>

    {{-- PEMBATAS GARIS --}}
    <div class="h-px bg-gray-300"></div>

    {{-- CAROUSEL TANPA BLINK (translateX, manual only) --}}
    <section class="bg-[#1c1005] py-6 md:py-10">
      <header class="max-w-7xl mx-auto px-4 sm:px-6 text-white/80 pb-3">
        <p class="text-xs uppercase tracking-wider">Lini Masa Visual</p>
        <h2 class="text-xl md:text-2xl font-semibold text-white">Potret Purbalingga Tempo Dulu</h2>
      </header>

      <div
        x-data="{
          current: 0,
          slides: [
            { img:'/images/pbg.jpg',     text:'Alun-Alun Selatan tempo dulu' },
            { img:'/images/stasiun.jpg', text:'Stasiun Poerbolinggo' },
            { img:'/images/masjid.jpg',  text:'Masjid Agung Darussalam' }
          ],
          next(){ this.current = (this.current + 1) % this.slides.length },
          prev(){ this.current = (this.current - 1 + this.slides.length) % this.slides.length },
          go(i){ this.current = i }
        }"
        class="relative max-w-7xl mx-auto px-4 sm:px-6"
        aria-roledescription="carousel" aria-label="Arsip Purbalingga"
      >
        <!-- Viewport -->
        <div class="relative overflow-hidden rounded-lg">
          <!-- Track -->
          <div class="flex transition-transform duration-500 ease-out will-change-[transform]"
               :style="`transform: translateX(-${current * 100}%);`">

            <!-- Slides -->
            <template x-for="(slide, i) in slides" :key="i">
              <div class="min-w-full relative">
                <div class="w-full aspect-[16/9] md:h-[520px]">
                  <img :src="slide.img" :alt="slide.text"
                       class="w-full h-full object-cover" loading="eager" decoding="async">
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
              aria-label="Sebelumnya">⟨</button>
            <button @click="next"
              class="bg-black/60 hover:bg-black/75 text-white px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-white"
              aria-label="Berikutnya">⟩</button>
          </div>

          <!-- Dots -->
          <div class="absolute bottom-3 md:bottom-4 w-full flex justify-center gap-2">
            <template x-for="(slide, i) in slides" :key="`dot-${i}`">
              <button @click="go(i)"
                class="w-3 h-3 rounded-full ring-1 ring-white/60 focus:outline-none focus:ring-2 focus:ring-white"
                :class="current===i ? 'bg-white' : 'bg-white/40'"
                :aria-label="`Ke slide ${i+1}`" :aria-current="current===i"></button>
            </template>
          </div>
        </div>
      </div>
    </section>

    {{-- PEMBATAS GARIS --}}
    <div class="h-px bg-gray-300"></div>

    {{-- TOKOH PURBALINGGA (header + 4 highlight + CTA) --}}
    <section id="tokoh" class="py-12 bg-white">
      {{-- Header ala screenshot: judul kiri + tombol kanan + garis --}}
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between">
          <h2 class="text-2xl md:text-[34px] leading-none font-semibold text-[#5a371c]">
            Tokoh Purbalingga
          </h2>
          <a href="/tokoh"
             class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-[#8b5e34]
                    text-[#6b3f1f] hover:bg-[#8b5e34]/10 transition">
            <span class="text-[15px]">Lihat Selengkapnya</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
        <div class="mt-4 h-px bg-[#8b5e34]/60"></div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <p class="text-gray-600 mt-5">Beberapa tokoh besar dari Purbalingga yang memberi warna bagi sejarah dan budaya.</p>

        {{-- Grid tokoh (4 highlight) --}}
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          {{-- Jenderal Soedirman --}}
          <article class="relative rounded-xl overflow-hidden shadow-lg group">
            <img src="/images/soedirman.jpeg" alt="Jenderal Soedirman"
                 class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4 transition group-hover:bg-black/60">
              <h3 class="text-lg font-semibold text-white">Jenderal Soedirman</h3>
              <p class="text-sm text-gray-200">Panglima TNI, Pahlawan Nasional</p>
            </div>
          </article>

          {{-- Mayjend Soengkono --}}
          <article class="relative rounded-xl overflow-hidden shadow-lg group">
            <img src="/images/soengkono.jpg" alt="Mayjend Soengkono"
                 class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4 transition group-hover:bg-black/60">
              <h3 class="text-lg font-semibold text-white">Mayjend Soengkono</h3>
              <p class="text-sm text-gray-200">Tokoh Pertempuran Surabaya 1945</p>
            </div>
          </article>

          {{-- Usman Janatin --}}
          <article class="relative rounded-xl overflow-hidden shadow-lg group">
            <img src="/images/usman-janatin.jpg" alt="Usman Janatin"
                 class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4 transition group-hover:bg-black/60">
              <h3 class="text-lg font-semibold text-white">Usman Janatin</h3>
              <p class="text-sm text-gray-200">Pahlawan Dwikora</p>
            </div>
          </article>

          {{-- Indro Warkop --}}
          <article class="relative rounded-xl overflow-hidden shadow-lg group">
            <img src="/images/indro.jpg" alt="Indro Warkop"
                 class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4 transition group-hover:bg-black/60">
              <h3 class="text-lg font-semibold text-white">Indro (Warkop DKI)</h3>
              <p class="text-sm text-gray-200">Komedian, Budaya Populer</p>
            </div>
          </article>
        </div>
      </div>
    </section>

  </main>

  {{-- FOOTER --}}
  @include('footer')
</body>
</html>

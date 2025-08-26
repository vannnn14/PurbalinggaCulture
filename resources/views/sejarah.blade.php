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

    {{-- TOKOH PURBALINGGA --}}
    <section id="tokoh" class="py-10 md:py-14 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-end justify-between gap-4">
          <div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Tokoh Purbalingga</h2>
            <p class="text-gray-600 mt-1">Mereka yang menginspirasi perjuangan dan pembangunan daerah.</p>
          </div>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          {{-- Card --}}
          <article class="group rounded-xl overflow-hidden border bg-white hover:shadow-md transition">
            <div class="aspect-[4/3] bg-gray-100">
              <img src="/images/soedirman.jpeg" alt="Jenderal Soedirman"
                   class="w-full h-full object-cover group-hover:scale-[1.02] transition" loading="lazy" decoding="async">
            </div>
            <div class="p-3">
              <p class="text-green-700 text-xs font-semibold">Tokoh</p>
              <h3 class="font-medium">Jenderal Soedirman</h3>
              <p class="text-xs text-gray-500">1916–1950 • Panglima Besar TNI</p>
            </div>
          </article>

          <article class="group rounded-xl overflow-hidden border bg-white hover:shadow-md transition">
            <div class="aspect-[4/3] bg-gray-100">
              <img src="/images/pbg.jpg" alt="Ahmad Yani"
                   class="w-full h-full object-cover group-hover:scale-[1.02] transition" loading="lazy" decoding="async">
            </div>
            <div class="p-3">
              <p class="text-green-700 text-xs font-semibold">Tokoh</p>
              <h3 class="font-medium">Ahmad Yani</h3>
              <p class="text-xs text-gray-500">1922–1965 • Pahlawan Revolusi</p>
            </div>
          </article>

          <article class="group rounded-xl overflow-hidden border bg-white hover:shadow-md transition">
            <div class="aspect-[4/3] bg-gray-100">
              <img src="/images/masjid.jpg" alt="Nama Tokoh"
                   class="w-full h-full object-cover group-hover:scale-[1.02] transition" loading="lazy" decoding="async">
            </div>
            <div class="p-3">
              <p class="text-green-700 text-xs font-semibold">Tokoh</p>
              <h3 class="font-medium">Nama Tokoh</h3>
              <p class="text-xs text-gray-500">Perintis pendidikan & kebudayaan</p>
            </div>
          </article>

          <article class="group rounded-xl overflow-hidden border bg-white hover:shadow-md transition">
            <div class="aspect-[4/3] bg-gray-100">
              <img src="/images/stasiun.jpg" alt="Nama Tokoh"
                   class="w-full h-full object-cover group-hover:scale-[1.02] transition" loading="lazy" decoding="async">
            </div>
            <div class="p-3">
              <p class="text-green-700 text-xs font-semibold">Tokoh</p>
              <h3 class="font-medium">Nama Tokoh</h3>
              <p class="text-xs text-gray-500">Kontributor pembangunan daerah</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    {{-- PEMBATAS GARIS --}}
    <div class="h-px bg-gray-300"></div>

    {{-- EKSPLOR MENU --}}
    <section class="bg-[#FAF4E1] py-10 md:py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-3 gap-6">
        <a href="/kuliner" class="group flex items-start justify-between gap-3 rounded-2xl border bg-white p-4 hover:shadow-md hover:-translate-y-[2px] transition">
          <div>
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
            <h4 class="font-semibold">Kuliner Purbalingga</h4>
            <p class="text-sm text-gray-600">Sroto, buntil, mendoan, dan lainnya.</p>
          </div>
          <span class="mt-1 opacity-0 group-hover:opacity-100 transition">→</span>
        </a>

        <a href="/senitradisi" class="group flex items-start justify-between gap-3 rounded-2xl border bg-white p-4 hover:shadow-md hover:-translate-y-[2px] transition">
          <div>
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
            <h4 class="font-semibold">Seni & Tradisi</h4>
            <p class="text-sm text-gray-600">Ebeg, lengger, kentongan, karawitan.</p>
          </div>
          <span class="mt-1 opacity-0 group-hover:opacity-100 transition">→</span>
        </a>

        <a href="/batik" class="group flex items-start justify-between gap-3 rounded-2xl border bg-white p-4 hover:shadow-md hover:-translate-y-[2px] transition">
          <div>
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
            <h4 class="font-semibold">Batik Daerah</h4>
            <p class="text-sm text-gray-600">Motif lokal bernuansa lereng Slamet.</p>
          </div>
          <span class="mt-1 opacity-0 group-hover:opacity-100 transition">→</span>
        </a>
      </div>
    </section>
  </main>

  {{-- FOOTER --}}
  @include('footer')
</body>
</html>

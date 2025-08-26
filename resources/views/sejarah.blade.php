<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sejarah — Purbalingga Culture</title>
  <meta name="description" content="Sejarah Purbalingga: tokoh, peristiwa, dan peninggalan bersejarah.">
  <meta property="og:title" content="Sejarah — Purbalingga Culture">
  <meta property="og:description" content="Jelajahi sejarah Purbalingga: tokoh, peristiwa, dan peninggalan.">
  <meta property="og:type" content="website">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased text-gray-800 bg-white">
  {{-- Navbar --}}
  @include('navbar')

  <main id="content" class="scroll-smooth">

    {{-- Hero: teks + gambar --}}
    <section class="bg-[#FFECD1]/40">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 pb-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
        <article class="space-y-6">
          <header class="space-y-2">
            <p class="text-xs uppercase tracking-wider text-[#C59867]">Purbalingga</p>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900">Sejarah Purbalingga</h1>
            <p class="text-gray-700">Lini masa singkat berdirinya kabupaten, tokoh penting, dan peristiwa berpengaruh di wilayah Purbalingga.</p>
          </header>

          <div class="bg-[#F8EED6] p-6 rounded-xl shadow-sm text-[15px] leading-relaxed space-y-4">
            <p>
              <strong>Kyai Arsantaka</strong> (Arsakusuma), putra Bupati Onje II, menjadi sosok sentral dalam sejarah Purbalingga.
              Ia diangkat anak oleh Kyai Wanakusuma di Masaran dan pada 1740–1760 menjabat demang di Pagendolan di bawah
              Tumenggung Dipayuda I (Karanglewas).
            </p>
            <p>
              Dalam <em>Perang Jenar</em>—bagian dari perang Mangkubumen—Kyai Arsantaka berpihak pada Kadipaten Banyumas yang
              membela Paku Buwono. Atas jasanya, Adipati Banyumas R.T. Yudanegara mengangkat putranya, <strong>Kyai Arsayuda</strong>,
              sebagai menantu.
            </p>
            <p>
              Kelak, Kyai Arsayuda menjadi Tumenggung Karangwelas bergelar <strong>R.T. Dipayuda III</strong>. Atas saran ayahnya,
              pusat pemerintahan dipindah dari Karanglewas ke desa Purbalingga—yang berkembang menjadi pusat kabupaten
              hingga kini.
            </p>
          </div>
        </article>

        <figure class="flex justify-center items-start">
          <div class="w-full max-w-xl aspect-[4/3] bg-gray-200/40 rounded-xl overflow-hidden shadow">
            <img
              src="/images/gambarsejarah.png"
              alt="Ilustrasi sejarah Purbalingga"
              class="w-full h-full object-cover"
              loading="lazy" decoding="async">
          </div>
          <figcaption class="sr-only">Penggambaran pemindahan pusat pemerintahan ke Purbalingga.</figcaption>
        </figure>
      </div>
    </section>

    {{-- Carousel sejarah --}}
    <section class="w-full bg-[#1c1005] py-12">
      <div
        x-data="carousel()"
        x-init="init()"
        class="relative flex justify-center w-full"
        aria-roledescription="carousel"
        aria-label="Sejarah Purbalingga"
      >
        <div class="relative w-full max-w-7xl overflow-hidden">
          {{-- Slides --}}
          <template x-for="(slide, i) in slides" :key="i">
            <div
              x-show="current === i"
              x-transition.opacity.scale
              class="relative w-full aspect-[16/9] md:h-[520px]"
              role="group"
              :aria-label="`Slide ${i+1} dari ${slides.length}`"
            >
              <img :src="slide.img" :alt="slide.text"
                   class="w-full h-full object-cover" loading="lazy" decoding="async">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
              <div class="absolute inset-0 flex items-center justify-center px-6">
                <p class="text-white text-xl md:text-3xl font-semibold text-center max-w-3xl" x-text="slide.text"></p>
              </div>
            </div>
          </template>

          {{-- Navigasi kiri/kanan --}}
          <div class="absolute inset-0 flex items-center justify-between px-2 md:px-4">
            <button @click="prev" class="bg-black/60 hover:bg-black/70 text-white px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-white" aria-label="Sebelumnya">⟨</button>
            <button @click="next" class="bg-black/60 hover:bg-black/70 text-white px-3 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-white" aria-label="Berikutnya">⟩</button>
          </div>

          {{-- Dots --}}
          <div class="absolute bottom-4 w-full flex justify-center gap-2">
            <template x-for="(slide, i) in slides" :key="`dot-${i}`">
              <button
                @click="go(i)" @keydown.enter.prevent="go(i)"
                class="w-3 h-3 rounded-full ring-1 ring-white/60 focus:outline-none focus:ring-2 focus:ring-white"
                :class="current === i ? 'bg-white' : 'bg-white/40'"
                :aria-label="`Ke slide ${i+1}`"
                :aria-current="current===i"
                tabindex="0"
              ></button>
            </template>
          </div>
        </div>
      </div>

      {{-- Alpine component for carousel --}}
      <script>
        function carousel(){
          return {
            current: 0,
            slides: [
              { img: '/images/pbg.jpg',     text: 'Alun-Alun Selatan tempo dulu' },
              { img: '/images/stasiun.jpg', text: 'Stasiun Poerbolinggo' },
              { img: '/images/masjid.jpg',  text: 'Masjid Agung Darussalam' }
            ],
            timer: null,
            next(){ this.current = (this.current + 1) % this.slides.length },
            prev(){ this.current = (this.current - 1 + this.slides.length) % this.slides.length },
            go(i){ this.current = i },
            start(){ this.timer = setInterval(() => this.next(), 5000) },
            stop(){ clearInterval(this.timer) },
            init(){
              this.start();
              // pause saat hover & jika tab tidak aktif
              document.addEventListener('visibilitychange', () => {
                document.hidden ? this.stop() : this.start();
              });
              // keyboard ← →
              window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') this.prev();
                if (e.key === 'ArrowRight') this.next();
              });
            }
          }
        }
      </script>
    </section>

    {{-- Garis Pembatas --}}
    <div class="h-1 bg-[#5c3d2e]"></div>

    {{-- Tokoh Purbalingga --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
      <div class="flex items-end justify-between gap-4">
        <div>
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Tokoh Purbalingga</h2>
          <p class="text-gray-600 mt-1">Mereka yang menginspirasi perjuangan dan pembangunan daerah.</p>
        </div>
      </div>

      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- Card Tokoh 1 --}}
        <article class="relative overflow-hidden rounded-xl shadow group">
          <div class="w-full h-[220px] bg-gray-200/40">
            <img src="/images/soedirman.jpeg" alt="Jenderal Soedirman"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" decoding="async">
          </div>
          <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
            <p class="text-white text-center px-4">Panglima Besar Revolusi Indonesia</p>
          </div>
          <div class="mt-3 px-1">
            <p class="text-green-700 font-semibold text-sm">Tokoh</p>
            <h3 class="text-gray-900 font-medium">Jenderal Soedirman</h3>
          </div>
        </article>

        {{-- Card Tokoh 2 --}}
        <article class="relative overflow-hidden rounded-xl shadow group">
          <div class="w-full h-[220px] bg-gray-200/40">
            <img src="/images/pbg.jpg" alt="Ahmad Yani"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" decoding="async">
          </div>
          <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
            <p class="text-white text-center px-4">Pahlawan Revolusi Indonesia</p>
          </div>
          <div class="mt-3 px-1">
            <p class="text-green-700 font-semibold text-sm">Tokoh</p>
            <h3 class="text-gray-900 font-medium">Ahmad Yani</h3>
          </div>
        </article>

        {{-- Placeholder contoh tambahan --}}
        <article class="relative overflow-hidden rounded-xl shadow group">
          <div class="w-full h-[220px] bg-gray-200/40">
            <img src="/images/masjid.jpg" alt="Tokoh Purbalingga"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" decoding="async">
          </div>
          <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
            <p class="text-white text-center px-4">Kontributor pembangunan daerah</p>
          </div>
          <div class="mt-3 px-1">
            <p class="text-green-700 font-semibold text-sm">Tokoh</p>
            <h3 class="text-gray-900 font-medium">Nama Tokoh</h3>
          </div>
        </article>

        <article class="relative overflow-hidden rounded-xl shadow group">
          <div class="w-full h-[220px] bg-gray-200/40">
            <img src="/images/stasiun.jpg" alt="Tokoh Purbalingga"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" decoding="async">
          </div>
          <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
            <p class="text-white text-center px-4">Pelopor pendidikan & kebudayaan</p>
          </div>
          <div class="mt-3 px-1">
            <p class="text-green-700 font-semibold text-sm">Tokoh</p>
            <h3 class="text-gray-900 font-medium">Nama Tokoh</h3>
          </div>
        </article>
      </div>

      <div class="sm:hidden mt-6">
        <a href="/tokoh" class="inline-flex items-center text-sm font-medium px-3 py-2 rounded-lg border hover:bg-gray-50">Lihat semua</a>
      </div>
    </section>

    {{-- Ajakan eksplor --}}
    <section class="bg-[#FFECD1]/60 border-t">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 grid md:grid-cols-3 gap-6">
        <a href="/kuliner" class="group rounded-2xl border bg-white p-5 hover:shadow-md transition">
          <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
          <h3 class="mt-1 font-semibold text-lg">Kuliner Purbalingga</h3>
          <p class="text-sm text-gray-600 mt-1">Sroto Purbalingga, buntil, mendoan, dan lainnya.</p>
        </a>
        <a href="/senitradisi" class="group rounded-2xl border bg-white p-5 hover:shadow-md transition">
          <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
          <h3 class="mt-1 font-semibold text-lg">Seni & Tradisi</h3>
          <p class="text-sm text-gray-600 mt-1">Ebeg, lengger, kentongan, karawitan.</p>
        </a>
        <a href="/batik" class="group rounded-2xl border bg-white p-5 hover:shadow-md transition">
          <p class="text-xs uppercase tracking-wider text-[#C59867]">Eksplor</p>
          <h3 class="mt-1 font-semibold text-lg">Batik Daerah</h3>
          <p class="text-sm text-gray-600 mt-1">Motif lokal bernuansa lereng Slamet.</p>
        </a>
      </div>
    </section>

    {{-- Back to top --}}
    <button
      x-data="{show:false}"
      x-init="window.addEventListener('scroll',()=>{ show = window.scrollY>600 })"
      x-show="show" x-transition
      @click="window.scrollTo({top:0,behavior:'smooth'})"
      class="fixed bottom-5 right-5 h-11 w-11 rounded-full bg-[#C59867] text-white shadow-lg flex items-center justify-center hover:bg-[#a98152]"
      aria-label="Kembali ke atas">↑</button>
  </main>

  {{-- Footer --}}
  @include('footer')
</body>
</html>

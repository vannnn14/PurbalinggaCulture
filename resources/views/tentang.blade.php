<!DOCTYPE html>
<html lang="id" x-data>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Tentang Kami - PurbaCulture</title>

  {{-- Vite (Tailwind + app js) --}}
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- Alpine + intersect plugin --}}
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js" defer></script>

  {{-- Swiper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>

  <style>
    :root{
      --brand-dark: #1c1005;
      --brand-cream: #FFECD1;
      --accent: #FACC15; /* kuning */
      --green: #2F5233;
    }

    /* simple reveal */
    .fade-up { opacity: 0; transform: translateY(30px); transition: all .7s cubic-bezier(.2,.9,.2,1); }
    .fade-up.show { opacity: 1; transform: translateY(0); }

    /* make swiper button colors visible */
    .swiper-button-next, .swiper-button-prev { color: var(--accent); }
    .swiper-pagination-bullet-active { background: var(--accent); }
  </style>
</head>

<body class="bg-[var(--brand-cream)] text-[var(--brand-dark)]">
  {{-- Optional: include navbar if exists --}}
  @includeIf('navbar')

  <!-- Swiper main container -->
  <div class="swiper mySwiper w-full h-screen">
    <div class="swiper-wrapper">

      {{-- Slide 1: Tentang Kami + Visi Misi + Anggota --}}
<section class="swiper-slide h-screen overflow-y-auto bg-[var(--brand-dark)] text-white px-6 py-12 flex flex-col items-center">
  <div class="max-w-6xl w-full">

    <!-- Judul -->
    <div class="fade-up text-center mb-12" x-data x-intersect="$el.classList.add('show')">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Tentang Kami</h1>
      <p class="text-lg md:text-xl text-[rgba(255,255,255,0.9)] max-w-3xl mx-auto">
        Kami tim <span class="text-[var(--accent)] font-semibold">PurbaCulture</span> berkomitmen melestarikan budaya Purbalingga 
        lewat teknologi digital — dokumentasi, edukasi, dan pengalaman interaktif untuk generasi berikutnya.
      </p>
    </div>

    <!-- Visi & Misi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
      <div class="fade-up bg-[var(--brand-cream)] text-[var(--brand-dark)] p-8 rounded-2xl shadow-xl border-t-4 border-[var(--accent)]">
        <h2 class="text-3xl font-bold mb-4">Visi</h2>
        <p class="text-lg leading-relaxed">
          Menjadi wadah digital yang melestarikan, memperkenalkan, dan menginspirasi generasi muda untuk mencintai budaya Purbalingga.
        </p>
      </div>
      <div class="fade-up bg-[var(--brand-cream)] text-[var(--brand-dark)] p-8 rounded-2xl shadow-xl border-t-4 border-[var(--accent)]">
        <h2 class="text-3xl font-bold mb-4">Misi</h2>
        <ul class="list-disc list-inside space-y-2 text-lg leading-relaxed">
          <li>Mendokumentasikan budaya lokal secara digital.</li>
          <li>Menyediakan platform edukasi yang mudah diakses.</li>
          <li>Mempromosikan budaya melalui pengalaman interaktif.</li>
          <li>Membangun komunitas pelestari budaya.</li>
        </ul>
      </div>
    </div>

    <!-- Anggota -->
    <div class="fade-up grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">
      <div class="group">
        <div class="relative w-36 h-36 mx-auto mb-4 rounded-full overflow-hidden shadow-2xl border-4 border-[var(--accent)] group-hover:scale-105 transition-transform">
          <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 1" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-semibold">Nama Anggota 1</h3>
        <p class="text-[var(--green)] text-sm">Frontend Developer</p>
      </div>

      <div class="group">
        <div class="relative w-36 h-36 mx-auto mb-4 rounded-full overflow-hidden shadow-2xl border-4 border-[var(--accent)] group-hover:scale-105 transition-transform">
          <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 2" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-semibold">Nama Anggota 2</h3>
        <p class="text-[var(--green)] text-sm">Backend Developer</p>
      </div>

      <div class="group">
        <div class="relative w-36 h-36 mx-auto mb-4 rounded-full overflow-hidden shadow-2xl border-4 border-[var(--accent)] group-hover:scale-105 transition-transform">
          <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 3" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-semibold">Nama Anggota 3</h3>
        <p class="text-[var(--green)] text-sm">Content Researcher</p>
      </div>
    </div>

  </div>
</section>


      {{-- Slide 2: Anggota 1 --}}
      <section class="swiper-slide flex items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-auto md:h-[80%] max-w-6xl mx-auto shadow-lg rounded-lg overflow-hidden">
          <!-- Foto kiri -->
          <div class="w-full h-80 md:h-auto">
            <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 1" class="w-full h-full object-cover">
          </div>
          <!-- Konten kanan -->
          <div class="flex flex-col justify-center p-8 bg-[var(--brand-cream)] text-[var(--brand-dark)]">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Nama Anggota 1</h2>
            <p class="text-[var(--green)] font-medium mb-4">Frontend Developer</p>
            <p class="text-lg leading-relaxed mb-6">Mempadu-padankan estetika tradisional Purbalingga dengan praktik UI modern agar konten budaya mudah dinikmati semua usia.</p>
            <blockquote class="italic text-lg">“Membuat budaya lebih hidup dengan desain UI/UX ramah pengguna.”</blockquote>
          </div>
        </div>
      </section>

      {{-- Slide 3: Anggota 2 --}}
      <section class="swiper-slide flex items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-auto md:h-[80%] max-w-6xl mx-auto shadow-lg rounded-lg overflow-hidden">
          <!-- Konten kiri -->
          <div class="flex flex-col justify-center p-8 bg-[var(--brand-dark)] text-white order-2 md:order-1">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Nama Anggota 2</h2>
            <p class="text-[var(--accent)] font-medium mb-4">Backend Developer</p>
            <p class="text-lg leading-relaxed mb-6">Menjaga kestabilan data dan API, memastikan semua konten budaya tersimpan rapi dan dapat diakses cepat oleh pengguna.</p>
            <blockquote class="italic text-lg text-[rgba(255,255,255,0.85)]">“Budaya butuh fondasi kuat — begitu juga sistem kami.”</blockquote>
          </div>
          <!-- Foto kanan -->
          <div class="w-full h-80 md:h-auto order-1 md:order-2">
            <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 2" class="w-full h-full object-cover">
          </div>
        </div>
      </section>

      {{-- Slide 4: Anggota 3 --}}
      <section class="swiper-slide flex items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-auto md:h-[80%] max-w-6xl mx-auto shadow-lg rounded-lg overflow-hidden">
          <!-- Foto kiri -->
          <div class="w-full h-80 md:h-auto">
            <img src="{{ asset('images/irvanbg.png') }}" alt="Anggota 3" class="w-full h-full object-cover">
          </div>
          <!-- Konten kanan -->
          <div class="flex flex-col justify-center p-8 bg-[var(--brand-cream)] text-[var(--brand-dark)]">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Nama Anggota 3</h2>
            <p class="text-[var(--green)] font-medium mb-4">Content Researcher</p>
            <p class="text-lg leading-relaxed mb-6">Menggali arsip, cerita lokal, dan etnografi agar konten yang ditampilkan akurat, terhormat, dan menarik generasi muda.</p>
            <blockquote class="italic text-lg">“Menggali cerita lama untuk masa depan. Data budaya adalah ruh PurbaCulture.”</blockquote>
          </div>
        </div>
      </section>

    </div>

    <!-- Swiper UI -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  {{-- Optional footer include --}}
  @includeIf('footer')

  {{-- Swiper init --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper(".mySwiper", {
        effect: "slide",
        grabCursor: true,
        centeredSlides: false,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        speed: 700,
      });
    });
  </script>
</body>
</html>

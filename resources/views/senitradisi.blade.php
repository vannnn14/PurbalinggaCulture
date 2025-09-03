<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seni & Tradisi Lokal Purbalingga</title>

  {{-- Gunakan Vite yang sama seperti halaman lain (JANGAN pakai Tailwind CDN di sini) --}}
  @vite('resources/css/app.css')

  {{-- AOS (opsional) --}}
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">
   <!-- Navbar -->
    @include('navbar')
  <!-- Hero Section -->
<section class="relative w-full h-[80vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/bgsenitradisi.jpg') }}');">
  <div class="absolute inset-0 bg-black bg-opacity-60"></div>
  <div class="relative z-10 text-center px-4" data-aos="fade-up">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Seni & Tradisi Lokal Purbalingga</h1>
    <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
      Mengenai seni pertunjukan, kerajinan tangan, dan upacara adat yang tetap lestari di Purbalingga
    </p>
  </div>
</section>

  {{-- 3 Icon Intro --}}
  <section class="py-14 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-3 gap-6 md:gap-10 text-center">
      <div data-aos="zoom-in" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">🎭</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Seni Pertunjukan</h3>
        <p class="text-gray-600 text-sm md:text-base">Tarian, musik, dan kesenian tradisional yang sarat makna.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="150" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">✨</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Tradisi & Upacara Adat</h3>
        <p class="text-gray-600 text-sm md:text-base">Nyadran, sedekah bumi, serta tradisi yang diwariskan turun-temurun.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="300" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">🧶</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Kerajinan Tangan</h3>
        <p class="text-gray-600 text-sm md:text-base">Anyaman bambu, ukiran kayu, dan kreasi khas Purbalingga.</p>
      </div>
    </div>
  </section>

  {{-- SENI --}}
<section class="py-14 md:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold mb-3">SENI</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
      Seni adalah ekspresi kreatif manusia dalam bentuk visual, audio, maupun pertunjukan untuk menyampaikan gagasan dan perasaan.
    </p>
    <div class="grid md:grid-cols-3 gap-8">
      <div data-aos="fade-up" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/tarilengger.jpg') }}" alt="Tari Lengger" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Tari Lengger</h3>
      </div>
      <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/kudalumping.png') }}" alt="Kuda Lumping" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Kuda Lumping</h3>
      </div>
      <div data-aos="fade-up" data-aos-delay="400" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/begalan.png') }}" alt="Tradisi Begalan" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Tradisi Begalan</h3>
      </div>
    </div>
  </div>
</section>

{{-- TRADISI --}}
<section class="py-14 md:py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold mb-3">TRADISI & UPACARA ADAT</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
      Upacara adat adalah praktik budaya turun-temurun yang dijalankan berdasarkan nilai dan aturan masyarakat setempat.
    </p>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in">
        <img src="{{ asset('images/nyadran.png') }}" alt="Nyadran" class="w-full h-40 object-cover">
        <h3 class="p-4 font-semibold">Nyadran</h3>
      </div>
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="150">
        <img src="{{ asset('images/sedekahbumi.png') }}" alt="Sedekah Bumi" class="w-full h-40 object-cover">
        <h3 class="p-4 font-semibold">Sedekah Bumi</h3>
      </div>
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
        <img src="{{ asset('images/ujangan.png') }}" alt="Ujungan" class="w-full h-40 object-cover">
        <h3 class="p-4 font-semibold">Ujungan</h3>
      </div>
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="450">
        <img src="{{ asset('images/bgsenitradisi.jpg') }}" alt="Tradisi Adat Lainnya" class="w-full h-40 object-cover">
        <h3 class="p-4 font-semibold">Tradisi Adat Lainnya</h3>
      </div>
    </div>
  </div>
</section>

{{-- KERAJINAN --}}
<section class="py-14 md:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold mb-3">KERAJINAN TANGAN</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
      Kerajinan tangan mengandalkan keterampilan untuk menghasilkan benda bernilai fungsi sekaligus estetika.
    </p>

    <div class="grid md:grid-cols-3 gap-6 md:gap-8">
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left">
        <img src="{{ asset('images/sapuglagah.png') }}" alt="Sapu Glagah" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Sapu Glagah</h3>
      </div>
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left" data-aos-delay="150">
        <img src="{{ asset('images/blangkon.png') }}" alt="Blangkon Soedirman" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Blangkon Soedirman</h3>
      </div>
      <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left" data-aos-delay="300">
        <img src="{{ asset('images/wayangsuket.png') }}" alt="Wayang Suket" class="w-full h-48 object-cover">
        <h3 class="p-4 font-semibold">Wayang Suket</h3>
      </div>
    </div>
  </div>
</section>

  {{-- AOS JS --}}
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script> AOS.init({ duration: 800, once: true }); </script>

  {{-- Footer (pastikan versi tanpa margin-top) --}}
  @include('footer')
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PurbaCulture</title>
  @vite('resources/css/app.css')

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS Animate On Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body class="bg-[#fef7eb] text-gray-900 font-sans">

  {{-- Navbar --}}
  @include('navbar')

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-amber-900 to-yellow-800 text-white overflow-hidden">
    <!-- Background Overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="/images/image.png" class="w-full h-full object-cover" alt="Background">
    </div>

    <!-- Wave Bottom -->
<div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" 
       preserveAspectRatio="none" class="w-full h-20 md:h-28">
    <path fill="#fdf6ec" fill-opacity="1" 
      d="M0,64 C360,120 1080,0 1440,64 L1440,120 L0,120 Z">
    </path>
  </svg>
</div>

    <div class="relative max-w-7xl mx-auto px-6 py-28 flex flex-col md:flex-row items-center gap-10">
      <div class="flex-1 space-y-6" data-aos="fade-right">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">PurbaCulture</h1>
        <p class="text-lg leading-relaxed max-w-lg opacity-90">
          Platform digital untuk memperkenalkan budaya Purbalingga melalui tradisi, seni, kuliner, tokoh, dan bahasa lokal.
        </p>
        <a href="#menu-utama"
          class="inline-block bg-amber-600 hover:bg-amber-700 transition text-white px-8 py-3 rounded-lg font-semibold shadow-lg">
          Mulai Jelajahi →
        </a>
      </div>
    </div>
  </section>

  <!-- Tentang Section -->
  <section class="max-w-6xl mx-auto px-6 py-20 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-amber-900 mb-6">Tentang PurbaCulture</h2>
    <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed">
      PurbaCulture hadir sebagai jembatan untuk mengenal lebih dekat kekayaan budaya Purbalingga. 
      Dari seni tradisi, tokoh bersejarah, hingga kuliner khas yang melegenda. 
      Kami berkomitmen melestarikan warisan leluhur melalui media digital yang modern dan interaktif.
    </p>
  </section>

  <!-- Statistik Budaya -->
  <section class="bg-amber-50 py-16">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-4xl font-bold text-amber-800">20+</h3>
        <p class="text-gray-700">Tradisi</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-4xl font-bold text-amber-800">15+</h3>
        <p class="text-gray-700">Tokoh Bersejarah</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-4xl font-bold text-amber-800">30+</h3>
        <p class="text-gray-700">Kuliner Khas</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-4xl font-bold text-amber-800">25+</h3>
        <p class="text-gray-700">Wisata</p>
      </div>
    </div>
  </section>

  <!-- Menu Utama -->
  <section id="menu-utama" class="max-w-7xl mx-auto px-6 py-20">
    <h2 class="text-3xl font-bold text-center text-amber-900 mb-14">Jelajahi Budaya Purbalingga</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach ([
        ['title'=>'Seni & Tradisi','img'=>'kentongan.png','link'=>'/senitradisi'],
        ['title'=>'Sejarah Purbalingga','img'=>'tokoh1.png','link'=>'/sejarah'],
        ['title'=>'Batik Daerah','img'=>'batik.jpg','link'=>'/batik'],
        ['title'=>'Kuliner','img'=>'mendoan1.jpg','link'=>'/kuliner']
      ] as $menu)
      <a href="{{ $menu['link'] }}"
        class="group relative block rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500"
        data-aos="zoom-in">
        <img src="/images/{{ $menu['img'] }}" alt="{{ $menu['title'] }}"
          class="w-full h-56 md:h-64 object-cover group-hover:scale-110 transition-transform duration-700">
        <div
          class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <span class="text-white font-bold text-xl">{{ $menu['title'] }}</span>
        </div>
      </a>
      @endforeach
    </div>
  </section>

  <!-- Translate Section -->
  <section class="bg-amber-50 py-16" data-aos="fade-up">
    <div class="max-w-4xl mx-auto text-center space-y-6">
      <h2 class="text-2xl md:text-3xl font-semibold">
        Jelajahi kekayaan bahasa daerah lewat
        <span class="text-amber-800 font-bold">Ngapak Translator</span>
      </h2>
      <div class="flex justify-center">
        <a href="{{ url('/bahasa') }}">
          <img src="/images/translate.png" alt="Translate"
            class="w-28 hover:scale-110 transition duration-500 ease-in-out mx-auto drop-shadow-md">
        </a>
      </div>
      <p class="text-gray-600">Klik untuk mencoba fitur translator Ngapak ↔ Indonesia</p>
    </div>
  </section>

  <!-- Agenda Budaya -->
  <section class="max-w-7xl mx-auto px-6 py-20" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-center text-amber-900 mb-14">Agenda Budaya</h2>
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div class="bg-white shadow-lg rounded-xl p-8">
        <h3 class="text-xl font-semibold text-amber-800 mb-3">Festival Bunang Gamel</h3>
        <p class="text-gray-600 mb-2">📅 21 Juli 2025</p>
        <p class="text-gray-600 mb-4">📍 Alun-alun Purbalingga</p>
        <p class="text-gray-700 leading-relaxed mb-4">
          Festival budaya menampilkan gamelan, tari tradisional, serta pameran batik khas daerah
          untuk melestarikan warisan leluhur.
        </p>
        <a href="/agenda"
          class="inline-block mt-2 bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-md shadow-md">
          Lihat Agenda Lainnya
        </a>
      </div>
      <div class="flex justify-center">
        <img src="/images/slamet.png" alt="Poster Festival"
          class="w-80 rounded-xl shadow-xl hover:scale-105 transition-transform duration-500">
      </div>
    </div>
  </section>

<!-- Artikel Budaya (Carousel) -->
<section class="max-w-7xl mx-auto px-6 py-20" data-aos="fade-up">
  <h2 class="text-3xl font-bold text-center text-amber-900 mb-14">Artikel Budaya</h2>
  <div class="swiper artikelSwiper">
    <div class="swiper-wrapper">
      @foreach ([
        [
          'judul' => 'Mengenal Batik Purbalingga',
          'isi'   => 'Mengenal batik khas Purbalingga yang unik dan bersejarah.',
          'img'   => 'batik.jpg',
          'url'   => url('/batik')
        ],
        [
          'judul' => 'Tradisi Kuda Lumping',
          'isi'   => 'Kesenian rakyat penuh makna spiritual dan kebersamaan.',
          'img'   => 'ebeg.jpg',
          'url'=>route('seni.show','kuda-lumping')],
        [
          'judul' => 'Kuliner Tempe Mendoan',
          'isi'   => 'Tempe mendoan yang gurih, tipis, dan nikmat disantap hangat.',
          'img'   => 'mendoan1.jpg',
          'url'=>route('kuliner.show','tempe-mendoan-gurih-tipis-hangat')],
        [
          'judul' => 'Seni Tari Lengger',
          'isi'   => 'Pesona tari tradisional Lengger yang khas Purbalingga.',
          'img'   => 'lengger.jpg',
          'url'=>route('seni.show','tari-lengger')],
        [
          'judul' => 'Sapu Glagah',
          'isi'   => 'Nilai luhur kebersamaan masyarakat Purbalingga.',
          'img'   => 'sapuglagah.png',
          'url'=>route('kerajinan.show','sapu-glagah')],
        [
          'judul' => 'Nyadran',
          'isi'   => 'Nilai luhur kebersamaan masyarakat Purbalingga.',
          'img'   => 'nyadran.png',
          'url'=>route('tradisi.show','nyadran')],
        [
          'judul' => 'Sedekah Bumi',
          'isi'   => 'Nilai luhur kebersamaan masyarakat Purbalingga.',
          'img'   => 'gotong.jpg',
          'url'=>route('tradisi.show','sedekah-bumi')],
      ] as $artikel)
      <div class="swiper-slide">
        <a href="{{ $artikel['url'] }}" 
           class="block bg-white shadow-md rounded-xl overflow-hidden hover:shadow-2xl transition duration-500 h-full flex flex-col">
          <img src="/images/{{ $artikel['img'] }}" alt="{{ $artikel['judul'] }}" class="w-full h-48 object-cover">
          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-lg font-semibold text-amber-800 mb-2">{{ $artikel['judul'] }}</h3>
            <p class="text-gray-600 text-sm flex-1">{{ $artikel['isi'] }}</p>
            <span class="mt-4 inline-block text-amber-700 font-semibold hover:underline">Selengkapnya →</span>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <div class="swiper-pagination mt-6"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>



  <!-- Testimoni -->
  <section class="bg-amber-100 py-20">
    <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
      <p class="text-xl italic text-gray-700 mb-6">“Budaya adalah identitas, dan Purbalingga punya warisan yang luar biasa untuk dijaga bersama.”</p>
      <span class="font-semibold text-amber-800">— Tokoh Budaya Purbalingga</span>
    </div>
  </section>

  {{-- Footer --}}
  @include('footer')

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    const artikelSwiper = new Swiper(".artikelSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 4000, disableOnInteraction: false },
      breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    });
  </script>

</body>
</html>
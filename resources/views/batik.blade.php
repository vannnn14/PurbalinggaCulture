<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Batik — Purbalingga Culture</title>
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    /* Animasi Slide Vertikal */
    .slide-in {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .slide-in-visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Animasi Slide Horizontal */
    .slide-in-horizontal {
      opacity: 0;
      transform: translateX(-50px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .slide-in-horizontal-visible {
      opacity: 1;
      transform: translateX(0);
    }
  </style>
</head>

<body class="antialiased text-gray-800 bg-[#ffeccd]">
  {{-- Navbar --}}
  @include('navbar')

  {{-- HERO --}}
  <section
    x-data="{ isHover:false }"
    class="relative bg-gradient-to-b from-[#ffeccd] to-[#faf4e1] min-h-[85vh] flex flex-col justify-center items-center py-20 px-6 overflow-hidden">
    {{-- Ornamen --}}
    <img src="{{ asset('images/bgleft.png') }}" alt="" aria-hidden="true"
         class="absolute top-0 left-0 w-48 sm:w-60 opacity-80 pointer-events-none"/>
    <img src="{{ asset('images/bgright.png') }}" alt="" aria-hidden="true"
         class="absolute bottom-0 right-0 w-48 sm:w-60 opacity-80 pointer-events-none"/>

    <div class="relative z-10 text-center max-w-3xl w-full">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-4 tracking-tight text-gray-900">Kenali Batik Purbalingga</h1>
      <p class="text-gray-700 mb-8 text-lg">Warisan wastra khas lereng Slamet. Arahkan kursor ke video untuk memutar.</p>

      <div class="relative w-full max-w-[760px] aspect-video mx-auto rounded-3xl overflow-hidden shadow-2xl ring-2 ring-[#09cd88]/40"
           @mouseenter="isHover=true" @mouseleave="isHover=false">
        <iframe
          :src="isHover
            ? 'https://www.youtube.com/embed/I3uLzUUoXAk?autoplay=1&mute=0'
            : 'https://www.youtube.com/embed/I3uLzUUoXAk?autoplay=0&mute=1'"
          title="Batik Purbalingga"
          class="w-full h-full"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

      <p class="mt-8 text-gray-800 leading-relaxed text-lg">
        Batik dibuat dengan teknik perintang warna menggunakan malam. Lebih dari sekadar kain, batik adalah warisan budaya
        yang sarat seni, sejarah, dan filosofi.
      </p>
    </div>
  </section>

  {{-- Separator --}}

  {{-- TEKNIK BATIK --}}
  <section class="relative bg-[#ffeccd] py-20">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      {{-- Gambar kolase --}}
      <div class="grid grid-cols-2 gap-5">
        <div class="rounded-2xl overflow-hidden shadow-xl transform hover:scale-[1.02] transition">
          <img src="{{ asset('images/tulis.jpg') }}" alt="Proses Batik Tulis"
               class="w-full h-48 sm:h-64 object-cover" loading="lazy">
        </div>
        <div class="rounded-2xl overflow-hidden shadow-xl transform hover:scale-[1.02] transition">
          <img src="{{ asset('images/cap.jpg') }}" alt="Proses Batik Cap"
               class="w-full h-48 sm:h-64 object-cover" loading="lazy">
        </div>
        <div class="col-span-2 rounded-2xl overflow-hidden shadow-xl transform hover:scale-[1.02] transition">
          <img src="{{ asset('images/printing.jpg') }}" alt="Batik Printing"
               class="w-full h-56 sm:h-72 object-cover" loading="lazy">
        </div>
      </div>

      {{-- Penjelasan --}}
      <div class="relative text-gray-800 slide-in" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-6 border-l-4 border-[#09cd88] pl-3">Teknik Membuat Batik</h2>
        <p class="text-gray-700 mb-8 text-lg leading-relaxed">
          Setiap teknik menghadirkan karakter motif, kedalaman warna, serta lama proses yang berbeda. 
          Inilah tiga teknik utama dalam pembuatan batik.
        </p>

        <div class="space-y-6">
          <div class="p-5 bg-white/70 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-semibold text-lg text-[#09cd88]">› Batik Tulis</h3>
            <p class="text-sm mt-1">Menggunakan canting untuk menggambar malam langsung di kain. Detail halus, pengerjaan lama, tiap lembar unik.</p>
          </div>
          <div class="p-5 bg-white/70 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-semibold text-lg text-[#09cd88]">› Batik Cap</h3>
            <p class="text-sm mt-1">Menggunakan cap tembaga bermotif. Proses cepat dan pola seragam, tapi pewarnaan tetap memerlukan keahlian.</p>
          </div>
          <div class="p-5 bg-white/70 rounded-xl shadow-sm hover:shadow-md transition">
            <h3 class="font-semibold text-lg text-[#09cd88]">› Batik Printing</h3>
            <p class="text-sm mt-1">Motif dicetak dengan mesin/sablon, efisien dan variatif. Walau tidak pakai malam, tetap mengusung estetika batik.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- MOTIF & FILOSOFI --}}
  <section class="bg-[#faf4e1] py-20 slide-in-horizontal" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Motif dan Filosofi</h3>
      <p class="text-gray-600 mt-2 text-lg">Pelajari makna motif batik khas Purbalingga</p>

      <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        {{-- Card --}}
        <article class="rounded-3xl overflow-hidden border bg-white hover:shadow-lg transition group">
          <img src="{{ asset('images/lava1.jpg') }}" alt="Motif Batik Lava"
               class="w-full h-48 object-cover group-hover:scale-[1.03] transition">
          <div class="p-5 text-left">
            <h4 class="font-semibold text-lg">Motif Batik Lava</h4>
            <p class="text-sm text-gray-600 mt-1">Terinspirasi dinamika vulkanik Gunung Slamet—keteguhan & pembaharuan.</p>
          </div>
        </article>

        <article class="rounded-3xl overflow-hidden border bg-white hover:shadow-lg transition group">
          <img src="{{ asset('images/lumban.jpg') }}" alt="Motif Batik Lumban"
               class="w-full h-48 object-cover group-hover:scale-[1.03] transition">
          <div class="p-5 text-left">
            <h4 class="font-semibold text-lg">Motif Batik Lumban</h4>
            <p class="text-sm text-gray-600 mt-1">Pola sawah dan air—kemakmuran, keseimbangan, dan kesuburan.</p>
          </div>
        </article>

        <article class="rounded-3xl overflow-hidden border bg-white hover:shadow-lg transition group">
          <img src="{{ asset('images/merak.jpg') }}" alt="Motif Merak"
               class="w-full h-48 object-cover group-hover:scale-[1.03] transition">
          <div class="p-5 text-left">
            <h4 class="font-semibold text-lg">Motif Merak</h4>
            <p class="text-sm text-gray-600 mt-1">Keanggunan & harapan baik—ikon estetika yang banyak disukai.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  {{-- PROSES PEMBUATAN --}}
  <section class="bg-[#ffeccd] py-20 slide-in-horizontal">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-900 text-center">Dari kain polos sampai jadi batik</h3>

      <div class="mt-8 overflow-x-auto">
        <div class="flex gap-6 snap-x snap-mandatory pb-3">
          @php
            $steps = [
              ['img'=>'images/kain.jpg',     'title'=>'Menyiapkan Kain',   'desc'=>'Pencucian & pengelantangan agar warna meresap'],
              ['img'=>'images/sketsa.jpg',   'title'=>'Membuat Sketsa',    'desc'=>'Rancang motif sesuai pakem/motif lokal'],
              ['img'=>'images/canting.jpg',  'title'=>'Mencanting',        'desc'=>'Tarik garis malam sebagai perintang'],
              ['img'=>'images/pewarnaan.jpg','title'=>'Pewarnaan/Celup',   'desc'=>'Pencelupan bertahap untuk kedalaman warna'],
              ['img'=>'images/detail.jpg',   'title'=>'Colet/Detail',      'desc'=>'Pewarnaan manual pada bagian tertentu'],
              ['img'=>'images/lorod.jpg',    'title'=>'Pelorodan',         'desc'=>'Melepas malam dan finishing kain'],
              ['img'=>'images/batikjadi.jpg','title'=>'Siap Dipakai',      'desc'=>'Kain batik selesai—siap dijahit/dipakai'],
            ];
          @endphp

          @foreach($steps as $s)
            <article class="snap-start min-w-[240px] w-[260px] bg-white rounded-2xl overflow-hidden border hover:shadow-md transition">
              <img src="{{ asset($s['img']) }}" alt="{{ $s['title'] }}"
                   class="w-full h-40 object-cover">
              <div class="p-4">
                <h4 class="font-semibold text-base">{{ $s['title'] }}</h4>
                <p class="text-xs text-gray-600 mt-1">{{ $s['desc'] }}</p>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- Footer --}}
  @include('footer')

  <script>
    // Intersection Observer API untuk Slide Timble (vertical/horizontal)
    const options = {
      rootMargin: '0px',
      threshold: 0.5
    };

    const slideInElements = document.querySelectorAll('.slide-in');
    const slideInHorizontalElements = document.querySelectorAll('.slide-in-horizontal');

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(entry.target.classList.contains('slide-in') ? 'slide-in-visible' : 'slide-in-horizontal-visible');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    slideInElements.forEach(element => {
      observer.observe(element);
    });

    slideInHorizontalElements.forEach(element => {
      observer.observe(element);
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Batik — Purbalingga Culture</title>
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased text-gray-800">
  {{-- Navbar --}}
  @include('navbar')

  {{-- HERO --}}
  <section
    x-data="{ isHover:false }"
    class="relative bg-[#FAF4E1] min-h-[80vh] flex flex-col justify-center items-center py-16 px-4 overflow-hidden">

    {{-- Ornamen --}}
    <img src="{{ asset('images/bgleft.png') }}" alt="" aria-hidden="true"
         class="absolute top-0 left-0 w-40 sm:w-56 opacity-80 pointer-events-none"/>
    <img src="{{ asset('images/bgright.png') }}" alt="" aria-hidden="true"
         class="absolute bottom-0 right-0 w-40 sm:w-56 opacity-80 pointer-events-none"/>

    <div class="relative z-10 text-center max-w-3xl w-full">
      <h1 class="text-3xl md:text-4xl font-bold mb-3">Kenali Batik Purbalingga</h1>
      <p class="text-gray-700 mb-6">Warisan wastra khas lereng Slamet. Arahkan kursor untuk menyalakan video.</p>

      <div class="relative w-full max-w-[720px] aspect-video mx-auto rounded-2xl overflow-hidden shadow-xl"
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

      <p class="mt-6 text-gray-800 leading-relaxed">
        Batik dibuat dengan teknik perintang warna menggunakan malam. Bukan sekadar kain, melainkan warisan budaya
        bernilai seni, sejarah, dan filosofi.
      </p>
    </div>
  </section>

  {{-- Separator hijau --}}
  <div class="h-2 bg-[#09cd88]"></div>

  {{-- TEKNIK BATIK --}}
  <section class="relative bg-[#FFECD1] py-16">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
      
      {{-- Grid gambar kiri --}}
      <div class="grid grid-cols-2 gap-6 order-1 md:order-none">
        <div class="rounded-2xl overflow-hidden shadow-lg">
          <img src="{{ asset('images/batik-tulis.jpg') }}" alt="Proses Batik Tulis"
               class="w-full h-48 sm:h-64 object-cover" loading="lazy">
        </div>
        <div class="rounded-2xl overflow-hidden shadow-lg row-start-2">
          <img src="{{ asset('images/batik-cap.jpg') }}" alt="Proses Batik Cap"
               class="w-full h-48 sm:h-64 object-cover" loading="lazy">
        </div>
        <div class="rounded-2xl overflow-hidden shadow-lg col-span-2">
          <img src="{{ asset('images/batik-printing.jpg') }}" alt="Batik Printing"
               class="w-full h-48 sm:h-72 object-cover" loading="lazy">
        </div>
      </div>

      {{-- Deskripsi kanan --}}
      <div class="relative text-gray-800">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Teknik Membuat Batik</h2>
        <p class="text-gray-700 mb-6">Setiap teknik menghadirkan karakter motif, kedalaman warna, serta lama proses berbeda.</p>

        <ul class="space-y-6">
          <li>
            <p class="font-semibold">› Batik Tulis</p>
            <p class="text-sm">Menggunakan canting untuk menggambar malam langsung di kain. Detail halus, pengerjaan lama, tiap lembar unik.</p>
          </li>
          <li>
            <p class="font-semibold">› Batik Cap</p>
            <p class="text-sm">Menggunakan cap tembaga bermotif. Proses cepat dan pola seragam, tapi pewarnaan tetap perlu keahlian.</p>
          </li>
          <li>
            <p class="font-semibold">› Batik Printing</p>
            <p class="text-sm">Motif dicetak dengan mesin/sablon, efisien dan variatif. Walau tidak pakai malam, tetap mengusung estetika batik.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  {{-- MOTIF & FILOSOFI --}}
  <section class="bg-[#FAF4E1]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 text-center">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-900">Motif dan Filosofi</h3>
      <p class="text-gray-600 mt-1">Pelajari lebih lanjut tentang motif dan filosofi batik Purbalingga</p>

      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        {{-- Kartu 1 --}}
        <article class="rounded-2xl overflow-hidden border bg-white hover:shadow-md transition group">
          <img src="{{ asset('images/motif-lava.jpg') }}" alt="Motif Batik Lava"
               class="w-full h-44 object-cover group-hover:scale-[1.02] transition">
          <div class="p-4 text-left">
            <h4 class="font-semibold">Motif Batik Lava</h4>
            <p class="text-sm text-gray-600 mt-1">Terinspirasi dinamika vulkanik Gunung Slamet—keteguhan & pembaharuan.</p>
          </div>
        </article>

        {{-- Kartu 2 --}}
        <article class="rounded-2xl overflow-hidden border bg-white hover:shadow-md transition group">
          <img src="{{ asset('images/motif-lumban.jpg') }}" alt="Motif Batik Lumban"
               class="w-full h-44 object-cover group-hover:scale-[1.02] transition">
          <div class="p-4 text-left">
            <h4 class="font-semibold">Motif Batik Lumban</h4>
            <p class="text-sm text-gray-600 mt-1">Pola sawah dan air—kemakmuran, keseimbangan, dan kesuburan.</p>
          </div>
        </article>

        {{-- Kartu 3 --}}
        <article class="rounded-2xl overflow-hidden border bg-white hover:shadow-md transition group">
          <img src="{{ asset('images/motif-merak.jpg') }}" alt="Motif Merak"
               class="w-full h-44 object-cover group-hover:scale-[1.02] transition">
          <div class="p-4 text-left">
            <h4 class="font-semibold">Motif Merak</h4>
            <p class="text-sm text-gray-600 mt-1">Keanggunan & harapan baik—ikon estetika yang banyak disukai.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  {{-- DARI KAIN POLOS SAMPAI JADI BATIK --}}
  <section class="bg-[#FFECD1]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
      <h3 class="text-xl md:text-2xl font-bold text-gray-900 text-center">Dari kain polos sampai<br class="md:hidden"/> jadi batik</h3>

      {{-- Scroll snap container --}}
      <div class="mt-6 overflow-x-auto">
        <div class="flex gap-4 md:gap-6 snap-x snap-mandatory pb-2">
          @php
            $steps = [
              ['img'=>'images/step-1-kain.jpg',     'title'=>'Menyiapkan Kain',   'desc'=>'Pencucian & pengelantangan agar warna meresap'],
              ['img'=>'images/step-2-sketsa.jpg',   'title'=>'Membuat Sketsa',    'desc'=>'Rancang motif sesuai pakem/motif lokal'],
              ['img'=>'images/step-3-tulis.jpg',    'title'=>'Mencanting',        'desc'=>'Tarik garis malam sebagai perintang'],
              ['img'=>'images/step-4-celup.jpg',    'title'=>'Pewarnaan/Celup',   'desc'=>'Pencelupan bertahap untuk kedalaman warna'],
              ['img'=>'images/step-5-colet.jpg',    'title'=>'Colet/Detail',      'desc'=>'Pewarnaan manual pada bagian tertentu'],
              ['img'=>'images/step-6-lorod.jpg',    'title'=>'Pelorodan',         'desc'=>'Melepas malam dan finishing kain'],
              ['img'=>'images/step-7-jadi.jpg',     'title'=>'Siap Dipakai',      'desc'=>'Kain batik selesai—siap dijahit/dipakai'],
            ];
          @endphp

          @foreach($steps as $s)
            <article class="snap-start min-w-[240px] w-[260px] bg-white rounded-2xl overflow-hidden border hover:shadow-md transition">
              <img src="{{ asset($s['img']) }}" alt="{{ $s['title'] }}"
                   class="w-full h-36 object-cover">
              <div class="p-4">
                <h4 class="font-semibold text-sm">{{ $s['title'] }}</h4>
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
</body>
</html>

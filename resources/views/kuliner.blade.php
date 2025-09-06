<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuliner — Purba Culture</title>
  @vite('resources/css/app.css')
</head>

<body class="antialiased text-slate-800">
  {{-- Navbar --}}
  @include('navbar')

  {{-- HERO --}}
  <section class="bg-[#FAF4E1] border-b relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-5 lg:px-6 py-8 sm:py-12 lg:py-20 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10 items-center">
      
      {{-- Gambar (mobile di atas, desktop di kanan) --}}
      <div class="order-1 lg:order-2 w-full relative">
        <div class="aspect-[16/11] w-full overflow-hidden rounded-xl border sm:border-2 border-[#8B5E3C]/80 shadow-lg">
          <img
            src="{{ asset('images/sroto.jpg') }}"
            alt="Sroto Purbalingga"
            class="w-full h-full object-cover"
            loading="lazy" decoding="async" />
        </div>
        <div class="flex items-center justify-center gap-1 mt-3">
          <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>
          <span class="h-1.5 w-6 rounded-full bg-[#8B5E3C]"></span>
          <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>
        </div>
      </div>

      {{-- Teks --}}
      <div class="order-2 lg:order-1 relative">
        <span class="text-[11px] sm:text-xs uppercase tracking-wide text-[#8B5E3C]">Kuliner Purbalingga</span>
        <h1 class="mt-2 sm:mt-3 text-2xl sm:text-3xl lg:text-5xl font-semibold leading-tight text-[#5C3A21]">
          Cita Rasa Autentik,
          <span class="block">Warisan Kuliner Purbalingga</span>
        </h1>
        <p class="mt-3 sm:mt-4 text-[15px] sm:text-base text-slate-700 max-w-xl">
          Dari Sroto Purbalingga yang melegenda hingga mendoan hangat—kuliner Purbalingga adalah harmoni cita rasa dan budaya yang diwariskan turun-temurun.
        </p>

        {{-- Ornamen tipis kiri (desktop) --}}
        <div class="hidden lg:block absolute left-0 -ml-8 top-1/2 -translate-y-1/2 w-8 h-24 border-l border-[#C59867]"></div>
      </div>
    </div>

    {{-- Ornamen batik (sembunyikan di mobile) --}}
    <img src="{{ asset('images/bgleft.png') }}" class="hidden md:block absolute top-0 left-0 w-[140px] lg:w-[150px] pointer-events-none opacity-90" alt="" aria-hidden="true"/>
    <img src="{{ asset('images/bgright.png') }}" class="hidden md:block absolute bottom-0 right-0 w-[140px] lg:w-[150px] pointer-events-none opacity-90" alt="" aria-hidden="true"/>
  </section>
{{-- LIST KULINER --}}
<section class="bg-[#FFECD1]">
  <div class="max-w-6xl mx-auto px-4 sm:px-5 lg:px-6 py-8 sm:py-10 lg:py-14">
    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-[#5C3A21]">Kuliner Purbalingga</h2>
    </div>

    <div class="mt-3 h-px bg-[#C59867]"></div>

    {{-- Grid cards --}}
    <div class="mt-6 sm:mt-8 grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-6">
      {{-- Kartu besar (span 2 kolom di desktop) --}}
      <article class="lg:col-span-2 group">
        <a href="{{ route('kuliner.show', 'tempe-mendoan-gurih-tipis-hangat') }}"
           class="block rounded-xl overflow-hidden border border-[#8B5E3C]/60 sm:border-[#8B5E3C] shadow hover:shadow-md transition">
          <div class="aspect-[16/9]">
            <img src="{{ asset('images/mendoan.png') }}" alt="Tempe Mendoan"
                 class="w-full h-full object-cover group-hover:scale-[1.01] transition duration-300">
          </div>
          <div class="p-4 sm:p-5">
            <span class="text-[11px] sm:text-xs font-medium text-[#8B5E3C] uppercase">Kuliner Ikonik</span>
            <h3 class="mt-1.5 sm:mt-2 text-lg sm:text-xl font-semibold text-[#5C3A21] leading-snug">
              Tempe Mendoan — Gurih, Tipis, dan Nikmat Disantap Hangat
            </h3>
            <p class="mt-2 text-sm text-slate-600 line-clamp-2">
              Sajian khas Banyumas–Purbalingga yang tak pernah absen di meja makan tradisional Jawa Tengah.
            </p>
          </div>
        </a>
      </article>

      {{-- Kolom kanan: 4 kartu kecil (2x2 di ≥sm) --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        @php
          $items = [
            [
              'img'=>'images/keripik.jpg',
              'tag'=>'Oleh-oleh',
              'title'=>'Kriuk Renyah Keripik Tempe Purbalingga',
              'slug'=>'kriuk-renyah-keripik-tempe-purbalingga'
            ],
            [
              'img'=>'images/nopia.jpeg',
              'tag'=>'Tradisi',
              'title'=>'Nopia dan Cerita Kue Bakar dari Banyumas Raya',
              'slug'=>'nopia-dan-cerita-kue-bakar-dari-banyumas-raya'
            ],
            [
              'img'=>'images/getuk.jpg',
              'tag'=>'Camilan',
              'title'=>'Getuk Goreng Sokaraja yang Manis dan Legit',
              'slug'=>'getuk-goreng-sokaraja-manis-legit'
            ],
            [
              'img'=>'images/sate.jpg',
              'tag'=>'Kuliner Malam',
              'title'=>'Sate Blater — Kuliner Malam Legendaris',
              'slug'=>'sate-blater-kuliner-malam-legendaris'
            ],
          ];
        @endphp

        @foreach ($items as $it)
          <article class="group">
            <a href="{{ route('kuliner.show', $it['slug']) }}"
               class="block rounded-xl overflow-hidden border border-[#8B5E3C]/50 hover:border-[#8B5E3C] transition">
              <div class="aspect-[4/3]">
                <img src="{{ asset($it['img']) }}" alt="{{ $it['title'] }}"
                     class="w-full h-full object-cover group-hover:scale-[1.01] transition duration-300" loading="lazy" decoding="async">
              </div>
              <div class="p-3 sm:p-3.5">
                <span class="text-[11px] uppercase tracking-wide text-[#8B5E3C]">{{ $it['tag'] }}</span>
                <h4 class="mt-1 text-sm sm:text-[15px] font-medium leading-snug text-[#5C3A21] hover:underline">
                  {{ $it['title'] }}
                </h4>
              </div>
            </a>
          </article>
        @endforeach
      </div>
    </div>
  </div>
</section>

  @include('footer')
</body>
</html>

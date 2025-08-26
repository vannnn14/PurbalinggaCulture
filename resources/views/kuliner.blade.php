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
    <div class="max-w-6xl mx-auto px-4 lg:px-6 py-12 lg:py-20 grid lg:grid-cols-2 gap-8 items-center">
      
      {{-- Teks kiri --}}
      <div class="relative">
        <span class="text-xs uppercase tracking-wide text-[#8B5E3C]">Kuliner Purbalingga</span>
        <h1 class="mt-3 text-3xl lg:text-5xl font-sinerva leading-tight text-[#5C3A21]">
          Cita Rasa Autentik, <span class="block">Warisan Kuliner Purbalingga</span>
        </h1>
        <p class="mt-4 text-slate-700 max-w-xl">
          Dari Sroto Purbalingga yang melegenda, hingga tempe mendoan hangat — kuliner Purbalingga adalah 
          harmoni cita rasa dan budaya yang diwariskan turun-temurun.
        </p>
        <div class="hidden lg:block absolute left-0 -ml-8 top-1/2 -translate-y-1/2 w-8 h-24 border-l border-[#C59867]"></div>
      </div>

      {{-- Gambar kanan --}}
      <div class="w-full relative">
        <div class="aspect-[16/11] w-full overflow-hidden rounded-xl border-4 border-[#8B5E3C] shadow-lg">
          <img
            src="{{ asset('images/sroto.jpg') }}"
            alt="Sroto Purbalingga"
            class="w-full h-full object-cover" />
        </div>
        <div class="flex items-center justify-center gap-1 mt-3">
          <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>
          <span class="h-1.5 w-6 rounded-full bg-[#8B5E3C]"></span>
          <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>
        </div>
      </div>
    </div>

    {{-- Ornamen batik kiri-kanan --}}
    <img src="{{ asset('images/bgleft.png') }}" class="absolute top-0 left-0 w-[150px] pointer-events-none" />
    <img src="{{ asset('images/bgright.png') }}" class="absolute bottom-0 right-0 w-[150px] pointer-events-none" />
  </section>

  {{-- LIST KULINER --}}
  <section class="bg-[#FFECD1]">
    <div class="max-w-6xl mx-auto px-4 lg:px-6 py-10 lg:py-14">
      {{-- Header --}}
      <div class="flex items-center justify-between">
        <h2 class="text-xl lg:text-3xl font-sinerva text-[#5C3A21]">Kuliner Purbalingga</h2>
        <a href="#"
           class="inline-flex items-center gap-2 text-sm rounded-full border px-4 py-2 text-[#8B5E3C] hover:bg-[#F5E6C8]">
          Lihat Selengkapnya
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </a>
      </div>

      <div class="mt-3 h-px bg-[#C59867]"></div>

      {{-- Grid cards --}}
      <div class="mt-8 grid lg:grid-cols-3 gap-6">
        {{-- Kartu besar --}}
        <article class="lg:col-span-2 group">
          <a href="#" class="block rounded-xl overflow-hidden border-2 border-[#8B5E3C] shadow-lg">
            <div class="aspect-[16/9]">
              <img src="{{ asset('images/mendoan.jpg') }}" alt="Tempe Mendoan"
                   class="w-full h-full object-cover group-hover:scale-[1.01] transition">
            </div>
            <div class="p-4">
              <span class="text-xs font-medium text-[#8B5E3C] uppercase">Kuliner Ikonik</span>
              <h3 class="mt-2 text-xl font-sinerva text-[#5C3A21] leading-snug">
                Tempe Mendoan — Gurih, Tipis, dan Nikmat Disantap Hangat
              </h3>
              <p class="mt-2 text-sm text-slate-600 line-clamp-2">
                Sajian khas Banyumas-Purbalingga yang tak pernah absen di meja makan tradisional Jawa Tengah.
              </p>
            </div>
          </a>
        </article>

        {{-- Kolom kanan --}}
        <div class="grid sm:grid-cols-2 gap-6">
          @php
            $items = [
              ['img'=>'images/kripik-tempe.jpg', 'tag'=>'Oleh-oleh', 'title'=>'Kriuk Renyah Keripik Tempe Purbalingga'],
              ['img'=>'images/nopia.jpg', 'tag'=>'Tradisi', 'title'=>'Nopia dan Cerita Kue Bakar dari Banyumas Raya'],
              ['img'=>'images/getuk.jpg', 'tag'=>'Camilan', 'title'=>'Getuk Goreng Sokaraja yang Manis dan Legit'],
              ['img'=>'images/sate-blater.jpg', 'tag'=>'Kuliner Malam', 'title'=>'Sate Blater — Kuliner Malam Legendaris'],
            ];
          @endphp

          @foreach ($items as $it)
            <article class="group">
              <a href="#" class="block rounded-xl overflow-hidden border border-[#8B5E3C]">
                <div class="aspect-[4/3]">
                  <img src="{{ asset($it['img']) }}" alt="{{ $it['title'] }}"
                       class="w-full h-full object-cover group-hover:scale-[1.01] transition">
                </div>
                <div class="p-3">
                  <span class="text-[11px] uppercase tracking-wide text-[#8B5E3C]">{{ $it['tag'] }}</span>
                  <h4 class="mt-1 text-sm font-medium leading-snug text-[#5C3A21] hover:underline">
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

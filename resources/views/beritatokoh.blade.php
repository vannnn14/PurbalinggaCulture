<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $nama }} - Purbalingga Culture</title>
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    .hero-pattern {
      background-color: #fef7eb;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c59867' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    
    .tab-active {
      border-bottom: 3px solid #8b5e34;
      color: #8b5e34;
      font-weight: 600;
    }
  </style>
</head>
<body class="antialiased text-gray-800">
  @include('navbar')

  <main id="content" class="scroll-smooth">
    
    
    <!-- HERO TOKOH -->
    <section class="hero-pattern py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- GAMBAR TOKOH -->
          <div class="lg:col-span-1">
            <div class="rounded-xl overflow-hidden shadow-lg">
              <img src="{{ $gambar }}" alt="{{ $nama }}" class="w-full h-auto object-cover">
            </div>
            
            <!-- INFO SINGKAT -->
            <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
              <h3 class="font-bold text-lg text-[#5a371c] mb-3">Informasi Tokoh</h3>
              <ul class="space-y-2">
                <li class="flex">
                  <span class="font-medium w-32">Nama Lengkap</span>
                  <span class="text-gray-700">{{ $nama }}</span>
                </li>
                <li class="flex">
                  <span class="font-medium w-32">Lahir</span>
                  <span class="text-gray-700">{{ $lahir }}</span>
                </li>
                @if(!empty($wafat) && $wafat !== '-')
                <li class="flex">
                  <span class="font-medium w-32">Wafat</span>
                  <span class="text-gray-700">{{ $wafat }}</span>
                </li>
                @endif
                <li class="flex">
                  <span class="font-medium w-32">Dikenal</span>
                  <span class="text-gray-700">{{ $dikenal }}</span>
                </li>
           
              </ul>
            </div>
          </div>
          
          <!-- DETAIL TOKOH -->
         <!-- DETAIL TOKOH -->
<div class="lg:col-span-2">
  <header class="mb-6">
    <p class="text-xs uppercase tracking-wider text-[#C59867]">{{ $kategori }}</p>
    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1">{{ $nama }}</h1>
    <p class="text-lg text-gray-700 mt-2">{{ $gelar }}</p>
  </header>
  
  <div class="prose max-w-none">
    <div class="bg-white p-6 rounded-xl shadow-sm">
      @foreach($biografi_terstruktur as $bagian)
        @if($bagian['tipe'] == 'paragraf')
          <h2 class="text-2xl font-bold text-[#5a371c] mb-4">{{ $bagian['judul'] }}</h2>
          <p class="text-gray-700 mb-4">{{ $bagian['konten'] }}</p>
        @elseif($bagian['tipe'] == 'subjudul')
          @if($loop->first)
            <h2 class="text-2xl font-bold text-[#5a371c] mb-4">Biografi</h2>
            <p class="text-gray-700 mb-4">{{ $bagian['konten'] }}</p>
          @else
            <h3 class="text-xl font-semibold text-[#5a371c] mt-6 mb-3">{{ $bagian['judul'] }}</h3>
            <p class="text-gray-700 mb-4">{{ $bagian['konten'] }}</p>
          @endif
        @endif
      @endforeach
    </div>
  </div>
</div>
        </div>
      </div>
    </section>

    <!-- TOKOH LAINNYA -->
    <section class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl md:text-3xl font-semibold text-[#5a371c] mb-8 text-center">Tokoh Lainnya</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          @php
            // Tampilkan 4 tokoh lainnya (selain yang sedang aktif)
            $count = 0;
          @endphp
          
          @foreach($tokohData as $key => $data)
            @if($key !== $tokohKey && $count < 4)
              <article class="relative rounded-xl overflow-hidden shadow-lg group">
                <a href="{{ route('berita', ['tokoh' => $key]) }}">
                  <img src="{{ $data['gambar'] }}" alt="{{ $data['nama'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
                  <div class="p-4">
                    <h3 class="text-lg font-bold text-black">{{ $data['nama'] }}</h3>
                    <p class="text-sm text-black">{{ $data['dikenal'] }}</p>
                  </div>
                </a>
              </article>
              @php $count++; @endphp
            @endif
          @endforeach
        </div>
      </div>
    </section>
  </main>

  @include('footer')
</body>
</html>
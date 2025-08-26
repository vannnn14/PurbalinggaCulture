<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tokoh Purbalingga — Purbalingga Culture</title>
  @vite('resources/css/app.css')
</head>

<body class="antialiased text-gray-800">
  {{-- NAVBAR --}}
  @include('navbar')

  @php
  $people = [
    ['name'=>'Jenderal Soedirman','role'=>'Panglima TNI, Pahlawan Nasional','img'=>'images/soedirman.jpeg','slug'=>'soedirman','desc'=>'Panglima perang gerilya yang tetap memimpin meski sakit parah.'],
    ['name'=>'Mayjend Soengkono','role'=>'Tokoh pertempuran Surabaya 1945','img'=>'images/soengkono.jpg','slug'=>'soengkono','desc'=>'Komandan gagah berani yang mengobarkan semangat 10 November.'],
    ['name'=>'Mas Pirngadi','role'=>'Seniman & etnografer','img'=>'images/mas-pirngadi.jpg','slug'=>'mas-pirngadi','desc'=>'Mengabadikan budaya Nusantara lewat karya dan etnografi.'],
    ['name'=>'Usman Janatin','role'=>'Pahlawan Dwikora','img'=>'images/usman-janatin.jpg','slug'=>'usman-janatin','desc'=>'Prajurit pemberani yang gugur demi tanah air.'],
    ['name'=>'Pak Kasur','role'=>'Pendidikan & Lagu Anak','img'=>'images/pak-kasur.jpg','slug'=>'pak-kasur','desc'=>'Lagu anak adalah pendidikan jiwa bangsa.'],
    ['name'=>'Indro (Warkop DKI)','role'=>'Komedian, budaya populer','img'=>'images/indro.jpg','slug'=>'indro-warkop','desc'=>'Ketawa adalah obat — warisan Warkop DKI.'],
    ['name'=>'Sheila Agatha Wijaya','role'=>'Desainer internasional','img'=>'images/sheila-agatha.jpg','slug'=>'sheila-agatha','desc'=>'Karya fashion lokal yang mampu menembus panggung dunia.'],
    ['name'=>'Kyai Arsantaka','role'=>'Pendiri & leluhur tokoh pemimpin lokal','img'=>'images/arsantaka.jpg','slug'=>'kyai-arsantaka','desc'=>'Leluhur yang membuka jalan berdirinya Purbalingga.'],
    ['name'=>'K.H. Ahsin Ma’ruf','role'=>'Politikus lokal','img'=>'images/ahsin-maruf.jpg','slug'=>'kh-ahsin-maruf','desc'=>'Mengabdikan diri untuk masyarakat melalui politik.'],
    ['name'=>'K.H. Abu Dardiri','role'=>'Tokoh Muhammadiyah','img'=>'images/abu-dardiri.jpg','slug'=>'kh-abu-dardiri','desc'=>'Ulama Muhammadiyah yang fokus pada pendidikan umat.'],
    ['name'=>'Abdoel Gaffar Pringgodigdo','role'=>'Negara; Panitia Lima & Politik','img'=>'images/pringgodigdo.jpg','slug'=>'pringgodigdo','desc'=>'Pejuang hukum dan politik, anggota Panitia Lima.'],
    ['name'=>'Siem Piet Nio','role'=>'Literatur & Hak Perempuan','img'=>'images/siem-piet-nio.jpg','slug'=>'siem-piet-nio','desc'=>'Penulis yang menyuarakan emansipasi perempuan Tionghoa-Indonesia.'],
    ['name'=>'Sukatani','role'=>'Musik punk & kritik sosial modern','img'=>'images/sukatani.jpg','slug'=>'sukatani','desc'=>'Musik adalah protes, suara kaum kecil yang terpinggirkan.'],
    ['name'=>'Adji Pandu Suwotomo','role'=>'Tokoh militan kontroversial','img'=>'images/adji-pandu.jpg','slug'=>'adji-pandu','desc'=>'Figur militan yang menuai kontroversi dalam kiprahnya.'],
  ];

  // pilih unggulan (ubah index kalau perlu)
  $featured = $people[0] ?? null;
  @endphp

  <main class="bg-[#FFF7EA]">
    {{-- HERO UNGGULAN --}}
    @if($featured)
    <section class="relative">
      <div class="relative h-64 md:h-80 lg:h-[380px] w-full overflow-hidden">
        <img src="{{ asset($featured['img']) }}" alt="{{ $featured['name'] }}"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end md:justify-center max-w-7xl mx-auto px-4 sm:px-6 pb-6">
          <p class="text-white/80 text-xs uppercase tracking-wider">Tokoh </p>
          <h1 class="text-white text-2xl md:text-4xl font-bold mt-1">{{ $featured['name'] }}</h1>
          <p class="text-white/90 mt-2 max-w-2xl">{{ $featured['role'] }}</p>
        </div>
      </div>
    </section>
    @endif

    {{-- GRID TOKOH (kecil + ada quote) --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
      <h2 class="text-xl md:text-2xl font-bold text-[#5a371c] mb-6"> Tokoh Purbalingga</h2>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        @foreach ($people as $p)
          <a href="{{ url('/tokoh/'.$p['slug']) }}"
             class="group block rounded-lg overflow-hidden bg-white border hover:shadow-md transition">
            <img src="{{ asset($p['img']) }}" alt="{{ $p['name'] }}"
                 class="w-full h-40 object-cover">
            <div class="p-3">
              <p class="text-[11px] uppercase text-green-700 font-semibold">Tokoh</p>
              <h3 class="text-sm font-semibold text-gray-900 leading-snug">
                {{ $p['name'] }}
              </h3>
              <p class="text-xs text-gray-600 mt-1">{{ $p['role'] }}</p>
              @if(!empty($p['desc']))
                <p class="text-xs text-gray-500 mt-1 italic line-clamp-2">
                  {{ $p['desc'] }}
                </p>
              @endif
            </div>
          </a>
        @endforeach
      </div>
    </section>
  </main>

  {{-- FOOTER --}}
  @include('footer')
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurbaCulture</title>
    @vite('resources/css/app.css')
</head>

    <!-- Navbar -->
    @include('navbar')
    
    <!-- Hero Section -->
    <section class="relative bg-amber-900 text-white">
        <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
            <!-- Left Text -->
            <div class="flex-1 space-y-4">
                <h2 class="text-3xl font-bold">Tentang PurbaCulture</h2>
                <p class="text-lg leading-relaxed">
                    PurbaCulture adalah platform digital yang memperkenalkan budaya Purbalingga
                    melalui tradisi, seni, dan kuliner lokal.
                </p>
            </div>
            <!-- Right Image -->
            <div class="flex-1 flex justify-center">
                <img src="/images/wayang.png" alt="Wayang"
                     class="w-72 md:w-96 hover:scale-105 transition-transform duration-500 ease-in-out animate-fadeIn">
            </div>
        </div>
        <!-- Background hills -->
        <div class="absolute inset-0 opacity-10">
            <img src="/images/bg-gunung.png" class="w-full h-full object-cover" alt="">
        </div>
    </section>

    <!-- Galeri Budaya -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-center text-amber-900 mb-10">Galeri Budaya</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach (['batik.jpg','tari.jpg','musik.jpg','kuliner.jpg'] as $img)
            <div class="overflow-hidden rounded-xl shadow-lg">
                <img src="/images/{{ $img }}" alt=""
                     class="w-full h-40 md:h-48 object-cover hover:scale-110 transition-transform duration-500">
            </div>
            @endforeach
        </div>
    </section>

    <!-- Translate Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-xl md:text-2xl font-semibold mb-6">
                Jelajahi kekayaan bahasa daerah lewat <span class="text-amber-800">Ngapak Translator</span>
            </h2>
            <div class="flex justify-center">
                <img src="/images/google-translate.png" alt="Translate"
                     class="w-28 hover:scale-110 transition duration-500 ease-in-out">
            </div>
        </div>
    </section>

    <!-- Agenda Budaya -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-center text-amber-900 mb-10">Agenda Budaya</h2>
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <!-- Info -->
            <div class="bg-white shadow-lg rounded-xl p-8">
                <h3 class="text-xl font-semibold text-amber-800 mb-3">Festival Bunang Gamel</h3>
                <p class="text-gray-600 mb-2">📅 21 Juli 2025</p>
                <p class="text-gray-600 mb-4">📍 Alun-alun Purbalingga</p>
                <p class="text-gray-700">
                    Festival budaya menampilkan gamelan, tari tradisional, serta pameran batik khas daerah.
                </p>
            </div>
            <!-- Poster -->
            <div class="flex justify-center">
                <img src="/images/poster-festival.png" alt="Poster Festival"
                     class="w-80 rounded-xl shadow-xl hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>

    <!-- Artikel Budaya -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-center text-amber-900 mb-10">Artikel Budaya</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
                ['judul'=>'Sejarah Batik Purbalingga','isi'=>'Mengenal batik khas Purbalingga yang unik dan bersejarah.'],
                ['judul'=>'Tradisi Kuda Lumping','isi'=>'Kesenian rakyat penuh makna spiritual dan kebersamaan.'],
                ['judul'=>'Kuliner Dawet Ayu','isi'=>'Segarnya minuman tradisional khas Purbalingga.']
            ] as $artikel)
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-2xl transition-shadow duration-500">
                <h3 class="text-lg font-semibold mb-2">{{ $artikel['judul'] }}</h3>
                <p class="text-gray-600">{{ $artikel['isi'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

   @include('footer')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->
    
    <section class="relative bg-[#FAF4E1] min-h-screen flex flex-col justify-center items-center py-16 px-4" x-data="{ isHover: false }">
    <!-- Ornamen Kiri -->
    <img src="{{ asset('images/bgleft.png') }}" 
         alt="Batik Left Top" 
         class="absolute top-0 left-0  h-auto pointer-events-none">

    <!-- Ornamen Kanan -->
    <img src="{{ asset('images/bgright.png') }}" 
         alt="Batik Right Bottom" 
         class="absolute bottom-0 right-0  h-auto pointer-events-none">

    <!-- Konten Utama -->
    <div class="text-center relative z-10 max-w-3xl w-full">
        <!-- Judul -->
        <h2 class="text-3xl md:text-4xl font-kawung font-bold mb-6">Kenali Batik Purbalingga</h2>
        
        <!-- Video -->
        <div 
            class="relative w-full max-w-[720px] aspect-video mx-auto rounded-2xl overflow-hidden shadow-xl mb-8"
            @mouseenter="isHover = true" 
            @mouseleave="isHover = false">
            
            <iframe
                :src="isHover 
                    ? 'https://www.youtube.com/embed/I3uLzUUoXAk?autoplay=1&mute=0'
                    : 'https://www.youtube.com/embed/I3uLzUUoXAk?autoplay=0&mute=1'"
                title="Trailer Batik Purbalingga"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                class="w-full h-full">
            </iframe>
        </div>

        <!-- Deskripsi -->
        <p class="text-gray-800 leading-relaxed text-lg md:text-xl px-2 font-sinerva">
            Batik adalah kain khas Indonesia yang dibuat dengan teknik menggambar atau menerapkan motif 
            menggunakan malam (lilin panas). Batik bukan hanya sekadar kain, tetapi juga warisan budaya 
            bernilai seni, sejarah, dan filosofi mendalam.
        </p>
    </div>
</section>


  <!-- Batik Separator -->
<div class="h-2 bg-[#09cd88]">
</div>

    <!-- Teknik Batik Section -->
    <section class="relative bg-[#1c1005] py-16">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10">
            
            <!-- Kiri: Judul & Ornamen -->
            <div class="relative">
                <h2 class="text-2xl text-white font-bold mb-6">Teknik - Teknik Membuat Batik</h2>
                <ul class="space-y-6 text-white">
                    <li>
                        <p class="font-semibold">> Teknik Tulis</p>
                        <p class="text-sm">Teknik ini merupakan cara tradisional di mana motif batik dibuat dengan tangan menggunakan alat yang disebut canting.</p>
                    </li>
                    <li>
                        <p class="font-semibold">> Teknik Cap</p>
                        <p class="text-sm">Teknik ini, motif batik dibuat menggunakan cap yang terbuat dari tembaga atau bahan lain. Cap ini dicelupkan ke dalam malam lalu dicapkan pada kain.</p>
                    </li>
                    <li>
                        <p class="font-semibold">> Teknik Batik Printing</p>
                        <p class="text-sm">Batik printing adalah teknik pembuatan batik yang menggunakan metode cetak, baik dengan mesin cetak maupun sablon, untuk menghasilkan motif batik pada kain.</p>
                    </li>
                </ul>

                <!-- Ornamen Kiri -->
                <img src="{{ asset('images/ornamen-batik-left.png') }}" 
                     alt="Ornamen Batik" 
                     class="absolute top-0 -left-32 w-40 h-auto pointer-events-none opacity-90">
            </div>
            <div class="grid grid-cols-2 gap-6 items-center">
    <!-- Gambar 1 -->
    <img src="{{ asset('images/.jpeg') }}" 
         alt="Batik Tulis" 
         class="rounded-2xl shadow-lg col-span-1">

    <!-- Gambar 2 -->
    <img src="{{ asset('images/.jpg') }}" 
         alt="Batik Cap" 
         class="rounded-2xl shadow-lg col-span-1 row-start-2">

    <!-- Gambar 3 -->
    <img src="{{ asset('images/batik-printing.jpg') }}" 
         alt="Batik Printing" 
         class="rounded-2xl shadow-lg col-span-1 row-start-3">
</div>

        </div>
    </section>
<section>
    @include('footer')
</section>
</body>

</html>

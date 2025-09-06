<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - PurbaCulture</title>
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class=" text-gray-800 font-sans">

  {{-- Navbar --}}
  @include('navbar')

  <!-- Hero Section -->
  <section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center"
           style="background-image: url('/images/pbg.jpg');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/70"></div>
    <div class="relative z-10 text-center text-white px-4" data-aos="fade-up">
      <h1 class="text-5xl font-extrabold mb-4">Tentang Kami</h1>
      <p class="text-lg md:text-xl max-w-2xl mx-auto">
        Menjaga, mendokumentasikan, dan memperkenalkan budaya Purbalingga
        dengan cara yang modern dan menginspirasi.
      </p>
    </div>
  </section>

  <!-- Siapa Kami -->
  <section class="py-20 px-6 md:px-20 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Text -->
      <div data-aos="fade-right">
        <h2 class="text-3xl font-bold text-amber-800 mb-6">Siapa Kami?</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
          <strong>PurbaCulture</strong> adalah platform digital yang berdedikasi
          untuk menjaga dan mempromosikan kekayaan budaya Purbalingga. Kami percaya
          bahwa budaya adalah identitas yang harus terus hidup di tengah arus modernisasi.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Dengan memanfaatkan teknologi, kami menghadirkan cara baru untuk menghubungkan
          masyarakat, generasi muda, dan dunia dengan seni, tradisi, dan nilai luhur Purbalingga.
        </p>
      </div>

      <div class="relative flex justify-center items-center bg-white rounded-2xl shadow-lg h-80" data-aos="fade-left">
  <img src="/images/patung.png" 
       alt="Budaya Purbalingga"
       class="max-h-full max-w-full object-contain p-2">
  <div class="absolute bottom-4 left-4 bg-amber-700 text-white px-4 py-2 rounded-lg shadow">
    Sejak 2024
  </div>
</div>



    </div>
  </section>

  <!-- Visi & Misi -->
  <section class="py-20 px-6 md:px-20 bg-amber-50">
    <div class="max-w-6xl mx-auto text-center mb-12">
      <h2 class="text-3xl font-bold text-amber-800">Visi & Misi</h2>
      <p class="text-gray-600 mt-4">Arah dan tujuan kami dalam menjaga warisan budaya</p>
    </div>

    <div class="grid md:grid-cols-2 gap-10">
      
      <!-- Visi -->
      <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-amber-700 mb-4">Visi</h3>
        <p class="text-gray-600">
          Menjadi pusat digital budaya Purbalingga yang inspiratif, inklusif, dan diakui secara global.
        </p>
      </div>

      <!-- Misi -->
      <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition"
           data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-2xl font-bold text-amber-700 mb-4">Misi</h3>
        <ul class="text-gray-600 space-y-3 list-disc list-inside">
          <li>Mengedukasi generasi muda tentang seni & tradisi.</li>
          <li>Menggunakan teknologi untuk melestarikan budaya.</li>
          <li>Membuka akses budaya Purbalingga ke dunia luas.</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Nilai Kami -->
  <section class="py-20 px-6 md:px-20 bg-white">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-amber-800 mb-12">Nilai Kami</h2>
      
      <div class="grid md:grid-cols-4 gap-8">
        <div class="p-6 bg-amber-50 rounded-xl shadow-md hover:shadow-lg transition" data-aos="zoom-in">
          <div class="text-4xl text-amber-700 mb-3">🎯</div>
          <h3 class="font-semibold text-lg mb-2">Fokus</h3>
          <p class="text-sm text-gray-600">Konsistensi dan kualitas dalam setiap langkah.</p>
        </div>

        <div class="p-6 bg-amber-50 rounded-xl shadow-md hover:shadow-lg transition"
             data-aos="zoom-in" data-aos-delay="100">
          <div class="text-4xl text-amber-700 mb-3">🔥</div>
          <h3 class="font-semibold text-lg mb-2">Passion</h3>
          <p class="text-sm text-gray-600">Semangat kami adalah energi yang terus hidup.</p>
        </div>

        <div class="p-6 bg-amber-50 rounded-xl shadow-md hover:shadow-lg transition"
             data-aos="zoom-in" data-aos-delay="200">
          <div class="text-4xl text-amber-700 mb-3">🤝</div>
          <h3 class="font-semibold text-lg mb-2">Kolaborasi</h3>
          <p class="text-sm text-gray-600">Bersama masyarakat melestarikan budaya.</p>
        </div>

        <div class="p-6 bg-amber-50 rounded-xl shadow-md hover:shadow-lg transition"
             data-aos="zoom-in" data-aos-delay="300">
          <div class="text-4xl text-amber-700 mb-3">🌍</div>
          <h3 class="font-semibold text-lg mb-2">Inovasi</h3>
          <p class="text-sm text-gray-600">Menghadirkan solusi kreatif dalam pelestarian budaya.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tim Kami -->
  <section class="py-20 px-6 md:px-20 bg-amber-50">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-amber-800 mb-12">Tim Kami</h2>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12">
        
        <!-- Member 1 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition"
             data-aos="fade-up">
          <div class="relative">
            <img src="/images/irvanbg.png" alt="Irvan"
                 class="w-full h-80 object-cover group-hover:scale-105 transition">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-lg">Irvan</h3>
            <p class="text-amber-600 text-sm mb-3">Developer</p>
            <p class="text-gray-600 text-sm">Mengembangkan sistem dan database PurbaCulture.</p>
          </div>
        </div>

        <!-- Member 2 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition"
             data-aos="fade-up">
          <div class="relative">
            <img src="/images/intan.png" alt="Intan"
                 class="w-full h-80 object-cover group-hover:scale-105 transition">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-lg">Intan</h3>
            <p class="text-amber-600 text-sm mb-3">UI/UX</p>
            <p class="text-gray-600 text-sm">Mengembangkan sistem dan database PurbaCulture.</p>
          </div>
        </div>

        <!-- Member 3 -->
        <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition"
             data-aos="fade-up">
          <div class="relative">
            <img src="/images/sony4.png" alt="Sony"
                 class="w-full h-80 object-cover group-hover:scale-105 transition">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-lg">Sony</h3>
            <p class="text-amber-600 text-sm mb-3">Developer</p>
            <p class="text-gray-600 text-sm">Mengembangkan sistem dan database PurbaCulture.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative py-20 bg-amber-700 text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">
        Mari Bersama Melestarikan Budaya Purbalingga
      </h2>
      <p class="max-w-2xl mx-auto text-lg mb-8" data-aos="fade-up" data-aos-delay="100">
        Dengan teknologi, kolaborasi, dan semangat bersama, kita bisa menjaga
        warisan budaya agar tetap hidup di hati generasi mendatang.
      </p>
      <a href="/kontak"
         class="px-8 py-3 bg-white text-amber-700 rounded-full font-semibold shadow hover:bg-gray-100 transition"
         data-aos="zoom-in" data-aos-delay="200">
        Hubungi Kami
      </a>
    </div>
  </section>

  
  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>

{{-- Footer --}}
    @include('footer')

</body>
</html>

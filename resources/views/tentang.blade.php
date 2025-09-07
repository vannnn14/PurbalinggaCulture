<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - PurbaCulture</title>
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    .hero-pattern {
      background-color: #FAF4E1;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c59867' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

            .active {
            background-color: #e6b68c;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c59867' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            color: white;
        }
  </style>
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
  <section class="py-20 px-6 md:px-20 bg-amber-100 relative overflow-hidden">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14 items-center">
    
    <!-- Text -->
    <div data-aos="fade-right">
      <h2 class="text-4xl font-extrabold text-amber-900 mb-6 relative">
        <span class="relative z-10">Siapa Kami?</span>
        <!-- <span class="absolute -bottom-2 left-0 w-28 h-1 bg-amber-600 rounded-full"></span> -->
      </h2>

      <p class="text-gray-700 leading-relaxed mb-5 text-lg">
        <strong class="text-amber-800">PurbaCulture</strong> adalah platform digital yang berdedikasi 
        untuk <span class="font-semibold text-amber-700">melestarikan dan mempromosikan kekayaan budaya Purbalingga</span>. 
        Kami percaya bahwa budaya adalah identitas yang harus tetap hidup di tengah arus modernisasi.
      </p>

      <p class="text-gray-700 leading-relaxed text-lg">
        Dengan memanfaatkan teknologi, kami menghadirkan cara baru untuk menghubungkan masyarakat, 
        generasi muda, dan dunia dengan seni, tradisi, serta nilai luhur Purbalingga.
      </p>
    </div>

    <!-- Image + caption -->
    <div class="relative flex justify-center items-center" data-aos="fade-left">
  <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden h-80 w-full flex items-center justify-center group">
    <!-- Gambar -->
    <img src="/images/masjid3.jpg" alt="Budaya Purbalingga"
         class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
    
    <!-- Overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-70 group-hover:opacity-90 transition"></div>

    <!-- Caption -->
    <div class="absolute bottom-4 left-4  text-white px-4 py-2 rounded-lg shadow-md text-sm md:text-base">
      Masjid Agung Darussalam
    </div>
  </div>
</div>

      <!-- Ornamen batik dekoratif -->
      <div class="absolute -z-10 -top-10 -right-10 w-40 h-40 opacity-10">
        <img src="/images/batiknavbar.jpg" alt="Ornamen Batik" class="w-full h-full object-cover rounded-full">
      </div>
    </div>
  </div>
</section>

  <!-- Visi & Misi -->
  <section class="py-20 px-6 md:px-20 bg-amber-50 hero-pattern">
  <div class="max-w-7xl mx-auto">
    
    <!-- Judul -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-amber-800">Visi, Misi & Tim Kami</h2>
      <p class="text-gray-600 mt-3 text-lg">Arah dan tujuan kami dalam menjaga warisan budaya bersama tim kreatif</p>
      <div class="w-20 h-1 bg-amber-600 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Visi & Misi -->
    <div class="grid md:grid-cols-2 gap-8 mb-20">
      <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-amber-700 mb-4">Visi</h3>
        <p class="text-gray-600 leading-relaxed">
          Menjadi pusat digital budaya Purbalingga yang inspiratif, inklusif, dan diakui secara global.
        </p>
      </div>

      <div class="p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-2xl font-bold text-amber-700 mb-4">Misi</h3>
        <ul class="text-gray-600 space-y-2 list-disc list-inside">
          <li>Mengedukasi generasi muda tentang seni & tradisi.</li>
          <li>Menggunakan teknologi untuk melestarikan budaya.</li>
          <li>Membuka akses budaya Purbalingga ke dunia luas.</li>
        </ul>
      </div>
    </div>

    <!-- Tim Kami -->
    <div class="text-center mb-12">
      <h3 class="text-3xl font-bold text-amber-800">Tim Kami</h3>
      <p class="text-gray-600 mt-3">Orang-orang kreatif di balik <span class="font-semibold">PurbaCulture</span></p>
      <div class="w-16 h-1 bg-amber-600 mx-auto mt-3 rounded-full"></div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Member 1 -->
      <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition" data-aos="fade-up">
        <div class="relative">
          <img src="/images/irvanbg.png" alt="Irvan" 
               class="w-full h-80 object-cover group-hover:scale-105 transition">
        </div>
        <div class="p-6 text-center">
          <h3 class="font-semibold text-xl">Irvan</h3>
          <p class="text-amber-600 font-medium text-sm mb-3">Fullstack Developer</p>
          <p class="text-gray-600 text-sm">Bertanggung jawab dalam pengembangan sistem, database, dan integrasi API.</p>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
        <div class="relative">
          <img src="/images/intan.png" alt="Intan" 
               class="w-full h-80 object-cover group-hover:scale-105 transition">
        </div>
        <div class="p-6 text-center">
          <h3 class="font-semibold text-xl">Intan</h3>
          <p class="text-amber-600 font-medium text-sm mb-3">UI/UX Designer</p>
          <p class="text-gray-600 text-sm">Merancang tampilan aplikasi & website agar lebih menarik, interaktif, dan mudah digunakan.</p>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
        <div class="relative">
          <img src="/images/sony4.png" alt="Sony" 
               class="w-full h-80 object-cover group-hover:scale-105 transition">
        </div>
        <div class="p-6 text-center">
          <h3 class="font-semibold text-xl">Sony</h3>
          <p class="text-amber-600 font-medium text-sm mb-3">Content Writer</p>
          <p class="text-gray-600 text-sm">Menyusun konten informatif dan narasi kreatif untuk mempromosikan budaya Purbalingga.</p>
        </div>
      </div>
    </div>
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
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seni & Tradisi Lokal Purbalingga</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS Animations -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-white text-gray-800">
   <!-- Navbar -->
    @include('navbar')
  <!-- Hero Section -->
  <section class="relative w-full h-[80vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('https://images.unsplash.com/photo-1583259032331-4c2e8eeb3d06?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center px-4" data-aos="fade-up">
      <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Seni & Tradisi Lokal Purbalingga</h1>
      <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
        Mengenai seni pertunjukan, kerajinan tangan, dan upacara adat yang tetap lestari di Purbalingga
      </p>
    </div>
  </section>

  <!-- 3 Icon Intro -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">
      <div data-aos="zoom-in" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-5xl mb-4">🎭</div>
        <h3 class="text-xl font-bold mb-2">Seni Pertunjukan</h3>
        <p class="text-gray-600">Tarian, musik, dan kesenian tradisional lainnya yang kaya akan makna budaya</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="200" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-5xl mb-4">✨</div>
        <h3 class="text-xl font-bold mb-2">Tradisi & Upacara Adat</h3>
        <p class="text-gray-600">Nyadran, sedekah bumi, serta tradisi lokal yang telah diwariskan</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="400" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-5xl mb-4">🧶</div>
        <h3 class="text-xl font-bold mb-2">Kerajinan Tangan</h3>
        <p class="text-gray-600">Keindahan anyaman bambu, ukiran kayu, dan hasil kerajinan khas lainnya</p>
      </div>
    </div>
  </section>

  <!-- Seni -->
  <section class="py-16">
    <div class="container mx-auto px-6 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold mb-6">SENI</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-12">
        Seni adalah ekspresi kreatif manusia yang melibatkan berbagai bentuk karya, baik visual, audio, maupun pertunjukan, yang bertujuan untuk menyampaikan ide, perasaan, atau pengalaman.
      </p>
      <div class="grid md:grid-cols-3 gap-8">
        <div data-aos="fade-up" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Lengger_Lanang_01.jpg/640px-Lengger_Lanang_01.jpg" alt="Tari Lengger" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Tari Lengger</h3>
        </div>
        <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Kuda_Lumping_1.jpg" alt="Kuda Lumping" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Kuda Lumping</h3>
        </div>
        <div data-aos="fade-up" data-aos-delay="400" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://radarbanyumas.disway.id/upload/2516edb3925e20ad8267ddf94bb2fcfc.jpg" alt="Tradisi Begalan" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Tradisi Begalan</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Tradisi -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold mb-6">TRADISI & UPACARA ADAT</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-12">
        Upacara adat adalah serangkaian tindakan atau kegiatan yang dilakukan oleh suatu masyarakat atau suku tertentu, berdasarkan pada aturan adat dan tradisi yang diwariskan secara turun-temurun.
      </p>
      <div class="grid md:grid-cols-4 gap-8">
        <div data-aos="zoom-in" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://jatengprov.go.id/wp-content/uploads/2021/04/nyadran.jpg" alt="Nyadran" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Nyadran</h3>
        </div>
        <div data-aos="zoom-in" data-aos-delay="200" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://radarbanyumas.disway.id/upload/fbdf7693f24e84bbd395e61c1dcaf149.jpg" alt="Sedekah Bumi" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Sedekah Bumi</h3>
        </div>
        <div data-aos="zoom-in" data-aos-delay="400" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://asset.kompas.com/crops/tnCsAJwNhFPcseuDqqG1tgr3mMU=/0x0:780x390/750x500/data/photo/2016/07/29/1659241Upacara-Adat-Ujungan780x390.jpg" alt="Ujungan" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Ujungan</h3>
        </div>
        <div data-aos="zoom-in" data-aos-delay="600" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/12/upacara-nyadran.jpeg" alt="Tradisi Adat" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Tradisi Adat Lainnya</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Kerajinan -->
  <section class="py-16">
    <div class="container mx-auto px-6 text-center" data-aos="fade-up">
      <h2 class="text-3xl font-bold mb-6">KERAJINAN TANGAN</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-12">
        Kerajinan tangan adalah kegiatan seni yang mengandalkan keterampilan tangan untuk menciptakan suatu produk atau benda yang memiliki nilai guna dan estetika.
      </p>
      <div class="grid md:grid-cols-3 gap-8">
        <div data-aos="flip-left" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://i0.wp.com/smpn2purbalingga.sch.id/wp-content/uploads/2021/02/sapuglagah.jpg" alt="Sapu Glagah" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Sapu Glagah</h3>
        </div>
        <div data-aos="flip-left" data-aos-delay="200" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://radarbanyumas.disway.id/upload/c0fbfbd67e2055acba86a39bc74ec834.jpg" alt="Blangkon Soedirman" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Blangkon Soedirman</h3>
        </div>
        <div data-aos="flip-left" data-aos-delay="400" class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">
          <img src="https://asset.kompas.com/crops/EaBpQcdLRTmbm7RERpTbc6bfvhM=/0x0:780x390/750x500/data/photo/2022/08/29/630c087993e11.jpg" alt="Wayang Suket" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Wayang Suket</h3>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>

  @include('footer')
</body>
</html>

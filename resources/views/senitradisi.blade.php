<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seni & Tradisi Lokal Purbalingga</title>

  {{-- Gunakan Vite yang sama seperti halaman lain (JANGAN pakai Tailwind CDN di sini) --}}
  @vite('resources/css/app.css')

  {{-- AOS (opsional) --}}
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="antialiased bg-white text-gray-800">
  {{-- Navbar --}}
  @include('navbar')

  {{-- HERO --}}
  <section
    class="relative w-full h-[70vh] md:h-[80vh] bg-cover bg-center flex items-center justify-center"
    style="background-image:url('https://images.unsplash.com/photo-1583259032331-4c2e8eeb3d06?auto=format&fit=crop&w=1470&q=80')"
  >
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 text-center px-4 max-w-3xl" data-aos="fade-up">
      <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
        Seni & Tradisi Lokal Purbalingga
      </h1>
      <p class="text-base md:text-xl text-gray-200">
        Mengenai seni pertunjukan, kerajinan tangan, dan upacara adat yang tetap lestari di Purbalingga.
      </p>
    </div>
  </section>

  {{-- 3 Icon Intro --}}
  <section class="py-14 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-3 gap-6 md:gap-10 text-center">
      <div data-aos="zoom-in" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">🎭</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Seni Pertunjukan</h3>
        <p class="text-gray-600 text-sm md:text-base">Tarian, musik, dan kesenian tradisional yang sarat makna.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="150" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">✨</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Tradisi & Upacara Adat</h3>
        <p class="text-gray-600 text-sm md:text-base">Nyadran, sedekah bumi, serta tradisi yang diwariskan turun-temurun.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="300" class="p-6 bg-white rounded-2xl shadow hover:shadow-lg transition">
        <div class="text-4xl md:text-5xl mb-3">🧶</div>
        <h3 class="text-lg md:text-xl font-bold mb-1.5">Kerajinan Tangan</h3>
        <p class="text-gray-600 text-sm md:text-base">Anyaman bambu, ukiran kayu, dan kreasi khas Purbalingga.</p>
      </div>
    </div>
  </section>

  {{-- SENI --}}
  <section class="py-14 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
      <h2 class="text-2xl md:text-3xl font-bold mb-3">SENI</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
        Seni adalah ekspresi kreatif manusia dalam bentuk visual, audio, maupun pertunjukan untuk menyampaikan gagasan dan perasaan.
      </p>

      <div class="grid md:grid-cols-3 gap-6 md:gap-8">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="fade-up">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Lengger_Lanang_01.jpg/640px-Lengger_Lanang_01.jpg" alt="Tari Lengger" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Tari Lengger</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="fade-up" data-aos-delay="150">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Kuda_Lumping_1.jpg" alt="Kuda Lumping" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Kuda Lumping</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="fade-up" data-aos-delay="300">
          <img src="https://radarbanyumas.disway.id/upload/2516edb3925e20ad8267ddf94bb2fcfc.jpg" alt="Tradisi Begalan" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Tradisi Begalan</h3>
        </div>
      </div>
    </div>
  </section>

  {{-- TRADISI --}}
  <section class="py-14 md:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
      <h2 class="text-2xl md:text-3xl font-bold mb-3">TRADISI & UPACARA ADAT</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
        Upacara adat adalah praktik budaya turun-temurun yang dijalankan berdasarkan nilai dan aturan masyarakat setempat.
      </p>

      <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in">
          <img src="https://jatengprov.go.id/wp-content/uploads/2021/04/nyadran.jpg" alt="Nyadran" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Nyadran</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="150">
          <img src="https://radarbanyumas.disway.id/upload/fbdf7693f24e84bbd395e61c1dcaf149.jpg" alt="Sedekah Bumi" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Sedekah Bumi</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
          <img src="https://asset.kompas.com/crops/tnCsAJwNhFPcseuDqqG1tgr3mMU=/0x0:780x390/750x500/data/photo/2016/07/29/1659241Upacara-Adat-Ujungan780x390.jpg" alt="Ujungan" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Ujungan</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="zoom-in" data-aos-delay="450">
          <img src="https://awsimages.detik.net.id/community/media/visual/2021/09/12/upacara-nyadran.jpeg" alt="Tradisi Adat Lainnya" class="w-full h-40 object-cover">
          <h3 class="p-4 font-semibold">Tradisi Adat Lainnya</h3>
        </div>
      </div>
    </div>
  </section>

  {{-- KERAJINAN --}}
  <section class="py-14 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
      <h2 class="text-2xl md:text-3xl font-bold mb-3">KERAJINAN TANGAN</h2>
      <p class="text-gray-600 max-w-3xl mx-auto mb-10 md:mb-12">
        Kerajinan tangan mengandalkan keterampilan untuk menghasilkan benda bernilai fungsi sekaligus estetika.
      </p>

      <div class="grid md:grid-cols-3 gap-6 md:gap-8">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left">
          <img src="https://i0.wp.com/smpn2purbalingga.sch.id/wp-content/uploads/2021/02/sapuglagah.jpg" alt="Sapu Glagah" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Sapu Glagah</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left" data-aos-delay="150">
          <img src="https://radarbanyumas.disway.id/upload/c0fbfbd67e2055acba86a39bc74ec834.jpg" alt="Blangkon Soedirman" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Blangkon Soedirman</h3>
        </div>
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden" data-aos="flip-left" data-aos-delay="300">
          <img src="https://asset.kompas.com/crops/EaBpQcdLRTmbm7RERpTbc6bfvhM=/0x0:780x390/750x500/data/photo/2022/08/29/630c087993e11.jpg" alt="Wayang Suket" class="w-full h-48 object-cover">
          <h3 class="p-4 font-semibold">Wayang Suket</h3>
        </div>
      </div>
    </div>
  </section>

  {{-- AOS JS --}}
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script> AOS.init({ duration: 800, once: true }); </script>

  {{-- Footer (pastikan versi tanpa margin-top) --}}
  @include('footer')
</body>
</html>

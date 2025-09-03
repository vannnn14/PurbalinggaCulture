<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Tokoh - Purbalingga Culture</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
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
  <!-- Simulasi Navbar (akan digantikan dengan @include('navbar')) -->
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <span class="text-xl font-bold text-[#8b5e34]">Purbalingga Culture</span>
          </div>
        </div>
        <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
          <a href="/" class="text-gray-600 hover:text-[#8b5e34] px-3 py-2 rounded-md text-sm font-medium">Home</a>
          <a href="/sejarah" class="bg-[#8b5e34] text-white px-3 py-2 rounded-md text-sm font-medium">Sejarah</a>
          <a href="/budaya" class="text-gray-600 hover:text-[#8b5e34] px-3 py-2 rounded-md text-sm font-medium">Budaya</a>
          <a href="/wisata" class="text-gray-600 hover:text-[#8b5e34] px-3 py-2 rounded-md text-sm font-medium">Wisata</a>
          <a href="/kuliner" class="text-gray-600 hover:text-[#8b5e34] px-3 py-2 rounded-md text-sm font-medium">Kuliner</a>
        </div>
      </div>
    </div>
  </nav>

  <?php
  // Data semua tokoh
  $tokohData = [
    'soedirman' => [
      'nama' => 'Jenderal Soedirman',
      'gelar' => 'Panglima Besar Tentara Nasional Indonesia pertama',
      'kategori' => 'Pahlawan Nasional',
      'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Soedirman.jpg/800px-Soedirman.jpg',
      'lahir' => '24 Januari 1916, Purbalingga',
      'wafat' => '29 Januari 1950, Magelang',
      'dikenal' => 'Panglima Besar TNI, Pahlawan Nasional',
      'penghargaan' => 'Pahlawan Nasional, Bintang RI',
      'biografi' => [
        'Jenderal Soedirman adalah seorang perwira tinggi Indonesia pada masa Revolusi Nasional Indonesia. Sebagai panglima besar Tentara Nasional Indonesia pertama, ia adalah sosok yang dihormati di Indonesia. Terlahir dari pasangan rakyat biasa di Purbalingga, Hindia Belanda, Soedirman diadopsi oleh pamannya yang seorang priyayi.',
        'Soedirman bersekolah di sekolah dasar pribumi dan kemudian melanjutkan ke sekolah menengah yang dikelola oleh organisasi Islam Muhammadiyah. Saat di sekolah menengah, Soedirman mulai menunjukkan kemampuannya dalam kepemimpinan dan berorganisasi, dan dihormati oleh masyarakat karena ketaatannya pada Islam.',
        'Setelah Jepang menduduki Hindia Belanda pada tahun 1942, Soedirman bekerja sebagai seorang guru dan kemudian menjadi kepala sekolah di sekolah dasar Muhammadiyah. Setelah Jepang mendirikan tentara Pembela Tanah Air (PETA), Soedirman bergabung dan menjadi komandan batalion di Banyumas.',
        'Selama Agresi Militer Belanda II, Soedirman memimpin pasukan Indonesia dalam perang gerilya di Jawa. Meskipun sedang menderita tuberkulosis, ia tetap memimpin perjuangan dan terus mengobarkan semangat perlawanan terhadap Belanda. Perang gerilya ini berlangsung selama tujuh bulan dan mencakup jarak sekitar 1.000 kilometer di daerah pedalaman Jawa.',
        'Soedirman wafat pada tanggal 29 Januari 1950 di Magelang, Jawa Tengah. Ia dimakamkan di Taman Makam Pahlawan Semaki, Yogyakarta. Atas jasa-jasanya, pemerintah Indonesia menganugerahi Soedirman sebagai Pahlawan Nasional Indonesia. Namanya diabadikan sebagai nama jalan, universitas, museum, dan monumen di berbagai tempat di Indonesia.'
      ]
    ],
    'soengkono' => [
      'nama' => 'Mayjen Soengkono',
      'gelar' => 'Panglima TNI dan Pahlawan Nasional',
      'kategori' => 'Pahlawan Nasional',
      'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Mayjen_Soengkono.jpg/800px-Mayjen_Soengkono.jpg',
      'lahir' => '15 Agustus 1915, Purbalingga',
      'wafat' => '10 November 1979, Jakarta',
      'dikenal' => 'Panglima TNI, Pahlawan Nasional',
      'penghargaan' => 'Pahlawan Nasional, Bintang Mahaputera',
      'biografi' => [
        'Mayor Jenderal TNI Soengkono adalah seorang perwira tinggi TNI dan Pahlawan Nasional Indonesia. Ia dikenal sebagai salah satu tokoh penting dalam perjuangan kemerdekaan Indonesia.',
        'Soengkono memulai karier militernya dengan masuk pendidikan militer pada masa pendudukan Jepang. Setelah proklamasi kemerdekaan, ia bergabung dengan Tentara Keamanan Rakyat (TKR) yang menjadi cikal bakal TNI.',
        'Selama revolusi fisik, Soengkono terlibat dalam berbagai pertempuran melawan tentara Belanda. Kepemimpinan dan strategi militernya yang brilian membuatnya cepat naik pangkat.',
        'Setelah pengakuan kedaulatan, Soengkono terus mengabdi di militer dan memegang berbagai posisi penting. Ia dikenal sebagai perwira yang disiplin dan dedikasinya terhadap negara tidak diragukan lagi.',
        'Atas jasa-jasanya dalam memperjuangkan dan mempertahankan kemerdekaan Indonesia, pemerintah menganugerahi Soengkono gelar Pahlawan Nasional.'
      ]
    ],
    'sukatani' => [
      'nama' => 'Sukatani',
      'gelar' => 'Panglima TNI dan Pahlawan Nasional',
      'kategori' => 'Pahlawan Nasional',
      'gambar' => 'https://example.com/sukatani.jpg', // Gambar placeholder
      'lahir' => '1920, Purbalingga',
      'wafat' => '1949, Jawa Tengah',
      'dikenal' => 'Panglima TNI, Pahlawan Nasional',
      'penghargaan' => 'Pahlawan Nasional',
      'biografi' => [
        'Sukatani adalah salah satu pahlawan nasional Indonesia yang berasal dari Purbalingga. Ia dikenal karena perannya dalam perjuangan kemerdekaan Indonesia.',
        'Sejak muda, Sukatani telah menunjukkan semangat nasionalisme yang tinggi. Ia aktif dalam berbagai organisasi pergerakan pemuda yang memperjuangkan kemerdekaan Indonesia.',
        'Pada masa revolusi fisik, Sukatani bergabung dengan tentara republic dan terlibat dalam berbagai pertempuran melawan tentara Belanda. Keberanian dan kepemimpinannya di medan perang membuatnya dihormati oleh kawan dan ditakuti oleh lawan.',
        'Sukatani gugur dalam salah satu pertempuran melawan Belanda pada tahun 1949. Pengorbanannya untuk negara menjadi inspirasi bagi generasi berikutnya.',
        'Atas jasa dan pengorbanannya, pemerintah Indonesia menganugerahi Sukatani gelar Pahlawan Nasional. Namanya diabadikan sebagai nama jalan di beberapa kota di Indonesia.'
      ]
    ],
    'indro' => [
      'nama' => 'Indrodjojo Kusumonegoro',
      'gelar' => 'Artis dan Komedian Legendaris',
      'kategori' => 'Artis & Budayawan',
      'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Indrodjojo_Kusumonegoro.jpg/800px-Indrodjojo_Kusumonegoro.jpg',
      'lahir' => '17 Maret 1958, Purbalingga',
      'wafat' => '-',
      'dikenal' => 'Artis, Komedian Legendaris',
      'penghargaan' => 'Artis Legendaris Indonesia',
      'biografi' => [
        'Indrodjojo Kusumonegoro, yang lebih dikenal dengan nama Indro Warkop, adalah seorang aktor dan pelawak legendaris Indonesia. Ia terkenal sebagai anggota grup komedi Warkop bersama Dono dan Kasino.',
        'Indro memulai karier di dunia hiburan pada akhir tahun 1970-an. Bersama Dono dan Kasino, mereka membentuk grup komedi Warkop yang sangat populer di Indonesia selama beberapa dekade.',
        'Selain tampil dalam berbagai film dan sinetron, Indro juga dikenal sebagai presenter dan pemain teater. Gaya komedinya yang khas dan kemampuan aktingnya yang natural membuatnya dicintai oleh berbagai kalangan penonton.',
        'Meskipun telah mencapai kesuksesan, Indro tidak melupakan asal-usulnya. Ia sering kembali ke Purbalingga dan terlibat dalam berbagai kegiatan sosial dan budaya di kampung halamannya.',
        'Hingga kini, Indro tetap aktif di dunia hiburan dan menjadi salah satu ikon komedi Indonesia yang paling dihormati dan dikagumi.'
      ]
    ]
  ];

  // Mendapatkan parameter tokoh dari URL (default: soedirman)
  $tokohKey = isset($_GET['tokoh']) ? $_GET['tokoh'] : 'soedirman';
  
  // Jika parameter tidak valid, default ke soedirman
  if (!array_key_exists($tokohKey, $tokohData)) {
    $tokohKey = 'soedirman';
  }
  
  $tokoh = $tokohData[$tokohKey];
  ?>

  <main id="content" class="scroll-smooth">
    <!-- BREADCRUMB -->
    <section class="bg-[#FFECD1]/30 py-4">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="text-sm">
          <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
              <a href="/" class="text-[#8b5e34] hover:text-[#5a371c] transition">Home</a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </li>
            <li class="flex items-center">
              <a href="/sejarah" class="text-[#8b5e34] hover:text-[#5a371c] transition">Sejarah</a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </li>
            <li class="flex items-center">
              <a href="/sejarah#tokoh" class="text-[#8b5e34] hover:text-[#5a371c] transition">Tokoh</a>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </li>
            <li class="text-gray-600"><?php echo $tokoh['nama']; ?></li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- NAVIGASI TOKOH -->
    <section class="bg-white border-b">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex overflow-x-auto space-x-6 py-4">
          <?php foreach ($tokohData as $key => $data): ?>
            <a href="?tokoh=<?php echo $key; ?>" 
               class="whitespace-nowrap px-4 py-2 text-sm font-medium <?php echo $key === $tokohKey ? 'tab-active text-[#8b5e34]' : 'text-gray-500 hover:text-gray-700'; ?>">
              <?php echo $data['nama']; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- HERO TOKOH -->
    <section class="hero-pattern py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- GAMBAR TOKOH -->
          <div class="lg:col-span-1">
            <div class="rounded-xl overflow-hidden shadow-lg">
              <img src="<?php echo $tokoh['gambar']; ?>" alt="<?php echo $tokoh['nama']; ?>" class="w-full h-auto object-cover">
            </div>
            
            <!-- INFO SINGKAT -->
            <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
              <h3 class="font-bold text-lg text-[#5a371c] mb-3">Informasi Tokoh</h3>
              <ul class="space-y-2">
                <li class="flex">
                  <span class="font-medium w-32">Nama Lengkap</span>
                  <span class="text-gray-700"><?php echo $tokoh['nama']; ?></span>
                </li>
                <li class="flex">
                  <span class="font-medium w-32">Lahir</span>
                  <span class="text-gray-700"><?php echo $tokoh['lahir']; ?></span>
                </li>
                <?php if (!empty($tokoh['wafat']) && $tokoh['wafat'] !== '-'): ?>
                <li class="flex">
                  <span class="font-medium w-32">Wafat</span>
                  <span class="text-gray-700"><?php echo $tokoh['wafat']; ?></span>
                </li>
                <?php endif; ?>
                <li class="flex">
                  <span class="font-medium w-32">Dikenal</span>
                  <span class="text-gray-700"><?php echo $tokoh['dikenal']; ?></span>
                </li>
                <li class="flex">
                  <span class="font-medium w-32">Penghargaan</span>
                  <span class="text-gray-700"><?php echo $tokoh['penghargaan']; ?></span>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- DETAIL TOKOH -->
          <div class="lg:col-span-2">
            <header class="mb-6">
              <p class="text-xs uppercase tracking-wider text-[#C59867]"><?php echo $tokoh['kategori']; ?></p>
              <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-1"><?php echo $tokoh['nama']; ?></h1>
              <p class="text-lg text-gray-700 mt-2"><?php echo $tokoh['gelar']; ?></p>
            </header>
            
            <div class="prose max-w-none">
              <div class="bg-white p-6 rounded-xl shadow-sm">
                <h2 class="text-2xl font-bold text-[#5a371c] mb-4">Biografi</h2>
                
                <?php foreach ($tokoh['biografi'] as $paragraf): ?>
                  <p class="text-gray-700 mb-4"><?php echo $paragraf; ?></p>
                <?php endforeach; ?>
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
          <?php 
          // Tampilkan 4 tokoh lainnya (selain yang sedang aktif)
          $count = 0;
          foreach ($tokohData as $key => $data): 
            if ($key !== $tokohKey && $count < 4):
          ?>
          <article class="relative rounded-xl overflow-hidden shadow-lg group">
            <a href="?tokoh=<?php echo $key; ?>">
              <img src="<?php echo $data['gambar']; ?>" alt="<?php echo $data['nama']; ?>" class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
              <div class="p-4">
                <h3 class="text-lg font-bold text-black"><?php echo $data['nama']; ?></h3>
                <p class="text-sm text-black"><?php echo $data['dikenal']; ?></p>
              </div>
            </a>
          </article>
          <?php 
              $count++;
            endif;
          endforeach; 
          ?>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  
  <footer>
    @include('footer')
  </footer>
</body>
</html> 
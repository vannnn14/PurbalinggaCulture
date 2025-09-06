<footer class="relative -mt-px isolate bg-gradient-to-b from-amber-900 to-amber-950 text-white">
  <!-- Wave atas -->
  <div class="absolute -top-6 left-0 w-full overflow-hidden leading-[0] pointer-events-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="block w-full">
      <path fill="#78350f" d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,90.7C672,85,768,139,864,154.7C960,171,1056,149,1152,138.7C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"/>
    </svg>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 py-14 grid md:grid-cols-3 gap-10 text-sm">
    <!-- Brand -->
    <div>
      <h2 class="text-3xl font-extrabold tracking-wide">PurbaCulture</h2>
      <p class="mt-3 italic text-amber-200">
        "Nguri-uri Budaya Lokal, <br> kanggo Generasi Global"
      </p>
    </div>

<!-- Navigation -->
<div>
  <h3 class="font-bold text-lg mb-4 text-amber-300">Navigation</h3>
  <ul class="space-y-2">
    <li><a href="/home" class="hover:text-amber-400 transition">&rsaquo; Home</a></li>

    <!-- Jelajah Budaya collapsible -->
    <li>
      <button 
        onclick="document.getElementById('submenu-jelajah').classList.toggle('hidden')" 
        class="hover:text-amber-400 transition font-semibold"
      >
        &rsaquo; Jelajah Budaya
      </button>

      <ul id="submenu-jelajah" class="hidden ml-4 mt-2 space-y-1 text-sm text-gray-300">
        <li><a href="sejarah" class="hover:text-amber-400 transition">› Sejarah Purbalingga</a></li>
        <li><a href="/senitradisi" class="hover:text-amber-400 transition">› Seni & Tradisi</a></li>
        <li><a href="/batik" class="hover:text-amber-400 transition">› Batik Daerah</a></li>
      </ul>
    </li>

    <li><a href="/kuliner" class="hover:text-amber-400 transition">&rsaquo; Kuliner</a></li>
    <li><a href="/bahasa" class="hover:text-amber-400 transition">&rsaquo; Bahasa</a></li>
    <li><a href="/tentang" class="hover:text-amber-400 transition">&rsaquo; Tentang Kami</a></li>
  </ul>
</div>

    <!-- Kontak -->
    <div class="space-y-4">
      <h3 class="font-bold text-lg mb-2 text-amber-300">Kontak</h3>
      <p class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
        </svg>
        Purbalingga, Jawa Tengah, 53311
      </p>
      <p class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
          <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
        <a href="mailto:purba@gmail.com" class="hover:text-amber-400 transition">purba@gmail.com</a>
      </p>
      <p class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
          <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20a1 1 0 0 1-1 1C9.39 21 1 13.39 1 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
        </svg>
        081-234-567-890
      </p>
    </div>
  </div>

  <!-- Ikuti Kami -->
  <div class="relative z-10 text-center py-6">
    <p class="font-semibold text-amber-300 tracking-widest uppercase">&laquo;&laquo; Ikuti Kami &raquo;&raquo;</p>
    <div class="flex justify-center mt-5 space-x-5">
      <!-- Sosmed buttons sama seperti punyamu -->
      <!-- ... -->
    </div>
  </div>

  <!-- Garis bawah -->
  <div class="relative z-10 border-t border-amber-800 text-center py-4 text-xs flex flex-col md:flex-row justify-between items-center px-6">
    <p class="mb-2 md:mb-0">Copyright &copy;2025 PurbaCulture | All Rights Reserved</p>
    <a href="#" class="hover:text-amber-400 font-semibold transition">Kembali ke atas &uarr;</a>
  </div>
</footer>

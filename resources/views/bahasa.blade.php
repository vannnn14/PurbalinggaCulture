<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
</head>

<body class="hero-pattern">
    {{-- Navbar --}}
    @include('navbar')

    
    <div class="max-w-5xl mx-auto p-6">
    <h2 class="text-3xl font-bold text-center mb-2 text-[#8B4513]">🪔 Translator Bahasa Ngapak 🪔</h2>
    <p class="text-center text-gray-600 mb-8 italic">
        Terjemahkan kata/kalimat dari Bahasa Ngapak ke Bahasa Indonesia dengan mudah.
    </p>

    {{-- Pilih mode bahasa --}}
    <div class="flex justify-center mb-6">
        <div class="inline-flex bg-white rounded-full shadow-md overflow-hidden border">
            <button id="btnNgapak" 
                class="px-5 py-2 font-medium active cursor-pointer transition-colors duration-300 hover:bg-[#e6b68c] hover:text-white">
                Ngapak → Indonesia
            </button>
            <button id="btnIndo" 
                class="px-5 py-2 font-medium cursor-pointer transition-colors duration-300 hover:bg-[#e6b68c] hover:text-white">
                Indonesia → Ngapak
            </button>
        </div>
    </div>

    {{-- Inputan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
            <label id="labelLeft" class="block mb-2 font-semibold text-[#6B4226]">Ngapak</label>
            <textarea id="inputLeft" 
                class="w-full p-3 border rounded-lg h-36 focus:ring-2 focus:ring-[#e6b68c] focus:outline-none" 
                placeholder="Tulis teks di sini..."></textarea>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
            <label id="labelRight" class="block mb-2 font-semibold text-[#6B4226]">Indonesia</label>
            <textarea id="inputRight" 
                class="w-full p-3 border rounded-lg h-36 bg-gray-50" 
                placeholder="Hasil terjemahan..." readonly></textarea>
        </div>
    </div>

    {{-- Kata populer --}}
    <div class="border-white rounded-xl p-6 bg-white shadow-sm mb-10">
        <h3 class="font-semibold mb-4 text-lg text-[#8B4513]">🔥 Kata Populer :</h3>
        <ul class="grid grid-cols-2 md:grid-cols-3 gap-3 text-gray-700">
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Kowe</b> = Kamu</li>
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Inyong</b> = Aku</li>
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Lagi</b> = Sedang</li>
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Mangan</b> = Makan</li>
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Turu</b> = Tidur</li>
            <li class="p-2 bg-[#fef7eb] rounded-lg shadow-sm">👉 <b>Kencot</b> = Laper</li>
        </ul>
    </div>
</div>


<script>

    let mode = "ngapak"; // default

    function setMode(newMode) {
        mode = newMode;
        document.getElementById("btnNgapak").classList.toggle("active", mode === "ngapak");
        document.getElementById("btnIndo").classList.toggle("active", mode === "indo");
        document.getElementById("labelLeft").innerText = mode === "ngapak" ? "Ngapak" : "Indonesia";
        document.getElementById("labelRight").innerText = mode === "ngapak" ? "Indonesia" : "Ngapak";
        translateDebounced(); // update hasil setelah ganti mode
    }

    document.getElementById("btnNgapak").addEventListener("click", () => setMode("ngapak"));
    document.getElementById("btnIndo").addEventListener("click", () => setMode("indo"));

    // Debounce agar tidak spam API saat mengetik
    function debounce(fn, delay = 300) {
        let t;
        return (...args) => {
            clearTimeout(t);
            t = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    // Fungsi utama: panggil API
    async function translate() {
        const input = document.getElementById("inputLeft").value.trim();
        const outEl = document.getElementById("inputRight");

        if (!input) {
            outEl.value = "";
            return;
        }

        try {
            const res = await fetch("/api/translate", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                },
                body: JSON.stringify({ text: input, mode })
            });

            if (!res.ok) {
                console.error('API error status', res.status);
                outEl.value = "Terjadi kesalahan pada server.";
                return;
            }

            const data = await res.json();
            outEl.value = data.translation ?? "";
        } catch (err) {
            console.error(err);
            outEl.value = "Terjadi error koneksi API";
        }
    }

    const translateDebounced = debounce(translate, 300);

    // Real-time translate saat user mengetik
    document.getElementById("inputLeft").addEventListener("input", translateDebounced);

    function speakText() {
        let text = document.getElementById("inputRight").value;
        if (text) {
            let utter = new SpeechSynthesisUtterance(text);
            speechSynthesis.speak(utter);
        }
    }

    function copyText() {
        let text = document.getElementById("inputRight").value;
        if (text) {
            navigator.clipboard.writeText(text);
            alert("Teks berhasil dicopy!");
        }
    }
</script>

@include('footer')
</body>
</html>


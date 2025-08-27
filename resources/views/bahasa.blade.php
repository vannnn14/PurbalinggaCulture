<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')
    <style>
        .active {
            background-color: #e6b68c;
            color: white;
        }
    </style>
</head>


<body class="bg-[#f6efe3]">
    {{-- Navbar --}}
    @include('navbar')

    <div class="max-w-5xl mx-auto p-6">
        <h2 class="text-2xl font-bold text-center mb-2">Translator Bahasa Ngapak</h2>
        <p class="text-center text-gray-700 mb-6">
            Terjemahkan kata/kalimat dari Bahasa Ngapak ke Bahasa Indonesia (dummy version).
        </p>

        {{-- Pilih mode bahasa --}}
        <div class="flex justify-center mb-4">
            <div class="inline-flex border rounded-lg overflow-hidden">
                <button id="btnNgapak" class="px-4 py-2 font-medium active">Ngapak → Indonesia</button>
                <button id="btnIndo" class="px-4 py-2 font-medium">Indonesia → Ngapak</button>
            </div>
        </div>

        {{-- Inputan --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label id="labelLeft" class="block mb-2 font-medium">Ngapak</label>
                <textarea id="inputLeft" class="w-full p-3 border rounded-lg h-32" placeholder="Tulis teks di sini..."></textarea>
            </div>
            <div>
                <label id="labelRight" class="block mb-2 font-medium">Indonesia</label>
                <textarea id="inputRight" class="w-full p-3 border rounded-lg h-32" placeholder="Hasil terjemahan..." readonly></textarea>
            </div>
        </div>

        {{-- Aksi tambahan --}}
        <div class="flex justify-center gap-6 text-gray-700 mb-6">
            <button onclick="speakText()" class="flex items-center gap-1 hover:text-black">
                🔊 Baca
            </button>
            <button onclick="copyText()" class="flex items-center gap-1 hover:text-black">
                📋 Copy
            </button>
            <button class="flex items-center gap-1 hover:text-black">
                ❤ Simpan
            </button>
        </div>

        {{-- Kata populer --}}
        <div class="border rounded-lg p-4 bg-white">
            <h3 class="font-semibold mb-2">Kata Populer :</h3>
            <ul class="grid grid-cols-2 gap-2 text-gray-700">
                <li>Kowe = Kamu</li>
                <li>Nggo = Untuk</li>
                <li>Ndang = Ayo cepat</li>
                <li>Mangan = Makan</li>
                <li>Inyong = Aku</li>
            </ul>
        </div>
    </div>

    <!-- <script>
        let mode = "ngapak"; // default
        const kamus = {
            "kowe": "kamu",
            "nggo": "untuk",
            "ndang": "ayo cepat",
            "mangan": "makan",
            "inyong": "aku"
        };

        function setMode(newMode) {
            mode = newMode;
            document.getElementById("btnNgapak").classList.toggle("active", mode === "ngapak");
            document.getElementById("btnIndo").classList.toggle("active", mode === "indo");
            document.getElementById("labelLeft").innerText = mode === "ngapak" ? "Ngapak" : "Indonesia";
            document.getElementById("labelRight").innerText = mode === "ngapak" ? "Indonesia" : "Ngapak";
            translateText(); // langsung update hasil setelah ganti mode
        }

        document.getElementById("btnNgapak").addEventListener("click", () => setMode("ngapak"));
        document.getElementById("btnIndo").addEventListener("click", () => setMode("indo"));

        // realtime translate saat user mengetik
        document.getElementById("inputLeft").addEventListener("input", translateText);

        function translateText() {
            let input = document.getElementById("inputLeft").value.toLowerCase().trim();
            let output = "";

            if (!input) {
                document.getElementById("inputRight").value = "";
                return;
            }

            if (mode === "ngapak") {
                output = input.split(" ").map(word => kamus[word] || word).join(" ");
            } else {
                output = input.split(" ").map(word => {
                    let found = Object.keys(kamus).find(key => kamus[key] === word);
                    return found || word;
                }).join(" ");
            }

            document.getElementById("inputRight").value = output;
        }

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
    </script> -->

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


</body>
</html>


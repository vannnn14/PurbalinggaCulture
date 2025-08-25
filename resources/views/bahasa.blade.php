<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')
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
                <button id="btnNgapak" class="px-4 py-2 bg-white text-gray-700 font-medium">Ngapak → Indonesia</button>
                <button id="btnIndo" class="px-4 py-2 bg-gray-200 text-gray-700 font-medium">Indonesia → Ngapak</button>
            </div>
        </div>

        {{-- Inputan --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label id="labelLeft" class="block mb-2 font-medium">Ngapak</label>
                <textarea id="inputLeft" class="w-full p-3 border rounded-lg h-32"></textarea>
            </div>
            <div>
                <label id="labelRight" class="block mb-2 font-medium">Indonesia</label>
                <textarea id="inputRight" class="w-full p-3 border rounded-lg h-32" readonly></textarea>
            </div>
        </div>

        {{-- Tombol translate --}}
        <div class="flex justify-center mb-6">
            <button onclick="translateText()" class="bg-[#e6b68c] hover:bg-[#d49d72] px-6 py-2 rounded-lg font-semibold flex items-center gap-2">
                Translate →
            </button>
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
                ❤️ Simpan
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
            </ul>
        </div>
    </div>

    <script>
        let mode = "ngapak"; // default: Ngapak → Indonesia

        const kamus = {
            "kowe": "kamu",
            "nggo": "untuk",
            "ndang": "ayo cepat",
            "mangan": "makan"
        };

        document.getElementById("btnNgapak").addEventListener("click", () => {
            mode = "ngapak";
            document.getElementById("btnNgapak").classList.add("bg-white");
            document.getElementById("btnIndo").classList.remove("bg-white");
            document.getElementById("labelLeft").innerText = "Ngapak";
            document.getElementById("labelRight").innerText = "Indonesia";
        });

        document.getElementById("btnIndo").addEventListener("click", () => {
            mode = "indo";
            document.getElementById("btnIndo").classList.add("bg-white");
            document.getElementById("btnNgapak").classList.remove("bg-white");
            document.getElementById("labelLeft").innerText = "Indonesia";
            document.getElementById("labelRight").innerText = "Ngapak";
        });

        function translateText() {
            let input = document.getElementById("inputLeft").value.toLowerCase().trim();
            let output = "";

            if (mode === "ngapak") {
                output = kamus[input] || "Belum ada di kamus";
            } else {
                // Indonesia → Ngapak (reverse)
                let found = Object.keys(kamus).find(key => kamus[key] === input);
                output = found || "Belum ada di kamus";
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
            navigator.clipboard.writeText(text);
            alert("Teks berhasil dicopy!");
        }
    </script>
</body>
</html>

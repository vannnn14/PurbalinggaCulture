<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purba Culture</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFFED] ">
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->

    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-7xl mx-auto pt-8">
            <!-- Kolom Kiri -->
            <div class="space-y-6">
                <!-- Highlight Box -->

                <!-- Paragraf Sejarah -->

                <div class="bg-[#F8EED6] p-6 pt-5 rounded-lg shadow text-gray-700 text-sm leading-relaxed space-y-4">
                    <h2 class="text-3xl font-bold  text-gray-900">Tentang Sejarah Purbalingga</h2>
                    <p class="text-gray-800 text-sm leading-relaxed">
                    Kyai Arsantaka, yang pada masa mudanya bernama Kyai Arsakusuma, adalah putra Bupati Onje II dan
                        menjadi tokoh penting dalam sejarah Purbalingga. Setelah meninggalkan Kadipaten Onje, ia
                        berkelana ke timur dan diambil sebagai anak angkat oleh Kyai Wanakusuma di desa Masaran. Pada
                        tahun 1740–1760, ia menjabat sebagai demang di Kademangan Pagendolan di bawah pemerintahan
                        Tumenggung Dipayuda I dari Karanglewas.
                    </p>
                    <p>
                       
                    </p>
                    <p>
                         Banyak riwayat yang menceritakan tenang heroisme dari Kyai Arsantaka antara lain ketika terjadi
                        perang Jenar, yang merupakan bagian dari perang Mangkubumen, yakni sebuah peperangan antara
                        Pangeran Mangkubumi dengan kakaknya Paku Buwono II dikarenakan Pangeran mangkubumi tidak puas
                        terhadap sikap kakanya yang lemah terhadap kompeni Belanda. Dalam perang jenar ini, Kyai
                        Arsantaka berada didalam pasukan kadipaten Banyumas yang membela Paku Buwono. Dikarenakan jasa
                        dari Kyai Arsantaka kepada Kadipaten Banyumas pada perang Jenar, maka Adipati banyumas R.
                        Tumenggung Yudanegara mengangkat putra Kyai Arsantaka yang bernama Kyai Arsayuda menjadi
                        menantu. Seiring dengan berjalannya waktu, maka putra Kyai Arsantaka yakni Kyai Arsayuda menjadi
                        Tumenggung Karangwelas dan bergelar Raden Tumenggung Dipayuda III.Masa masa pemerintahan Kyai
                        Arsayuda dan atas saran dari  ayahnya yakni Kyai Arsantaka yang bertindak sebagai penasihat,

                    </p>
                    <p>
                        Setelah dewasa, ia diberi amanah untuk meninggalkan Kadipaten Onje untuk berkelana ke arah timur
                        dan akhirnya
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="flex justify-center items-center ">
                <img src="/images/gambarsejarah.png" alt="Sejarah Purbalingga" class="w-full  h-auto rounded-xl ">
                <!-- max-w-md -->
            </div>
        </div>
        <section class="w-full bg-black py-12">
            <div x-data="{ current: 0, slides: [
        { img: '/images/pbg.jpg', text: 'Alun Alun Selatan Tempo Dulu ...' },
        { img: '/images/stasiun.jpg', text: 'Stasiun Poerbolinggo ...' },
        { img: '/images/masjid.jpg', text: 'Masjid Agung Darussalam ...' }
    ] }" class="relative flex justify-center w-full">

                <div class="relative w-full max-w-7xl overflow-hidden">
                    <!-- Slide -->
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="current === index"
                            class="relative w-full h-[500px] transition-all duration-700 ease-in-out">

                            <!-- Gambar -->
                            <img :src="slide.img" class="w-full h-full object-cover" alt="Sejarah">

                            <!-- Overlay teks -->
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                <p class="text-white text-xl md:text-3xl font-semibold max-w-3xl text-center px-6"
                                    x-text="slide.text">
                                </p>
                            </div>
                        </div>
                    </template>

                    <!-- Tombol Prev / Next -->
                    <div class="absolute inset-0 flex items-center justify-between px-4">
                        <button @click="current = (current === 0) ? slides.length - 1 : current - 1"
                            class="bg-black/60 text-white px-3 py-1 rounded  cursor-pointer">&lt</button>
                        <button @click="current = (current === slides.length - 1) ? 0 : current + 1"
                            class="bg-black/60 text-white px-3 py-1 rounded cursor-pointer">&gt</button>
                    </div>

                    <!-- Dots indicator -->
                    <div class="absolute bottom-4 w-full flex justify-center space-x-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="current = index" class="w-3 h-3 rounded-full"
                                :class="current === index ? 'bg-white' : 'bg-gray-400'">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </section>


        <!--         
        <div class="bg-[#F8EED6] p-6 rounded-lg shadow text-gray-700 text-sm leading-relaxed ">
            <p class="text-gray-800 text-sm leading-relaxed">
                Sesudah dewasa diceritakan bahwa kyai Arsakusuma meninggalkan Kadipaten Onje untuk berkelana ke arah
                timur dan sesampainya di desa Masaran  (Sekarang di Kecamatan Bawang, Kabupaten Banjarnegara) diambil
                anak angkat oleh Kyai Wanakusuma yang masih anak keturunan Kyai Ageng Giring dari Mataram. Pada tahun
                1740 ? 1760, Kyai Arsantaka menjadi demang di Kademangan Pagendolan (sekarang termasuk wilayah desa
                Masaran), suatu wilayah yang masih berada dibawah pemerintahan Karanglewas (sekarang termasuk kecamatan
                Kutasari, Purbalingga) yang dipimpin oleh Tumenggung Dipayuda I. Banyak riwayat yang menceritakan tenang
                heroisme dari Kyai Arsantaka antara lain ketika terjadi perang Jenar, yang merupakan bagian dari perang
                Mangkubumen, yakni sebuah peperangan antara Pangeran Mangkubumi dengan kakaknya Paku Buwono II
                dikarenakan Pangeran mangkubumi tidak puas terhadap sikap kakanya yang lemah terhadap kompeni Belanda.
                Dalam perang jenar ini, Kyai Arsantaka berada didalam pasukan kadipaten Banyumas yang membela Paku
                Buwono. Dikarenakan jasa dari Kyai Arsantaka kepada Kadipaten Banyumas pada perang Jenar, maka Adipati
                banyumas R. Tumenggung Yudanegara mengangkat putra Kyai Arsantaka yang bernama Kyai Arsayuda menjadi
                menantu. Seiring dengan berjalannya waktu, maka putra Kyai Arsantaka yakni Kyai Arsayuda menjadi
                Tumenggung Karangwelas dan bergelar Raden Tumenggung Dipayuda III.Masa masa pemerintahan Kyai Arsayuda
                dan atas saran dari  ayahnya yakni Kyai Arsantaka yang bertindak sebagai penasihat, maka  pusat
                pemerintahan dipiindah dari Karanglewas ke desa Purbalingga yang diikuti dengan pembangunan pendapa
                Kabupaten dan alun-alun. Nama Purbalingga ini bisa kita dapati didalam kisah-kisah babad. Adapun Kitab
                babad yang berkaitan dan menyebut Purbalingga diantaranya adalah Babad Onje, Babad Purbalingga, Babad
                Banyumas dan Babad Jambukarang. Selain dengan empat buah kitap babat tsb, maka dalam  merekonstruksi
                sejarah Purbalingga, juga melihat arsip-arsip peninggalan Pemerintah Hindia Belanda yang tersimpan dalam
                koleksi Aarsip Nasional Republik Indonesia.Berdasarkan sumber-sumber diatas, maka melalui Peraturan
                daerah (perda) No. 15 Tahun 1996 tanggal 19 Nopember 1996, ditetapkan bahwa hari jadi Kabupaten
                Purbalingga adalah 18 Desember 1830 atau 3 Rajab 1246 Hijriah atau 3 Rajab 1758 Je. </p>
        </div> -->
    </section>

    <!-- Start Tokoh Purbalingga -->
    <section class="max-w-7xl mx-auto p-4">
        <h1 class="text-3xl font-bold mb-2 text-gray-900"> Tokoh - Tokoh</h1>
        <h1 class="text-3xl font-bold mb-6 text-gray-900"> Purbalingga</h1>
        <!-- End Tokoh Purbalingga -->
    </section>
</body>

</html>
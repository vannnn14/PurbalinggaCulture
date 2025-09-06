<?php
namespace App\Http\Controllers;

 use Illuminate\Http\Request;


    class KulinerController extends Controller
{
    protected array $posts = [
        [
            'slug'     => 'tempe-mendoan-gurih-tipis-hangat',
            'title'    => 'Tempe Mendoan — Gurih, Tipis, dan Nikmat Disantap Hangat',
            'category' => 'Kuliner Ikonik',
            'image'    => 'images/mendoan.png',
            'body'     => <<<'HTML'
<p><strong>Tempe mendoan</strong> adalah ikon kuliner Banyumas–Purbalingga. Kata “mendo” berarti setengah matang, sehingga teksturnya lembut di bagian dalam dengan tepian sedikit garing. Proses menggorengnya singkat dalam minyak panas agar tempe tidak kering.</p>
<p>Mendoan biasanya dinikmati selagi hangat, ditemani cabai rawit hijau atau sambal kecap. Kelezatan mendoan justru terletak pada kesederhanaan adonannya: tepung berbumbu bawang, daun bawang, ketumbar, dan sedikit garam.</p>
<p>Di banyak warung kopi, angkringan, hingga hajatan kampung, mendoan hadir sebagai kudapan pemersatu. Ia akrab dengan obrolan ringan, musik kenthongan, dan aroma kopi tubruk.</p>
<p>Secara ekonomi, mendoan menghidupi rantai pelaku: perajin tempe, penjual sayur, hingga pedagang gorengan keliling. Banyak keluarga menggantungkan pemasukan harian dari lapak mendoan.</p>
<p>Inovasi pun bermunculan: mendoan krispi, mendoan mini, hingga mendoan beku untuk oleh-oleh. Meski demikian, mendoan tipis yang baru turun dari wajan tetap tak tergantikan.</p>
<p>Kuliner ini bukan sekadar “gorengan”: ia adalah pengalaman budaya warga Banyumas Raya—hangat, akrab, dan egaliter.</p>
HTML
        ],
        [
            'slug'     => 'kriuk-renyah-keripik-tempe-purbalingga',
            'title'    => 'Kriuk Renyah Keripik Tempe Purbalingga',
            'category' => 'Oleh-oleh',
            'image'    => 'images/keripik.jpg',
            'body'     => <<<'HTML'
<p><strong>Keripik tempe</strong> Purbalingga dikenal karena irisan tempenya sangat tipis, dibalur adonan berbumbu, lalu digoreng hingga renyah. Hasilnya ringan, kriuk, dan tahan lama sehingga cocok sebagai oleh-oleh.</p>
<p>Produsen rumahan memproduksi varian rasa: original, bawang, pedas balado, keju, hingga jagung manis. Pengemasan modern membuat keripik tempe menembus pasar ritel dan toko oleh-oleh lintas kota.</p>
<p>Di balik kerenyahannya, ada standar mutu: pemilihan kedelai, proses fermentasi, ketebalan irisan, hingga suhu minyak. Semua menentukan warna, aroma, dan daya simpan.</p>
<p>Industri ini menyerap tenaga kerja lokal, terutama ibu-ibu rumah tangga. Banyak UMKM memanfaatkan platform digital untuk pemasaran dan logistik antarkota.</p>
<p>Keripik tempe menjadi cerminan adaptasi kuliner tradisional terhadap selera modern tanpa meninggalkan identitasnya.</p>
HTML
        ],
        [
            'slug'     => 'nopia-dan-cerita-kue-bakar-dari-banyumas-raya',
            'title'    => 'Nopia dan Cerita Kue Bakar dari Banyumas Raya',
            'category' => 'Tradisi',
            'image'    => 'images/nopia.jpeg',
            'body'     => <<<'HTML'
<p><strong>Nopia</strong> adalah kue bulat berongga dengan isian gula merah kental. Adonan ditempel di dinding tungku tanah liat panas—teknik memanggang yang mirip roti naan. Cara tradisional inilah yang memberi aroma asap khas dan permukaan mengilap.</p>
<p>Sejarah nopia berkelindan dengan akulturasi budaya Tionghoa dan masyarakat Banyumas sejak abad ke-19. Dulu, isiannya sederhana: gula jawa dan aroma jahe. Kini muncul varian cokelat, keju, durian, hingga kopi.</p>
<p>Sentra nopia menjadi objek wisata kuliner. Pengunjung bisa melihat proses menempel adonan di tungku dan mencicipi nopia hangat langsung dari perapian.</p>
<p>Bagi banyak perajin, mempertahankan tungku tanah liat adalah wujud menjaga tradisi. Modernisasi dilakukan pada higienitas, kemasan, dan pemasaran, tanpa mengubah ruh teknik panggangnya.</p>
<p>Nopia pun menjelma identitas Banyumas Raya yang manis—secara rasa maupun cerita.</p>
HTML
        ],
        [
            'slug'     => 'getuk-goreng-sokaraja-manis-legit',
            'title'    => 'Getuk Goreng Sokaraja yang Manis dan Legit',
            'category' => 'Camilan',
            'image'    => 'images/getuk.jpg',
            'body'     => <<<'HTML'
<p><strong>Getuk goreng</strong> bermula dari siasat mengawetkan getuk singkong. Getuk yang biasanya dikukus dicampur gula jawa lalu digoreng hingga kecokelatan. Rasanya manis legit, beraroma nira, dengan tekstur kenyal di dalam namun agak renyah di luar.</p>
<p>Di Sokaraja, getuk goreng dijajakan dalam besek kecil—ikon oleh-oleh yang khas. Banyak merek legendaris bertahan lintas generasi berkat konsistensi bahan baku dan teknik.</p>
<p>Singkong lokal berperan penting. Kandungan pati dan kadar air menentukan kekenyalan. Itulah mengapa beberapa produsen menjaga suplai singkong dari kebun mitra tetap stabil.</p>
<p>Inovasi rasa (cokelat, keju, pandan) hadir untuk menyasar selera anak muda, namun varian gula jawa klasik tetap yang paling dicari.</p>
<p>Getuk goreng adalah potret kearifan lokal: sederhana, kreatif, dan berdaya ekonomi.</p>
HTML
        ],
        [
            'slug'     => 'sate-blater-kuliner-malam-legendaris',
            'title'    => 'Sate Blater — Kuliner Malam Legendaris',
            'category' => 'Kuliner Malam',
            'image'    => 'images/sate-blater.jpg',
            'body'     => <<<'HTML'
<p><strong>Sate Blater</strong> berasal dari Desa Blater, Purbalingga. Irisan daging kambing dipotong agak besar, dibakar hingga beraroma asap, lalu disiram bumbu kacang-kecap yang medok, berpadu irisan bawang merah dan perasan jeruk limau.</p>
<p>Karakter bumbu Blater lebih pekat dan sedikit manis gurih. Banyak penjual beroperasi malam hari, menjadi destinasi kuliner keluarga dan anak muda hingga larut.</p>
<p>Keistimewaan lain ada pada proses perendaman bumbu sebelum bakar. Teknik ini membuat bumbu meresap namun daging tetap juicy.</p>
<p>Sate Blater ikut menggerakkan ekonomi sektor mikro: peternak kambing, arang batok, hingga pedagang bumbu. Di beberapa acara desa, aromanya seolah menjadi “gong penutup” malam.</p>
<p>Kalau berkunjung ke Purbalingga, sulit menolak piring sate Blater hangat ditemani lontong dan wedang jahe.</p>
HTML
        ],
    ];

    public function show(string $slug)
    {
        $post = collect($this->posts)->firstWhere('slug', $slug);
        abort_if(!$post, 404);

        $related = collect($this->posts)->where('slug', '!=', $slug)->take(3);

        return view('kuliner.show', compact('post', 'related'));
    }
}
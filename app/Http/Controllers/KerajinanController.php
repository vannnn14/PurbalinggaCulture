<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerajinanController extends Controller
{
    private array $data = [
        'sapu-glagah' => [
            'title'    => 'Sapu Glagah',
            'slug'     => 'sapu-glagah',
            'category' => 'Kerajinan',
            'image'    => 'images/sapuglagah.png',
            'body'     => <<<HTML
                <p>Sapu glagah merupakan produk kriya rumah tangga yang memanfaatkan serat rumput glagah (Imperata cylindrica). Sejak lama, perajin di pedesaan Jawa mengembangkan teknik penyortiran dan pengikatan serat sehingga tercipta sapu yang kuat, lentur, serta awet untuk pemakaian harian. Keunggulan sapu glagah adalah beratnya yang ringan dan genggaman yang nyaman, membuatnya cocok untuk lantai semen, keramik, hingga teras rumah tradisional.</p>
                <p>Proses pembuatannya diawali dengan pemilihan glagah yang tua namun tidak rapuh, kemudian dijemur hingga kadar air berkurang. Serat yang kering disisir agar panjangnya seragam dan kotoran terlepas, lalu dikelompokkan sesuai ketebalan. Perajin menyiapkan gagang dari bambu atau kayu, mengikat serat lapis demi lapis dengan tali nilon atau rotan tipis, dan merapikan ujungnya agar sapu tetap rata saat digunakan. Tahap akhir berupa penguatan ikat dan pemotongan halus untuk memastikan konsistensi tebal-tipis serat.</p>
                <p>Secara ekonomi, sapu glagah menjadi penopang keluarga perajin karena bahan bakunya mudah didapat dan siklus produksinya relatif cepat. Produk umumnya dipasarkan di pasar tradisional maupun kanal daring dengan kisaran harga yang terjangkau. Untuk perawatan, sapu sebaiknya disimpan dalam keadaan tergantung di tempat kering, dihindarkan dari genangan air, serta dibersihkan sesekali dengan kibasan ringan agar serat tidak cepat patah atau berubah bentuk.</p>
            HTML,
        ],

        'blangkon-soedirman' => [
            'title'    => 'Blangkon Soedirman',
            'slug'     => 'blangkon-soedirman',
            'category' => 'Kerajinan',
            'image'    => 'images/blangkon.png',
            'body'     => <<<HTML
                <p>Blangkon Soedirman adalah tutup kepala tradisional Jawa yang identik dengan bentuk mondolan di belakang, jahitan rapi, dan siluet proporsional. Keberadaan blangkon merekam perjalanan busana pria Jawa, dari lingkungan keraton hingga keseharian masyarakat, sementara varian Soedirman dikenal karena kenyamanan pakai dan tampilan yang tegas namun elegan. Pemilihan kain—seringkali batik atau lurik—menjadi penentu karakter visual sekaligus identitas pemakainya.</p>
                <p>Pembuatan blangkon dimulai dari pengukuran lingkar kepala untuk menentukan pola. Kain dipotong mengikuti bentuk mahkota dan sisi-sisinya, kemudian dijahit teliti agar mengikuti kontur kepala. Bagian mondolan dirangkai dengan isian tipis sehingga terbentuk tonjolan khas yang kuat namun tetap ringan. Setelah itu, perajin melakukan proses setrika dan pemeriksaan detail untuk memastikan tidak ada kerutan atau benang lepas, sehingga blangkon nyaman dipakai dalam waktu lama.</p>
                <p>Dalam penggunaannya, blangkon Soedirman dapat dibuat dalam ukuran standar atau disesuaikan secara personal untuk hasil yang lebih presisi. Perawatan cukup sederhana: simpan di tempat kering, hindari tekanan berlebih pada bagian mondolan, dan bersihkan secara lembut agar struktur kain tetap terjaga. Ragam motif kain yang digunakan memungkinkan blangkon tampil adaptif, baik untuk upacara adat, pertunjukan seni, hingga pemakaian pada acara formal modern.</p>
            HTML,
        ],

        'wayang-suket' => [
            'title'    => 'Wayang Suket',
            'slug'     => 'wayang-suket',
            'category' => 'Kerajinan',
            'image'    => 'images/wayangsuket.png',
            'body'     => <<<HTML
                <p>Wayang suket adalah karya kriya yang memanfaatkan rumput kering sebagai medium untuk membentuk figur-figur pewayangan. Karakternya ringan, ekspresif, dan dekat dengan alam, sehingga sering menjadi media edukasi budaya bagi anak-anak maupun pengantar apresiasi seni pertunjukan. Keunikan wayang suket terletak pada tekstur anyaman dan detail sederhana yang mampu menghadirkan karakter tokoh dengan gaya yang khas.</p>
                <p>Perajin memulai dengan menyeleksi rumput yang cukup panjang dan lentur, lalu mengeringkannya hingga mencapai kekuatan serat yang ideal. Sketsa tokoh disiapkan sebagai panduan proporsi, dilanjutkan proses anyam dan ikat pada bagian kepala, tubuh, serta anggota gerak. Beberapa perajin menambahkan kawat tipis sebagai penguat rangka dan menyematkan aksesori kecil untuk mempertegas identitas tokoh. Hasil akhir menampilkan figur wayang yang komunikatif tanpa meninggalkan kesederhanaan bahan alaminya.</p>
                <p>Keberadaan wayang suket kini meluas dari panggung komunitas hingga ruang pamer dan koleksi dekoratif. Harga produk umumnya bergantung pada ukuran dan kerumitan anyaman. Agar tahan lama, wayang suket sebaiknya disimpan di ruang kering, terhindar dari kelembapan tinggi, dan dibersihkan dengan kuas halus agar serat tidak mudah rontok atau berjamur.</p>
            HTML,
        ],

        'anyaman-bambu' => [
            'title'    => 'Anyaman Bambu',
            'slug'     => 'anyaman-bambu',
            'category' => 'Kerajinan',
            'image'    => 'images/anyamanbambu.png',
            'body'     => <<<HTML
                <p>Anyaman bambu merupakan tradisi kriya yang menghasilkan beragam produk fungsional dan dekoratif seperti besek, tampah, tudung saji, hingga panel interior. Keunggulannya ada pada kekuatan bilah bambu, kelenturan saat dianyam, serta ragam pola yang bisa disesuaikan kebutuhan. Dalam banyak keluarga perajin, kegiatan menganyam menjadi keterampilan lintas generasi yang menopang ekonomi lokal.</p>
                <p>Proses produksi dimulai dari pemilihan bambu yang cukup tua, kemudian dibelah menjadi bilah tipis dan diraut agar tebalnya seragam. Pola anyaman disusun sesuai kebutuhan—mulai dari pola kepang sederhana, serong diagonal yang rapat, hingga kombinasi untuk efek visual. Setelah bentuk dasar tercapai, permukaan dihaluskan dan dapat diberi warna atau pelapis aman pangan jika produk digunakan untuk kebutuhan kuliner. Pengendalian kualitas dilakukan untuk memastikan bilah tidak pecah dan sudut produk rapi.</p>
                <p>Pasar anyaman bambu terbentang dari kebutuhan rumah tangga, UMKM kuliner, hingga proyek interior yang mengejar nuansa alami. Untuk menjaga keawetannya, produk harus dikeringkan setelah terkena air, tidak dijemur berlebihan di bawah terik matahari, dan dihindarkan dari beban berlebih yang dapat mematahkan bilah. Dengan perawatan yang tepat, anyaman bambu dapat bertahan lama sekaligus menjadi aksen estetis di berbagai ruang.</p>
            HTML,
        ],
    ];

    // (Opsional) Halaman daftar
    public function index()
    {
        $posts = array_values($this->data);
        return view('kerajinan-index', compact('posts'));
    }

    public function show(string $slug)
    {
        if (!isset($this->data[$slug])) abort(404);

        $post = $this->data[$slug];

        $related = collect($this->data)
            ->reject(fn($p) => $p['slug'] === $slug)
            ->take(3)
            ->values()
            ->all();

        return view('kerajinan', compact('post', 'related'));
    }
}

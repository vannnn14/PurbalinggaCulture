<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradisiController extends Controller
{
    private array $data = [
        'nyadran' => [
            'title'    => 'Nyadran',
            'slug'     => 'nyadran',
            'category' => 'Tradisi & Upacara Adat',
            'image'    => 'images/nyadran.png',
            'body'     => <<<HTML
                <p><strong>Nyadran</strong> merupakan tradisi ziarah dan doa bersama menjelang Ramadan atau waktu tertentu sesuai adat. Warga membersihkan makam leluhur, berdoa, lalu makan bersama sebagai ungkapan syukur.</p>
                <p>Kegiatan ini mengajarkan nilai kebersamaan dan penghormatan antargenerasi. Kenduri yang digelar mempererat ikatan sosial serta menegaskan pentingnya gotong royong.</p>
                <p>Nyadran juga menjadi sarana edukasi budaya bagi generasi muda untuk menghargai leluhur dan menjaga harmoni sosial. Di Purbalingga, tradisi ini memiliki makna yang dalam sebagai upaya menjaga dan melestarikan ikatan batin dengan leluhur, sekaligus memupuk rasa saling menghormati dalam masyarakat.</p>
                <p>Seiring waktu, Nyadran terus menjadi ajang untuk memperkokoh hubungan antar keluarga, masyarakat, dan bahkan antar desa. Ia juga menjadi momen refleksi spiritual yang mendalam bagi setiap individu yang turut serta dalam tradisi ini.</p>
            HTML,
        ],
        'sedekah-bumi' => [
            'title'    => 'Sedekah Bumi',
            'slug'     => 'sedekah-bumi',
            'category' => 'Tradisi & Upacara Adat',
            'image'    => 'images/sedekahbumi.png',
            'body'     => <<<HTML
                <p><strong>Sedekah Bumi</strong> adalah upacara adat sebagai wujud syukur masyarakat atas hasil panen. Biasanya warga mengarak gunungan hasil bumi, lalu didoakan bersama.</p>
                <p>Acara dilanjutkan dengan hiburan rakyat seperti wayang, kuda lumping, atau gamelan. Gunungan yang diperebutkan melambangkan berkah yang dibagikan untuk semua.</p>
                <p>Sedekah Bumi menekankan pentingnya menjaga keseimbangan dengan alam, merawat lingkungan, dan berbagi rezeki kepada sesama. Di Purbalingga, tradisi ini bukan hanya sekedar perayaan hasil bumi, tetapi juga sebagai simbol kesatuan antara manusia, alam, dan Tuhan yang memberikan berkah melimpah.</p>
                <p>Sedekah Bumi di Purbalingga sering menjadi acara yang sangat dinanti. Masyarakat bersama-sama mengarak gunungan hasil bumi sebagai simbol rasa syukur atas hasil pertanian yang berlimpah. Keharmonisan yang tercipta dalam upacara ini sangat terasa, memperkuat kebersamaan dan persatuan antar warga.</p>
                <p>Tradisi ini bukan hanya soal panen, namun lebih kepada rasa syukur yang mendalam atas berkat yang telah diberikan oleh alam. Setiap gunungan yang diperebutkan mengandung filosofi mendalam tentang berbagi dan menjaga hubungan baik antara manusia dengan alam dan sesama.</p>
            HTML,
        ],
        'ujungan' => [
            'title'    => 'Ujungan',
            'slug'     => 'ujungan',
            'category' => 'Tradisi & Upacara Adat',
            'image'    => 'images/ujangan.png',
            'body'     => <<<HTML
                <p><strong>Ujungan</strong> adalah tradisi adu ketangkasan dengan tongkat rotan, dimainkan oleh dua lelaki. Dulu sebagai syukuran panen, kini lebih sering ditampilkan dalam festival budaya.</p>
                <p>Suasana pertandingan semakin seru dengan iringan kendang dan sorak penonton. Meski terkesan keras, Ujungan dijalankan dengan aturan ketat agar tetap aman.</p>
                <p>Tradisi ini menekankan nilai sportivitas, keberanian, dan pengendalian diri. Ia juga menjadi ruang sosialisasi bagi pemuda untuk belajar disiplin. Bagi masyarakat Purbalingga, Ujungan bukan sekedar olahraga, namun juga merupakan bagian dari ajang mempererat persaudaraan antar warga, serta menjaga kelestarian budaya lokal yang telah ada sejak lama.</p>
                <p>Ujungan di Purbalingga memiliki makna yang lebih dalam. Selain sebagai ajang adu ketangkasan, ia mencerminkan semangat gotong royong, keberanian, serta penghormatan terhadap tradisi lokal yang telah dilestarikan turun-temurun. Saat festival Ujungan digelar, segenap masyarakat turut merasakan semangat kebersamaan yang begitu kental.</p>
            HTML,
        ],
        'tradisi-adat-lainnya' => [
            'title'    => 'Tradisi Adat Lainnya',
            'slug'     => 'tradisi-adat-lainnya',
            'category' => 'Tradisi & Upacara Adat',
            'image'    => 'images/bgsenitradisi.jpg',
            'body'     => <<<HTML
                <p>Kategori <strong>Tradisi Adat Lainnya</strong> mencakup ragam praktik budaya yang masih dijalankan masyarakat, seperti ruwatan kampung, wiwitan, dan mapag toya.</p>
                <p>Setiap tradisi memiliki makna simbolik yang berkaitan dengan doa keselamatan, rasa syukur, dan kebersamaan. Meski berbeda bentuk, semuanya menekankan nilai harmoni dengan alam dan masyarakat.</p>
                <p>Dengan dokumentasi dan dukungan komunitas, tradisi-tradisi ini tetap lestari dan relevan di tengah perubahan zaman. Di Purbalingga, berbagai tradisi adat ini juga berfungsi sebagai sarana untuk menyatukan masyarakat dalam kesederhanaan, sekaligus menghargai nilai-nilai luhur yang telah diwariskan turun-temurun.</p>
                <p>Ragam tradisi di Purbalingga, seperti ruwatan kampung yang diadakan untuk memohon keselamatan desa atau wiwitan yang merupakan persembahan pertama untuk hasil pertanian, tidak hanya menjaga nilai-nilai budaya tetapi juga menjadi bagian dari pembentukan karakter masyarakat yang selalu ingat akan asal-usul dan sejarahnya.</p>
            HTML,
        ],
    ];

    public function index()
    {
        $posts = array_values($this->data);
        return view('tradisi-index', compact('posts'));
    }

    public function show(string $slug)
    {
        if (!isset($this->data[$slug])) abort(404);

        $post = $this->data[$slug];
        $related = collect($this->data)
            ->reject(fn($p) => $p['slug'] === $slug)
            ->take(3)->values()->all();

        return view('tradisi', compact('post', 'related'));
    }
}

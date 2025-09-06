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
                <p>Nyadran juga menjadi sarana edukasi budaya bagi generasi muda untuk menghargai leluhur dan menjaga harmoni sosial.</p>
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
                <p>Sedekah Bumi menekankan pentingnya menjaga keseimbangan dengan alam, merawat lingkungan, dan berbagi rezeki kepada sesama.</p>
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
                <p>Tradisi ini menekankan nilai sportivitas, keberanian, dan pengendalian diri. Ia juga menjadi ruang sosialisasi bagi pemuda untuk belajar disiplin.</p>
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
                <p>Dengan dokumentasi dan dukungan komunitas, tradisi-tradisi ini tetap lestari dan relevan di tengah perubahan zaman.</p>
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniController extends Controller
{
    private array $data = [
        'tari-lengger' => [
            'title'    => 'Tari Lengger',
            'slug'     => 'tari-lengger',
            'category' => 'Seni',
            'image'    => 'images/tarilengger.jpg',
            'body'     => <<<HTML
                <p><strong>Tari Lengger</strong> adalah seni tari rakyat khas Banyumasan yang ditarikan dengan gerak lincah, irama dinamis, serta ekspresi riang gembira. Pertunjukan Lengger sering hadir pada pesta rakyat, hajatan, hingga panggung festival budaya.</p>
                <p>Lengger diiringi gamelan dengan kendang sebagai pengatur tempo. Saweran penonton menjadi bagian dari interaksi penari dan masyarakat. Di balik keriangan, Lengger menyimpan filosofi keseimbangan hidup dan penghormatan pada bumi.</p>
                <p>Saat ini banyak sanggar melatih generasi muda untuk menjaga keberlangsungan Tari Lengger, baik sebagai hiburan maupun media edukasi.</p>
                <p>Selain hiburan, Tari Lengger juga berfungsi sebagai sarana sosial. Di desa-desa, pertunjukan Lengger kerap menjadi ajang silaturahmi warga, mempererat ikatan sosial, dan memperkuat rasa kebersamaan. Tradisi ini menjadi simbol kebudayaan Banyumasan yang terus berkembang seiring zaman.</p>
                <p>Pemerintah daerah maupun komunitas seni kini gencar mengangkat Tari Lengger dalam festival dan promosi pariwisata. Upaya ini diharapkan dapat memperkenalkan tarian rakyat kepada generasi muda sekaligus wisatawan dari berbagai daerah, sehingga Tari Lengger tetap lestari dan dihargai sebagai warisan budaya.</p>
            HTML,
        ],
        'kuda-lumping' => [
            'title'    => 'Kuda Lumping',
            'slug'     => 'kuda-lumping',
            'category' => 'Seni',
            'image'    => 'images/kudalumping.png',
            'body'     => <<<HTML
                <p><strong>Kuda Lumping</strong> atau jaran kepang adalah tarian rakyat yang menggambarkan prajurit menunggang kuda. Para penari menari dengan kuda anyaman bambu sambil diiringi musik gamelan yang menghentak.</p>
                <p>Gerakannya energik, sering diwarnai atraksi magis atau trance pada beberapa kelompok. Namun kini banyak ditata ulang menjadi pertunjukan aman untuk pendidikan dan pariwisata.</p>
                <p>Kuda Lumping mencerminkan keberanian, kekompakan, dan semangat kolektif masyarakat desa.</p>
                <p>Tradisi ini memiliki variasi nama dan gaya di berbagai daerah, seperti Jathilan di Jawa Tengah dan Ebeg di Banyumas. Meskipun berbeda penampilan, esensinya sama: menampilkan semangat gotong royong dan kekuatan komunitas.</p>
                <p>Kuda Lumping juga sering dijadikan materi penelitian budaya, karena pertunjukan ini merefleksikan perpaduan antara seni tari, musik, ritual, dan kehidupan sosial. Perubahan zaman membuat seni ini bertransformasi, tetapi nilai-nilai asli tentang keberanian dan kebersamaan tetap dipertahankan.</p>
            HTML,
        ],
        'tradisi-begalan' => [
            'title'    => 'Tradisi Begalan',
            'slug'     => 'tradisi-begalan',
            'category' => 'Seni',
            'image'    => 'images/begalan.png',
            'body'     => <<<HTML
                <p><strong>Tradisi Begalan</strong> adalah seni tutur khas Banyumasan yang biasanya digelar saat acara pernikahan. Dua orang pelaku memainkan peran "perampok" dan "korban" dalam bentuk dialog humoris dan penuh sindiran.</p>
                <p>Dalam setiap adegan, Begalan menyelipkan pesan moral bagi pengantin dan masyarakat, misalnya tentang kesetiaan, kerukunan, dan kerja sama dalam rumah tangga.</p>
                <p>Bahasa Banyumasan yang digunakan membuat pertunjukan terasa akrab dan mudah dipahami penonton. Tradisi ini menjadi identitas budaya lokal yang terus dijaga kelestariannya.</p>
                <p>Selain hiburan, Begalan juga berfungsi sebagai pendidikan informal. Simbol-simbol peralatan dapur yang ditampilkan mengandung nasihat tentang kehidupan rumah tangga, misalnya wajan untuk ketekunan dan sendok sayur untuk berbagi rezeki. Nilai-nilai tersebut ditanamkan secara halus melalui humor.</p>
                <p>Perkembangan zaman tidak mengurangi pesona Begalan. Banyak acara resmi, festival budaya, hingga promosi pariwisata menjadikan Begalan sebagai daya tarik. Dokumentasi digital dan pementasan ulang juga membuat seni ini lebih dikenal generasi muda.</p>
            HTML,
        ],
    ];

    public function index()
    {
        $posts = array_values($this->data);
        return view('seni-index', compact('posts'));
    }

    public function show(string $slug)
    {
        if (!isset($this->data[$slug])) abort(404);

        $post = $this->data[$slug];
        $related = collect($this->data)
            ->reject(fn($p) => $p['slug'] === $slug)
            ->take(3)->values()->all();

        return view('seni', compact('post', 'related'));
    }
}

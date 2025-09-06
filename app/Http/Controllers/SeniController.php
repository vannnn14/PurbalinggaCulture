<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniController extends Controller
{
    private array $data = [
        'tari-lengger' => [
            'title'    => 'Tari Gidro',
            'slug'     => 'tari-lengger',
            'category' => 'Seni',
            'image'    => 'images/tarilengger.jpg',
            'body'     => <<<HTML
                <p><strong>Tari Gidro</strong><p>Kabupaten Purbalingga (Jateng) meluncurkan tarian terbarunya berjudul Tari "Gidro". Di Purbalingga, tari lengger Banyumasan yang diciptakan oleh pemilik grup calung Wisanggeni, Susiati, di pentaskan pada acara lepas sambut kapolres Purbalingga di Pendopo Dipokusumo, Selasa (7/2). Tarian ini juga sempat dipertontonkan secara kolosal pada peringatan hari jadi Kabupaten Pemalang, Kamis (26/1) silam</p>
                <p>"Gidro dalam bahasa lokal banyumasan berarti berjingkrak-jingkrak. Lebih cenderung diartikan gerak meloncat-loncat untuk mengungkapkan rasa senang," kata Susiati usai pementasan di Pendopo Dipokusumo.</p>
                <p>Tari Gidro, lanjutnya, merupakan sebuah tari yang berisi ungkapan kegembiraan sekelompok masyarakat Purbalingga. Meski gerakannya dinamis sebagaimana jenis tarian lenggeran lainnya, namun gerak para penari yang di tunjukan, melambangkan rasa syukur atas rizki yang melimpah sehingga dapat mencukupi kebutuhannya sehari-hari</p>
                <p>"Dengan tarian ini, masyarakat Purbalingga berharap hidupnya senantiasa dalam kemakmuran sekaligus selaludamai hatinya," jelasnya.
                    Dan Tari Gidro merupakan tarian asli asal Purbalingga yang memiliki makna indah, yaitu masyarakat Purbalingga yang berharap hidupnya selalu dikelilingi oleh kemakmuran.</p>
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

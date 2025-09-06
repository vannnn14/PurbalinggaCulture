<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $tokoh = $request->query('tokoh', 'soedirman');
        
        // Data semua tokoh dengan biografi lengkap terstruktur
        $tokohData = [
            'soedirman' => [
                'nama' => 'Jenderal Soedirman',
                'gelar' => 'Panglima Besar Tentara Nasional Indonesia pertama',
                'kategori' => 'Pahlawan Nasional',
                'gambar' => '/images/soedirman.jpeg',
                'lahir' => '24 Januari 1916, Purbalingga',
                'wafat' => '29 Januari 1950, Magelang',
                'dikenal' => 'Panglima Besar TNI, Pahlawan Nasional',
                'penghargaan' => 'Pahlawan Nasional, Bintang RI',
                'biografi_terstruktur' => [
                    [
                        'judul' => 'Biografi',
                        'tipe' => 'paragraf',
                        'konten' => 'Jenderal Soedirman adalah seorang perwira tinggi Indonesia pada masa Revolusi Nasional Indonesia. Sebagai panglima besar Tentara Nasional Indonesia pertama, ia adalah sosok yang dihormati di Indonesia. Terlahir dari pasangan rakyat biasa di Purbalingga, Hindia Belanda, Soedirman diadopsi oleh pamannya yang seorang priyayi.'
                    ],
                    [
                        'judul' => 'Masa Kecil dan Pendidikan',
                        'tipe' => 'subjudul',
                        'konten' => 'Soedirman bersekolah di sekolah dasar pribumi dan kemudian melanjutkan ke sekolah menengah yang dikelola oleh organisasi Islam Muhammadiyah. Saat di sekolah menengah, Soedirman mulai menunjukkan kemampuannya dalam kepemimpinan dan berorganisasi, dan dihormati oleh masyarakat karena ketaatannya pada Islam.'
                    ],
                    [
                        'judul' => 'Peran dalam Revolusi Nasional',
                        'tipe' => 'subjudul',
                        'konten' => 'Setelah Jepang menduduki Hindia Belanda pada tahun 1942, Soedirman bekerja sebagai seorang guru dan kemudian menjadi kepala sekolah di sekolah dasar Muhammadiyah. Setelah Jepang mendirikan tentara Pembela Tanah Air (PETA), Soedirman bergabung dan menjadi komandan batalion di Banyumas.'
                    ],
                    [
                        'judul' => 'Perang Gerilya',
                        'tipe' => 'subjudul',
                        'konten' => 'Selama Agresi Militer Belanda II, Soedirman memimpin pasukan Indonesia dalam perang gerilya di Jawa. Meskipun sedang menderita tuberkulosis, ia tetap memimpin perjuangan dan terus mengobarkan semangat perlawanan terhadap Belanda. Perang gerilya ini berlangsung selama tujuh bulan dan mencakup jarak sekitar 1.000 kilometer di daerah pedalaman Jawa.'
                    ],
                    [
                        'judul' => 'Warisan',
                        'tipe' => 'subjudul',
                        'konten' => 'Soedirman wafat pada tanggal 29 Januari 1950 di Magelang, Jawa Tengah. Ia dimakamkan di Taman Makam Pahlawan Semaki, Yogyakarta. Atas jasa-jasanya, pemerintah Indonesia menganugerahi Soedirman sebagai Pahlawan Nasional Indonesia. Namanya diabadikan sebagai nama jalan, universitas, museum, dan monumen di berbagai tempat di Indonesia.'
                    ]
                ]
            ],
            'soengkono' => [
                'nama' => 'Mayjen Soengkono',
                'gelar' => 'Panglima TNI dan Pahlawan Nasional',
                'kategori' => 'Pahlawan Nasional',
                'gambar' => '/images/soengkono1.jpg',
                'lahir' => '15 Agustus 1915, Purbalingga',
                'wafat' => '10 November 1979, Jakarta',
                'dikenal' => 'Panglima TNI, Pahlawan Nasional',
                'penghargaan' => 'Pahlawan Nasional, Bintang Mahaputera',
                'biografi_terstruktur' => [
                    [
                        'judul' => 'Biografi',
                        'tipe' => 'paragraf',
                        'konten' => 'Mayor Jenderal TNI Soengkono adalah seorang perwira tinggi TNI dan Pahlawan Nasional Indonesia. Ia dikenal sebagai salah satu tokoh penting dalam perjuangan kemerdekaan Indonesia dan berasal dari Purbalingga.'
                    ],
                    [
                        'judul' => 'Awal Karier Militer',
                        'tipe' => 'subjudul',
                        'konten' => 'Soengkono memulai karier militernya dengan masuk pendidikan militer pada masa pendudukan Jepang. Setelah proklamasi kemerdekaan, ia bergabung dengan Tentara Keamanan Rakyat (TKR) yang menjadi cikal bakal TNI.'
                    ],
                    [
                        'judul' => 'Perjuangan Revolusi',
                        'tipe' => 'subjudul',
                        'konten' => 'Selama revolusi fisik, Soengkono terlibat dalam berbagai pertempuran melawan tentara Belanda. Kepemimpinan dan strategi militernya yang brilian membuatnya cepat naik pangkat dan dihormati oleh rekan-rekan sejawatnya.'
                    ],
                    [
                        'judul' => 'Karier Pasca Kemerdekaan',
                        'tipe' => 'subjudul',
                        'konten' => 'Setelah pengakuan kedaulatan, Soengkono terus mengabdi di militer dan memegang berbagai posisi penting. Ia dikenal sebagai perwira yang disiplin, tegas, dan dedikasinya terhadap negara tidak diragukan lagi.'
                    ],
                    [
                        'judul' => 'Penghargaan dan Warisan',
                        'tipe' => 'subjudul',
                        'konten' => 'Atas jasa-jasanya dalam memperjuangkan dan mempertahankan kemerdekaan Indonesia, pemerintah menganugerahi Soengkono gelar Pahlawan Nasional. Namanya diabadikan di beberapa tempat di Indonesia sebagai bentuk penghormatan.'
                    ]
                ]
            ],
           'sukatani' => [
            'nama' =>        'Sukatani',
            'gelar' =>       'Duo post-punk dari Purbalingga',
            'kategori' =>    'Musisi / Band Indie',
            'gambar' =>      '/images/sukatani1.png',
            'lahir' =>       'Purbalingga, Jawa Tengah',
            'dikenal' =>     'Musik post-punk, kritik sosial & agraria',
            'biografi_terstruktur' => [
                [
                    'judul' => 'Biografi',
                    'tipe'  => 'paragraf',
                    'konten'=> 'Sukatani adalah duo post-punk dari Purbalingga yang dibentuk Oktober 2022. Beranggotakan Alectroguy (gitar/produksi) dan Twister Angel (vokal), mereka dikenal lewat lirik satir yang menyoroti agraria, konsumerisme, dan ketimpangan sosial.'
                ],
                [
                    'judul' => 'Gaya & Identitas',
                    'tipe'  => 'subjudul',
                    'konten'=> 'Mereka tampil dengan balaclava dan kerap membagikan sayuran saat perform sebagai simbol solidaritas petani. Musiknya memadukan post-punk, new wave, hingga synth-pop.'
                ],
                [
                    'judul' => 'Kontroversi Lagu',
                    'tipe'  => 'subjudul',
                    'konten'=> 'Single "Bayar Bayar Bayar" sempat menuai kontroversi karena lirik satir terhadap pungutan. Lagu itu ditarik dari platform, tapi justru makin memperkuat dukungan publik terhadap pesan sosial mereka.'
                ],
                [
                    'judul' => 'Diskografi',
                    'tipe'  => 'subjudul',
                    'konten'=> 'Album perdana "Gelap Gempita" (2023) berisi lagu-lagu seperti "Sukatani", "Alas Wirasaba", dan "Realitas Konsumerisme".'
                ],
                [
                    'judul' => 'Warisan & Pengaruh',
                    'tipe'  => 'subjudul',
                    'konten'=> 'Sukatani memberi warna baru bagi musik independen Jawa Tengah. Mereka membawa isu agraria dan perlawanan rakyat kecil ke ruang festival nasional.'
                ]
            ]
        ],
         'indro' => [
                'nama' => 'Indrodjojo Kusumonegoro',
                'gelar' => 'Artis dan Komedian Legendaris',
                'kategori' => 'Artis & Budayawan',
                'gambar' => '/images/indro.jpeg',
                'lahir' => '17 Maret 1958, Purbalingga',
                'wafat' => '-',
                'dikenal' => 'Artis, Komedian Legendaris',
                'penghargaan' => 'Artis Legendaris Indonesia',
                'biografi_terstruktur' => [
                    [
                        'judul' => 'Biografi',
                        'tipe' => 'paragraf',
                        'konten' => 'Indrodjojo Kusumonegoro, yang lebih dikenal dengan nama Indro Warkop, adalah seorang aktor dan pelawak legendaris Indonesia. Ia terkenal sebagai anggota grup komedi Warkop bersama Dono dan Kasino yang sangat populer di Indonesia.'
                    ],
                    [
                        'judul' => 'Awal Karier di Dunia Hiburan',
                        'tipe' => 'subjudul',
                        'konten' => 'Indro memulai karier di dunia hiburan pada akhir tahun 1970-an. Bersama Dono dan Kasino, mereka membentuk grup komedi Warkop yang sangat populer di Indonesia selama beberapa dekade melalui berbagai film dan lawakan.'
                    ],
                    [
                        'judul' => 'Karya dan Pengabdian',
                        'tipe' => 'subjudul',
                        'konten' => 'Selain tampil dalam berbagai film dan sinetron, Indro juga dikenal sebagai presenter dan pemain teater. Gaya komedinya yang khas dan kemampuan aktingnya yang natural membuatnya dicintai oleh berbagai kalangan penonton dari berbagai generasi.'
                    ],
                    [
                        'judul' => 'Keterikatan dengan Purbalingga',
                        'tipe' => 'subjudul',
                        'konten' => 'Meskipun telah mencapai kesuksesan di dunia hiburan, Indro tidak melupakan asal-usulnya. Ia sering kembali ke Purbalingga dan terlibat dalam berbagai kegiatan sosial dan budaya di kampung halamannya.'
                    ],
                    [
                        'judul' => 'Warisan dan Pengaruh',
                        'tipe' => 'subjudul',
                        'konten' => 'Hingga kini, Indro tetap aktif di dunia hiburan dan menjadi salah satu ikon komedi Indonesia yang paling dihormati dan dikagumi. Karya-karyanya bersama Warkop tetap dikenang sebagai bagian penting dari sejarah hiburan Indonesia.'
                    ]
                ]
            ] 
        ];
        
        // Jika parameter tidak valid, default ke soedirman
        if (!array_key_exists($tokoh, $tokohData)) {
            $tokoh = 'soedirman';
        }
        
        $data = $tokohData[$tokoh];
        $data['tokohKey'] = $tokoh;
        $data['tokohData'] = $tokohData;
        
        return view('beritatokoh', $data);
    }
}
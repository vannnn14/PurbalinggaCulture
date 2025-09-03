<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami - PurbaCulture</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-[var(--brand-cream)] text-[var(--brand-dark)]">

    <!-- Navbar -->
    @include('navbar')

    <!-- High Values Section -->
    <section class="bg-[var(--brand-dark)] text-white py-12 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold mb-4">HIGH VALUES</h1>
            <p class="text-lg text-[rgba(255,255,255,0.9)] mb-12">
                Kesuksesan kami bukan hanya berasal dari kualitas pekerjaan kami. Ini tentang sikap kami, pendekatan kami, dan bagaimana kami memperlakukan komunitas kami.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-[var(--accent)] text-4xl mb-4">01</div>
                    <p class="text-xl font-semibold">Focus</p>
                    <p class="text-lg">Kami berkomitmen 100% untuk membuat semua proyek kami menjadi yang terbaik, tidak peduli seberapa besar tantangannya.</p>
                </div>
                <div class="text-center">
                    <div class="text-[var(--accent)] text-4xl mb-4">02</div>
                    <p class="text-xl font-semibold">Passion</p>
                    <p class="text-lg">Keinginan kami untuk menghasilkan karya terbaik menjadi bahan bakar yang memungkinkan kami menangani setiap proyek dengan semangat dan energi baru.</p>
                </div>
                <div class="text-center">
                    <div class="text-[var(--accent)] text-4xl mb-4">03</div>
                    <p class="text-xl font-semibold">Empathy</p>
                    <p class="text-lg">Kami mendengarkan dengan seksama untuk memahami bisnis dan kebutuhan Anda sambil berbagi pengetahuan dan pengalaman kami.</p>
                </div>
                <div class="text-center">
                    <div class="text-[var(--accent)] text-4xl mb-4">04</div>
                    <p class="text-xl font-semibold">Teamwork</p>
                    <p class="text-lg">Kami bersatu dengan Anda untuk mencapai hasil terbaik dari proyek Anda – anggap kami sebagai anggota tambahan dalam tim Anda dengan keterampilan yang Anda butuhkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet The Team Section -->
    <section class="py-12 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-6">KENALI TIM KAMI</h2>
            <p class="text-lg text-[rgba(0,0,0,0.7)] mb-12">
                Kenali individu-individu yang bersemangat di balik misi kami.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Member 1 -->
                <div class="text-center">
                    <div class="w-40 h-40 rounded-full overflow-hidden mx-auto mb-6">
                        <img src="{{ asset('images/member1.jpg') }}" alt="Phil Shackleton" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Phil Shackleton</h3>
                    <p class="text-lg text-[var(--green)] mb-4">Direktur Digital</p>
                    <p class="text-lg">Phil adalah salah satu pendiri PurbaCulture dan menjadi lebih teknis seiring berjalannya waktu. Seorang lulusan desain grafis yang memimpin pengembangan solusi digital kami. Ahli dalam aksesibilitas web dan desain berbasis standar.</p>
                </div>

                <!-- Member 2 -->
                <div class="text-center">
                    <div class="w-40 h-40 rounded-full overflow-hidden mx-auto mb-6">
                        <img src="{{ asset('images/member2.jpg') }}" alt="Mike Danford" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mike Danford</h3>
                    <p class="text-lg text-[var(--green)] mb-4">Direktur Kreatif</p>
                    <p class="text-lg">Mike mengawasi seluruh output kreatif PurbaCulture dan bekerja sama dengan klien kami untuk memastikan kebutuhan mereka terpenuhi dan desain yang kami berikan berkualitas tinggi.</p>
                </div>

                <!-- Member 3 -->
                <div class="text-center">
                    <div class="w-40 h-40 rounded-full overflow-hidden mx-auto mb-6">
                        <img src="{{ asset('images/member3.jpg') }}" alt="Aaron Thomas" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Aaron Thomas</h3>
                    <p class="text-lg text-[var(--green)] mb-4">Peneliti Konten</p>
                    <p class="text-lg">Aaron bertanggung jawab untuk meneliti dan melestarikan cerita lokal agar konten kami tetap relevan dengan budaya dan audiens kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

</body>

</html>

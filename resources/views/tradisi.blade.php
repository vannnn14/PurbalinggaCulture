<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $post['title'] }} — Purbalingga Culture</title>
  @vite('resources/css/app.css')
</head>
<body class="antialiased text-slate-800 bg-[#FAF4E1]">
  @include('navbar')

  <main class="py-10">
    <div class="max-w-3xl mx-auto px-4 lg:px-6">
      <p class="text-xs uppercase tracking-wide text-[#8B5E3C] mb-1">{{ $post['category'] }}</p>
      <h1 class="text-3xl md:text-4xl font-extrabold text-[#1f2937] leading-tight">{{ $post['title'] }}</h1>

      <div class="mt-6 rounded-xl overflow-hidden shadow border border-[#8B5E3C]">
        <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-auto object-cover">
      </div>

      <article class="mt-6 text-justify leading-relaxed text-[15px] text-gray-800 space-y-4">
        {!! $post['body'] !!}
      </article>

      <div class="mt-12">
        <h2 class="text-lg font-semibold text-[#5C3A21] mb-4">Baca juga</h2>
        <div class="grid sm:grid-cols-3 gap-5">
          @foreach ($related as $r)
            <a href="{{ route('tradisi.show', $r['slug']) }}"
               class="group rounded-xl overflow-hidden border border-[#8B5E3C] bg-white hover:shadow-lg transition">
              <div class="aspect-[4/3]">
                <img src="{{ asset($r['image']) }}" alt="{{ $r['title'] }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition">
              </div>
              <div class="p-3 text-left">
                <span class="text-[10px] uppercase tracking-wide text-[#8B5E3C]">{{ $r['category'] }}</span>
                <h3 class="text-sm font-semibold text-[#5C3A21] mt-1 line-clamp-2">{{ $r['title'] }}</h3>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </main>

  @include('footer')
</body>
</html>

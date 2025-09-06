<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $post['title'] }} — Purbalingga Culture</title>
  @vite('resources/css/app.css')
</head>
<body class="antialiased text-slate-800">
  @include('navbar')

  <main class="bg-[#FAF4E1]">
    <div class="max-w-3xl mx-auto px-4 lg:px-6 py-10">
      <p class="text-[11px] uppercase tracking-wide text-[#8B5E3C]">{{ $post['category'] }}</p>
      <h1 class="text-2xl md:text-3xl font-bold text-[#5C3A21]">{{ $post['title'] }}</h1>

      <div class="mt-5 rounded-xl overflow-hidden border border-[#8B5E3C] shadow">
  <div class="aspect-[16/9] w-full">
    <img src="{{ asset($post['image']) }}" 
         alt="{{ $post['title'] }}" 
         class="w-full h-full object-cover">
  </div>
</div>

      <article class="prose prose-slate max-w-none mt-6 leading-relaxed">
        {!! $post['body'] !!}
      </article>

      {{-- Baca Juga --}}
      <div class="mt-12">
        <h2 class="text-lg font-semibold text-[#5C3A21] mb-4">Baca juga</h2>
        <div class="grid sm:grid-cols-3 gap-5">
          @foreach ($related as $r)
            <a href="{{ route('kuliner.show', $r['slug']) }}"
               class="group rounded-xl overflow-hidden border border-[#8B5E3C] bg-white hover:shadow-lg transition">
              <div class="aspect-[4/3]">
                <img src="{{ asset($r['image']) }}" alt="{{ $r['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition">
              </div>
              <div class="p-3">
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

<section id='tentang' class='bg-slate-100 py-20 dark:bg-navy-soft'>
  <div class='wrap'>
    <h2 class='section-title'>Tentang Saya</h2>
    <div class='grid gap-8 md:grid-cols-[1.3fr_1fr]'>
      <div class='space-y-4'>
        @foreach (config('portfolio.bio') as $i => $paragraph)
          <p class='{{ $i ? 'text-slate-600 dark:text-slate-300' : '' }}'>{{ $paragraph }}</p>
        @endforeach
      </div>

      <div class='grid grid-cols-2 gap-4'>
        @foreach (config('portfolio.stats') as [$value, $label])
          <div class='card'>
            <b class='block font-heading text-xl text-brand dark:text-brand-light'>{{ $value }}</b>
            <span class='text-sm text-slate-600 dark:text-slate-300'>{{ $label }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
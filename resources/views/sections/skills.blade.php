<section id='keahlian' class='py-20'>
  <div class='wrap'>
    <h2 class='section-title'>Keahlian</h2>
    <p class='section-sub'>Teknologi dan alat yang saya pakai untuk membangun website.</p>

    <div class='grid gap-5 md:grid-cols-3'>
      @foreach (config('portfolio.skills') as $group => $items)
        <div class='card'>
          <h3 class='mb-4 font-heading text-lg font-semibold'>{{ $group }}</h3>
          <ul class='grid grid-cols-2 gap-3'>
            @foreach ($items as $skill)
              <li class='flex items-center gap-2.5 rounded-xl border border-slate-200 bg-slate-100 px-3 py-2 text-sm dark:border-slate-600 dark:bg-navy'>
                <img src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill[1] }}/{{ $skill[1] }}-original.svg' alt='' width='24' height='24' loading='lazy' class='size-6 {{ ($skill[2] ?? false) ? 'dark:invert' : '' }}'>
                <span>{{ $skill[0] }}</span>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </div>
</section>
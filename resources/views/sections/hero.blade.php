<section id='beranda' class='py-16 md:py-24'>
  <div class='wrap grid items-center gap-10 md:grid-cols-[1.3fr_1fr]'>
    <div>
      <p>Halo, saya</p>
      <h1 class='my-2 font-heading text-4xl font-bold sm:text-5xl md:text-6xl'>{{ config('portfolio.name') }}</h1>
      <p class='min-h-8 font-heading text-xl font-semibold text-brand dark:text-brand-light'><span id='typed' data-roles='{{ json_encode(config('portfolio.roles')) }}'></span><span class='animate-pulse'>|</span></p>
      <p class='mt-3 max-w-md font-medium'>{{ config('portfolio.tagline') }}</p>
      <p class='mb-6 mt-2 max-w-md text-slate-600 dark:text-slate-300'>{{ config('portfolio.bio_short') }}</p>

      <div class='mb-6 flex flex-wrap gap-3'>
        <a href='{{ asset(config('portfolio.cv')) }}' download class='btn btn-primary active:scale-95'>Download CV</a>
        <a href='#kontak' class='btn btn-ghost active:scale-95'>Kontak Saya</a>
      </div>

      <div class='flex gap-3'>
        <a href='{{ config('portfolio.github') }}' target='_blank' rel='noopener' class='icon-btn' aria-label='GitHub'><svg class='ico'><use href='#i-gh'/></svg></a>
        <a href='{{ config('portfolio.linkedin') }}' target='_blank' rel='noopener' class='icon-btn' aria-label='LinkedIn'><svg class='ico'><use href='#i-in'/></svg></a>
        <a href='mailto:{{ config('portfolio.email') }}' class='icon-btn' aria-label='Email'><svg class='ico'><use href='#i-mail'/></svg></a>
      </div>
    </div>

    @if (config('portfolio.photo'))
      <img src='{{ asset('img/' . config('portfolio.photo')) }}' alt='Foto {{ config('portfolio.name') }}' class='mx-auto aspect-square w-60 rounded-full object-cover object-top ring-8 ring-slate-100 dark:ring-navy-soft'>
    @else
      <div class='mx-auto grid aspect-square w-60 place-items-center rounded-full bg-brand font-heading text-7xl font-bold text-white ring-8 ring-slate-100 dark:ring-navy-soft' role='img' aria-label='Avatar inisial {{ config('portfolio.name') }}'>{{ config('portfolio.initials') }}</div>
    @endif
  </div>
</section>
<section id='sertifikat' class='bg-sky-50 pb-20 dark:bg-navy-soft'>
  <div class='wrap'>
    <h2 class='section-title mb-8'>Sertifikat &amp; penghargaan</h2>

    @if (count(config('portfolio.certificates')))
      <div class='grid gap-5 md:grid-cols-3'>
        @foreach (config('portfolio.certificates') as [$title, $issuer, $year])
  <div class='card'>
    <h3 class='font-heading font-semibold'>{{ $title }}</h3>
    <p class='text-sm text-slate-600 dark:text-slate-300'>{{ $issuer }}</p>
    <p class='mt-1 text-sm font-medium text-brand dark:text-brand-light'>{{ $year }}</p>
  </div>
@endforeach
      </div>
    @else
      <div class='grid min-h-52 place-items-center rounded-3xl border border-dashed border-sky-200 bg-white/70 px-6 py-16 text-center font-heading font-medium text-slate-600 dark:border-slate-600 dark:bg-navy-card/60 dark:text-slate-300'>
        {{ config('portfolio.certificates_empty') }}
      </div>
    @endif
  </div>
</section>

<section id='testimoni' class='py-20'>
  <div class='wrap'>
    <h2 class='section-title'>Testimoni</h2>
    <div class='mt-8 grid gap-5 md:grid-cols-3'>
      @foreach (config('portfolio.testimonials') as [$quote, $name, $role])
        <figure class='card'>
          <blockquote class='mb-4'>{{ $quote }}</blockquote>
          <figcaption><b class='block'>{{ $name }}</b><span class='text-sm text-slate-600 dark:text-slate-300'>{{ $role }}</span></figcaption>
        </figure>
      @endforeach
    </div>
  </div>
</section>
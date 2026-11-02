<section id='pengalaman' class='bg-sky-50 py-20 dark:bg-navy-soft'>
  <div class='wrap'>
    <h2 class='section-title mb-10'>Pengalaman &amp; pendidikan</h2>
    <div class='grid gap-12 md:grid-cols-2'>
      <div>
        <h3 class='mb-6 font-heading text-xl font-medium text-sky-600 dark:text-sky-400'>Pendidikan</h3>
        @include('partials.timeline', ['items' => config('portfolio.education')])
      </div>
      <div>
        <h3 class='mb-6 font-heading text-xl font-medium text-sky-600 dark:text-sky-400'>Pengalaman</h3>
        @include('partials.timeline', ['items' => config('portfolio.experience')])
      </div>
    </div>
  </div>
</section>
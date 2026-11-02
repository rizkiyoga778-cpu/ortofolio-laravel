<section id='proyek' class='bg-slate-100 py-20 dark:bg-navy-soft'>
  <div class='wrap'>
    <h2 class='section-title'>Proyek</h2>
    <p class='section-sub'>Beberapa karya yang saya kerjakan.</p>

    <div class='mb-7 flex flex-wrap gap-2' role='group' aria-label='Filter proyek'>
      <button data-f='all' aria-pressed='true' class='filter'>Semua</button>
      @foreach ($categories as $category)
        <button data-f='{{ $category }}' aria-pressed='false' class='filter'>{{ ucfirst($category) }}</button>
      @endforeach
    </div>

    <div class='grid gap-6 sm:grid-cols-2 lg:grid-cols-3'>
      @forelse ($projects as $project)
        <article data-c='{{ $project->category }}' class='card overflow-hidden p-0 transition hover:-translate-y-1'>
          <div class='flex h-full flex-col'>
            @if ($project->image)
              <img src='{{ asset('img/projects/' . $project->image) }}' alt='Tampilan proyek {{ $project->title }}' class='aspect-video w-full object-cover' loading='lazy'>
            @else
              <div class='grid aspect-video place-items-center bg-linear-to-br from-brand to-blue-900 text-white'><svg class='ico size-14'><use href='#i-{{ $project->icon }}'/></svg></div>
            @endif

            <div class='flex flex-1 flex-col gap-3 p-5'>
              <h3 class='font-heading text-lg font-semibold'>{{ $project->title }}</h3>
              <p class='line-clamp-3 text-sm text-slate-600 dark:text-slate-300'>{{ $project->description }}</p>
              <div class='flex flex-wrap gap-1.5'>
                @foreach ($project->stack ?? [] as $tech)<span class='badge px-2.5 py-0.5 text-xs'>#{{ $tech }}</span>@endforeach
              </div>
              <div class='mt-auto flex gap-3 pt-1'>
                @foreach ([['Demo', $project->demo_url], ['Repository', $project->source_url]] as [$label, $url])
                  @if ($url)
                    <a href='{{ $url }}' target='_blank' rel='noopener' class='btn btn-ghost px-4 py-1.5 text-sm active:scale-95'>{{ $label }}</a>
                  @else
                    <span class='btn btn-ghost pointer-events-none px-4 py-1.5 text-sm opacity-40' aria-disabled='true'>{{ $label }}</span>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </article>
      @empty
        <p class='text-slate-600 dark:text-slate-300'>Belum ada proyek.</p>
      @endforelse
    </div>
  </div>
</section>
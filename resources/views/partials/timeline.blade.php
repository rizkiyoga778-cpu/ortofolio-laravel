<div class='space-y-6 border-l-2 border-slate-200 pl-6 dark:border-slate-700'>
  @foreach ($items as [$period, $title, $place, $points])
    <div class='relative'>
      <span class='absolute -left-[31px] top-2 size-3 rounded-full bg-brand ring-4 ring-white dark:ring-navy'></span>
      <small class='font-semibold text-brand dark:text-brand-light'>{{ $period }}</small>
      <h4 class='font-heading font-semibold'>{{ $title }}</h4>
      <p class='text-sm font-medium text-slate-700 dark:text-slate-200'>{{ $place }}</p>
      @if ($points)
        <ul class='mt-2 list-disc space-y-1 pl-5 text-sm text-slate-600 dark:text-slate-300'>
          @foreach ($points as $point)<li>{{ $point }}</li>@endforeach
        </ul>
      @endif
    </div>
  @endforeach
</div>
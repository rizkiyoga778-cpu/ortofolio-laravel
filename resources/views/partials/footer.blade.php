<footer class='border-t border-slate-200 py-8 text-sm text-slate-600 dark:border-slate-700 dark:text-slate-300'>
  <div class='wrap grid items-center gap-5 md:grid-cols-3'>
    <span>&copy; {{ date('Y') }} {{ config('portfolio.name') }}. Semua hak dilindungi.</span>

    <nav aria-label='Tautan cepat' class='flex flex-wrap gap-x-5 gap-y-2 md:justify-center'>
      @foreach (['beranda' => 'Beranda', 'tentang' => 'Tentang', 'keahlian' => 'Keahlian', 'proyek' => 'Proyek', 'pengalaman' => 'Pengalaman', 'kontak' => 'Kontak'] as $id => $label)
        <a href='#{{ $id }}' class='hover:text-brand dark:hover:text-brand-light'>{{ $label }}</a>
      @endforeach
    </nav>

    <a href='#beranda' class='btn btn-ghost px-4 py-2 md:justify-self-end'>Kembali ke atas</a>
  </div>
</footer>
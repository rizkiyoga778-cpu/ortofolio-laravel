<header class='sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur dark:border-slate-700 dark:bg-navy/90'>
  <nav class='wrap flex h-16 items-center justify-between' aria-label='Navigasi utama'>
    <a href='#beranda' class='font-heading text-lg font-bold'>{{ strtok(config('portfolio.name'), ' ') }}<span class='text-brand'>.</span>dev</a>

    <div id='menu' class='hidden absolute inset-x-0 top-full flex-col border-b border-slate-200 bg-white px-5 py-3 dark:border-slate-700 dark:bg-navy md:static md:flex md:flex-row md:gap-6 md:border-0 md:bg-transparent md:p-0 dark:md:bg-transparent'>
      @foreach (['beranda' => 'Beranda', 'tentang' => 'Tentang', 'keahlian' => 'Keahlian', 'proyek' => 'Proyek', 'pengalaman' => 'Pengalaman', 'kontak' => 'Kontak'] as $id => $label)
        <a href='#{{ $id }}' class='nav-link'>{{ $label }}</a>
      @endforeach
    </div>

    <div class='flex gap-2'>
      <button id='theme' class='icon-btn' aria-label='Ganti mode terang atau gelap'><svg class='ico'><use href='#i-moon'/></svg></button>
      <button id='burger' class='icon-btn md:hidden' aria-label='Buka menu' aria-expanded='false' aria-controls='menu'><svg class='ico'><use href='#i-menu'/></svg></button>
    </div>
  </nav>
</header>
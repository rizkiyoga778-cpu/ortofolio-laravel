<section id='kontak' class='bg-slate-100 py-20 dark:bg-navy-soft'>
  <div class='wrap'>
    <h2 class='section-title'>Kontak</h2>
    <p class='section-sub'>Punya proyek atau tawaran magang? Kirim pesan, saya balas secepatnya.</p>

    <div class='grid gap-8 md:grid-cols-[1fr_1.2fr]'>
      <div class='grid content-start gap-3'>
        <a href='mailto:{{ config('portfolio.email') }}' class='card flex items-center gap-3 p-4 hover:border-brand'><svg class='ico text-brand'><use href='#i-mail'/></svg>{{ config('portfolio.email') }}</a>
        <a href='https://wa.me/{{ config('portfolio.whatsapp') }}' target='_blank' rel='noopener' class='card flex items-center gap-3 p-4 hover:border-brand'><svg class='ico text-brand'><use href='#i-wa'/></svg>{{ config('portfolio.phone_label') }} (WhatsApp)</a>
        <a href='{{ config('portfolio.linkedin') }}' target='_blank' rel='noopener' class='card flex items-center gap-3 p-4 hover:border-brand'><svg class='ico text-brand'><use href='#i-in'/></svg>LinkedIn</a>
        <a href='{{ config('portfolio.github') }}' target='_blank' rel='noopener' class='card flex items-center gap-3 p-4 hover:border-brand'><svg class='ico text-brand'><use href='#i-gh'/></svg>GitHub</a>
      </div>

      <form method='POST' action='{{ route('contact.store') }}' class='card'>
        @csrf

        @if (session('success'))
          <p class='mb-4 rounded-lg bg-green-100 px-4 py-3 text-green-900 dark:bg-green-900 dark:text-green-100' role='status'>{{ session('success') }}</p>
        @endif

        <label for='name' class='mb-1.5 block text-sm font-medium'>Nama Lengkap</label>
        <input id='name' name='name' value='{{ old('name') }}' class='field' autocomplete='name' required>
        @error('name')<p class='-mt-3 mb-4 text-sm text-red-600 dark:text-red-400'>{{ $message }}</p>@enderror

        <label for='email' class='mb-1.5 block text-sm font-medium'>Alamat Email</label>
        <input id='email' name='email' type='email' value='{{ old('email') }}' class='field' autocomplete='email' required>
        @error('email')<p class='-mt-3 mb-4 text-sm text-red-600 dark:text-red-400'>{{ $message }}</p>@enderror

        <label for='subject' class='mb-1.5 block text-sm font-medium'>Subjek</label>
        <input id='subject' name='subject' value='{{ old('subject') }}' class='field' required>
        @error('subject')<p class='-mt-3 mb-4 text-sm text-red-600 dark:text-red-400'>{{ $message }}</p>@enderror

        <label for='body' class='mb-1.5 block text-sm font-medium'>Isi Pesan</label>
        <textarea id='body' name='body' class='field min-h-32 resize-y' required>{{ old('body') }}</textarea>
        @error('body')<p class='-mt-3 mb-4 text-sm text-red-600 dark:text-red-400'>{{ $message }}</p>@enderror

        <button type='submit' class='btn btn-primary hover:bg-blue-700 active:scale-95'>Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
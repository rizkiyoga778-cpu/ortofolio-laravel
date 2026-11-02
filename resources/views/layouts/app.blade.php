<!DOCTYPE html>
<html lang='id'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>{{ config('portfolio.name') }} | Web Developer &amp; UI/UX Designer</title>
  <meta name='description' content='Portofolio {{ config('portfolio.name') }}, mahasiswa Teknik Informatika yang membangun website cepat, rapi, dan mudah dipakai.'>
  <meta property='og:title' content='{{ config('portfolio.name') }}'>
  <meta property='og:type' content='website'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap' rel='stylesheet'>
  <script>
    /* Pasang mode gelap sebelum halaman tampil agar tidak berkedip */
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    }
  </script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('partials.icons')
  @include('partials.navbar')
  <main>
    @yield('content')
  </main>
  @include('partials.footer')
</body>
</html>
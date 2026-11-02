<?php

return [
    'name' => 'Yoga Rifki Pratama',
    'initials' => 'YR',
    'photo' => 'foto.jpg',   // contoh: 'foto.jpg' (simpan di public/img). null = tampil inisial
    'roles' => ['Web Developer', 'UI/UX Designer'],
    'bio_short' => 'Saya mahasiswa Teknik Informatika di Universitas Teknokrat Indonesia. Saya suka merancang tampilan dan membangun aplikasi web, dari antarmuka sampai database.',
    'email' => 'rizkiyoga778@gmail.com',
    'whatsapp' => '6285788806757',
    'phone_label' => '0857-8880-6757',
    'github' => 'https://github.com/rizkiyoga778-cpu',
    'linkedin' => 'https://www.linkedin.com/in/ISI-USERNAME-LINKEDIN-KAMU',
    'cv' => 'files/cv-yoga-rifki-pratama.pdf',   // simpan PDF di public/files

    'bio' => [
        'Saya mahasiswa Teknik Informatika di Universitas Teknokrat Indonesia yang fokus pada pengembangan web dan desain antarmuka. Saya suka mengubah ide menjadi halaman yang jelas dan mudah digunakan.',
        'Minat saya ada pada pengembangan web full-stack: membangun tampilan dengan Tailwind CSS dan JavaScript, serta mengelola data dengan PHP, Laravel, dan MySQL.',
        'Tujuan karier saya menjadi web developer yang mampu menangani proyek dari rancangan sampai rilis. Saat ini saya mencari kesempatan magang dan proyek freelance.',
    ],

    // [nilai, label]
    'stats' => [
        ['Lampung', 'Lokasi'],
        ['2+ tahun', 'Belajar & membangun'],
        ['5+', 'Proyek selesai'],
        ['Tersedia', 'Magang & freelance'],
    ],

    // [label, nama ikon Devicon, dark:invert?]
    'skills' => [
        'Frontend' => [
            ['HTML5', 'html5'], ['CSS3', 'css3'], ['Tailwind CSS', 'tailwindcss'], ['JavaScript', 'javascript'],
        ],
        'Backend & Database' => [
            ['PHP', 'php'], ['Laravel', 'laravel'], ['MySQL', 'mysql'],
        ],
        'Tools' => [
            ['Git', 'git'], ['GitHub', 'github', true], ['VS Code', 'vscode'], ['Figma', 'figma'], ['Postman', 'postman'],
        ],
    ],

    // [periode, jabatan/jurusan, instansi, [poin tugas]]
    'education' => [
    ['2024 – Sekarang', 'S1 Informatika', 'Universitas Teknokrat Indonesia', [
        'Fokus pengembangan web, mobile, dan UI/UX',
        'IPK 3,7',
    ]],
    ['2020 – 2023', 'SMA Jurusan IPA', 'SMA Negeri 1 Banjar Agung', [
        'Mempelajari dasar sains dan logika matematika',
    ]],
    ],

    'experience' => [
    ['2024 – Sekarang', 'Proyek Tugas Kuliah: Kelompok', 'Universitas Teknokrat Indonesia', [
        'Membuat aplikasi mobile pariwisata',
        'Membuat web inventaris barang',
    ]],
    ['2024 – Sekarang', 'Proyek Tugas Kuliah: Individu', 'Universitas Teknokrat Indonesia', [
        'Membuat marketplace toko buah',
        'Membuat aplikasi toko elektronik',
        'Merancang UI/UX aplikasi sumber air',
    ]],
    ],

// Kosongkan ([]) untuk menampilkan kotak kosong di bawah.
'certificates' => [],
'certificates_empty' => 'Sedang Mencari Experience',

    // [kutipan, nama, jabatan]
    'testimonials' => [
        ['Hasil kerjanya rapi dan selesai tepat waktu. Komunikasinya enak selama proyek berjalan.', 'Nama Klien', 'Pemilik usaha'],
        ['Yoga cepat menangkap kebutuhan tim dan mau membantu anggota lain saat ada kendala.', 'Nama Rekan', 'Ketua kelompok'],
        ['Tampilan proyeknya bersih dan kodenya mudah dibaca. Layak dikembangkan lebih jauh.', 'Nama Dosen', 'Dosen pembimbing'],
    ],
];
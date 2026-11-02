<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //public function run(): void
{
    $projects = [
        [
            'title' => 'Web Marketplace',
            'description' => 'Toko online dengan katalog produk, keranjang, dan halaman admin untuk mengelola pesanan.',
            'category' => 'web',
            'stack' => ['PHP', 'MySQL', 'JavaScript'],
            'demo_url' => 'https://rizkiyoga778-cpu.github.io/project-web-marketplace2/',
            'source_url' => 'https://rizkiyoga778-cpu.github.io/project-web-marketplace2/',
            'icon' => 'cart',
            'image' => 'marketplace.png',
        ],
        [
            'title' => 'Desain Aplikasi Mobile',
            'description' => 'Rancangan antarmuka aplikasi layanan kampus, lengkap dengan alur pengguna dan prototipe.',
            'category' => 'desain',
            'stack' => ['Figma', 'Prototyping'],
            'demo_url' => 'https://www.figma.com/design/ONtR63oKbOWcILyUsjDCop/Untitled?node-id=0-1&t=dhLER0iCdowRxpUL-1',
            'source_url' => 'https://www.figma.com/design/ONtR63oKbOWcILyUsjDCop/Untitled?node-id=0-1&t=dhLER0iCdowRxpUL-1',
            'icon' => 'phone',
            'image' => 'ui-ux.png',
        ],
        [
            'title' => 'Website Profil Organisasi',
            'description' => 'Website responsif untuk organisasi kampus dengan halaman kegiatan dan galeri.',
            'category' => 'web',
            'stack' => ['HTML', 'CSS', 'JavaScript'],
            'demo_url' => null,
            'source_url' => null,
            'icon' => 'cart',
            'image' => 'null',
        ],
    ];

    foreach ($projects as $project) {
        Project::create($project);
    }
}
    }
}

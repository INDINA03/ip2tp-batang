<?php
// config.php - Konfigurasi dasar website
session_start();

// Informasi Website
$site_name = "Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang";
$site_tagline = "Pusat Inovasi & Teknologi Pertanian Digital Kabupaten Batang";
$site_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

// Data Statis untuk Demo (nanti bisa diganti dengan database)
$berita_list = [
    1 => [
        'judul' => 'IP2TP gelar pelatihan "Smart Farming" untuk 200 petani Batang',
        'tanggal' => '15 April 2025',
        'isi' => 'IP2TP Batang menyelenggarakan pelatihan smart farming bagi 200 petani dari 15 desa di Kabupaten Batang. Pelatihan mencakup penggunaan aplikasi kalender tanam digital, chatbot konsultasi, dan teknik pertanian presisi.',
        'gambar' => 'gambar 1.jpg'
    ],
    2 => [
        'judul' => 'Kolaborasi dengan Diskominfo integrasikan data ke Satu Data Batang',
        'tanggal' => '10 April 2025',
        'isi' => 'IP2TP bersama Diskominfo Batang melakukan integrasi data pertanian ke portal Satu Data Batang, mendukung interoperabilitas SPBE dan keterbukaan informasi publik.',
        'gambar' => 'gambar 2.jpg'
    ],
    3 => [
        'judul' => 'Panen perdana varietas padi unggul hasil riset IP2TP',
        'tanggal' => '5 April 2025',
        'isi' => 'Varietas padi unggul hasil riset IP2TP Batang berhasil dipanen dengan produktivitas 20% lebih tinggi dibanding varietas konvensional.',
        'gambar' => 'gambar 3.jpg'
    ]
];

// Data Dashboard (Simulasi real-time)
$dashboard_data = [
    'produksi_padi' => '1.250 ton',
    'luas_panen' => '520 Ha',
    'harga_gabah' => 'Rp 6.200/kg',
    'curah_hujan' => '120 mm'
];

// Inovasi Unggulan
$inovasi_list = [
    ['nama' => 'SILEPBAH', 'deskripsi' => 'Sistem Informasi Lahan Pertanian Berbasis GIS', 'link' => '#' , 'ikon' => '🗺️'],
    ['nama' => 'TaniBot AI', 'deskripsi' => 'Chatbot konsultasi hama, pupuk, & harga 24/7', 'link' => '#', 'ikon' => '💬'],
    ['nama' => 'Kalender Tanam Digital', 'deskripsi' => 'Rekomendasi tanam berbasis data iklim', 'link' => '#', 'ikon' => '📅'],
    ['nama' => 'Varietas Unggul', 'deskripsi' => 'Padi, jagung, kedelai tahan hama', 'link' => '#', 'ikon' => '🌾'],
    ['nama' => 'e-Learning Petani', 'deskripsi' => 'Video tutorial offline-friendly', 'link' => '#', 'ikon' => '🎓'],
    ['nama' => 'Agrowisata IP2TP', 'deskripsi' => 'Tur virtual kebun percontohan', 'link' => '#', 'ikon' => '🌿']
];

// Fungsi untuk mendapatkan halaman aktif
function active_page($page) {
    return (basename($_SERVER['PHP_SELF']) == $page) ? 'active' : '';
}
?>
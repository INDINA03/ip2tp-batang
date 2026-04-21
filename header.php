<!-- header.php - Ganti dengan kode ini -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | " : ""; ?><?php echo $site_name; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .nav-link {
            @apply text-gray-700 hover:text-green-700 transition-colors duration-200 font-medium;
        }
        .active-nav {
            @apply text-green-700 border-b-2 border-green-700;
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Navbar ala ITSNU Pekalongan -->
<nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
    <div class="container mx-auto px-6 py-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            
            <!-- Logo & Nama Institusi -->
<div class="flex items-center space-x-3">
    <!-- Logo -->
    <img src="<?php echo $site_url; ?>/assets/images/logo.png" 
         alt="Logo IP2TP Batang" 
         class="h-10 w-auto">
    
    <!-- Nama Institusi -->
    <div>
        <h1 class="text-xl font-bold text-gray-800">Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang</h1>
        <p class="text-xs text-gray-500">Pusat Inovasi & Teknologi Pertanian Digital</p>
    </div>
</div>
            
            <!-- Menu Navigasi Desktop -->
            <div class="hidden md:flex space-x-6">
                <!-- Menu tanpa dropdown -->
                <a href="<?php echo $site_url; ?>/index.php" class="nav-link <?php echo active_page('index.php') ? 'active-nav' : ''; ?>">Beranda</a>
                
                <!-- Menu Profil dengan Dropdown -->
                <div class="relative dropdown group">
                    <a href="#" class="nav-link flex items-center">
                        Profil <i class="fas fa-check ml-1 text-xs text-green-600"></i>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-48 z-20">
                        <a href="<?php echo $site_url; ?>/pages/profil.php#sejarah" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah & Tugas</a>
                        <a href="<?php echo $site_url; ?>/pages/profil.php#visi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                        <a href="<?php echo $site_url; ?>/pages/profil.php#struktur" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                        <a href="<?php echo $site_url; ?>/pages/profil.php#capaian" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Capaian & Penghargaan</a>
                    </div>
                </div>
                
                <!-- Menu Riset dengan Dropdown -->
                <div class="relative dropdown group">
                    <a href="#" class="nav-link flex items-center">
                        Riset & Inovasi <i class="fas fa-check ml-1 text-xs text-green-600"></i>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-56 z-20">
                        <a href="<?php echo $site_url; ?>/pages/riset.php#penelitian" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Program Penelitian</a>
                        <a href="<?php echo $site_url; ?>/pages/riset.php#teknologi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Teknologi Tepat Guna</a>
                        <a href="<?php echo $site_url; ?>/pages/riset.php#varietas" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Varietas Unggul</a>
                        <a href="<?php echo $site_url; ?>/pages/riset.php#publikasi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Publikasi Ilmiah</a>
                    </div>
                </div>
                
                <!-- Menu Layanan dengan Dropdown -->
                <div class="relative dropdown group">
                    <a href="#" class="nav-link flex items-center">
                        Layanan Digital <i class="fas fa-check ml-1 text-xs text-green-600"></i>
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-52 z-20">
                        <a href="<?php echo $site_url; ?>/pages/layanan.php#chatbot" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Chatbot TaniBot</a>
                        <a href="<?php echo $site_url; ?>/pages/layanan.php#kalender" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kalender Tanam</a>
                        <a href="<?php echo $site_url; ?>/pages/layanan.php#konsultasi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Konsultasi Online</a>
                        <a href="<?php echo $site_url; ?>/pages/layanan.php#elearning" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">e-Learning</a>
                        <a href="<?php echo $site_url; ?>/pages/layanan.php#hama" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Laporan Hama</a>
                    </div>
                </div>
                
                <!-- Menu tanpa dropdown -->
                <a href="<?php echo $site_url; ?>/pages/data-pertanian.php" class="nav-link">Data Pertanian</a>
                <a href="<?php echo $site_url; ?>/pages/agrowisata.php" class="nav-link">Agrowisata</a>
                <a href="<?php echo $site_url; ?>/pages/berita.php" class="nav-link">Pengumuman</a>
                <a href="<?php echo $site_url; ?>/pages/kontak.php" class="nav-link">Pengaduan</a>
                <a href="<?php echo $site_url; ?>/pages/spbe.php" class="nav-link">SPBE</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-gray-100">
            <div class="flex flex-col space-y-3">
                <a href="<?php echo $site_url; ?>/index.php" class="text-gray-700 hover:text-green-700 py-2">Beranda</a>
                <a href="<?php echo $site_url; ?>/pages/profil.php" class="text-gray-700 hover:text-green-700 py-2">Profil</a>
                <a href="<?php echo $site_url; ?>/pages/riset.php" class="text-gray-700 hover:text-green-700 py-2">Riset & Inovasi</a>
                <a href="<?php echo $site_url; ?>/pages/layanan.php" class="text-gray-700 hover:text-green-700 py-2">Layanan Digital</a>
                <a href="<?php echo $site_url; ?>/pages/data-pertanian.php" class="text-gray-700 hover:text-green-700 py-2">Data Pertanian</a>
                <a href="<?php echo $site_url; ?>/pages/agrowisata.php" class="text-gray-700 hover:text-green-700 py-2">Agrowisata</a>
                <a href="<?php echo $site_url; ?>/pages/berita.php" class="text-gray-700 hover:text-green-700 py-2">Pengumuman</a>
                <a href="<?php echo $site_url; ?>/pages/kontak.php" class="text-gray-700 hover:text-green-700 py-2">Pengaduan</a>
                <a href="<?php echo $site_url; ?>/pages/spbe.php" class="text-gray-700 hover:text-green-700 py-2">SPBE</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

<main class="min-h-screen">
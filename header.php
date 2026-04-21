<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | " : ""; ?><?php echo $site_name; ?></title>
    <meta name="description" content="<?php echo $site_tagline; ?>">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $site_url; ?>/assets/css/style.css">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Chart.js untuk Dashboard -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2d6a4f',
                        secondary: '#40916c',
                        accent: '#d4a373',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">

<!-- Navbar -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex flex-wrap justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                <span class="text-white text-xl font-bold">IP</span>
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary">Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang</h1>
                <p class="text-xs text-gray-500 hidden sm:block">Pusat Inovasi Pertanian Digital</p>
            </div>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="block md:hidden text-gray-600 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
        
        <!-- Menu Links -->
        <ul id="mobile-menu" class="hidden md:flex w-full md:w-auto flex-col md:flex-row mt-4 md:mt-0 space-y-2 md:space-y-0 md:space-x-6 text-gray-700 font-medium">
            <li><a href="<?php echo $site_url; ?>/index.php" class="hover:text-primary transition <?php echo active_page('index.php'); ?>">Beranda</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/profil.php" class="hover:text-primary transition">Profil</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/riset.php" class="hover:text-primary transition">Riset & Inovasi</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/data-pertanian.php" class="hover:text-primary transition">Data Pertanian</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/layanan.php" class="hover:text-primary transition">Layanan Digital</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/agrowisata.php" class="hover:text-primary transition">Agrowisata</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/spbe.php" class="hover:text-primary transition">SPBE</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/berita.php" class="hover:text-primary transition">Berita</a></li>
            <li><a href="<?php echo $site_url; ?>/pages/kontak.php" class="hover:text-primary transition">Kontak</a></li>
        </ul>
    </div>
</nav>

<!-- Mobile Menu Script -->
<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

<main class="min-h-screen">
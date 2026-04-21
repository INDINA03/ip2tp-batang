<?php 
$page_title = "Data Pertanian";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">📊 Portal Data Pertanian</h1>
    <p class="text-center text-gray-600 mb-8">Data real-time, open data, dan peta digital lahan Kabupaten Batang</p>
    
    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="dashboard-card bg-white p-6 rounded-xl shadow text-center">
            <div class="text-3xl mb-2">🌾</div>
            <div class="text-gray-500 text-sm">Produksi Padi</div>
            <div class="text-2xl font-bold text-primary"><?php echo $dashboard_data['produksi_padi']; ?></div>
        </div>
        <div class="dashboard-card bg-white p-6 rounded-xl shadow text-center">
            <div class="text-3xl mb-2">🗺️</div>
            <div class="text-gray-500 text-sm">Luas Panen</div>
            <div class="text-2xl font-bold text-primary"><?php echo $dashboard_data['luas_panen']; ?></div>
        </div>
        <div class="dashboard-card bg-white p-6 rounded-xl shadow text-center">
            <div class="text-3xl mb-2">💰</div>
            <div class="text-gray-500 text-sm">Harga Gabah</div>
            <div class="text-2xl font-bold text-primary"><?php echo $dashboard_data['harga_gabah']; ?></div>
        </div>
        <div class="dashboard-card bg-white p-6 rounded-xl shadow text-center">
            <div class="text-3xl mb-2">☔</div>
            <div class="text-gray-500 text-sm">Curah Hujan</div>
            <div class="text-2xl font-bold text-primary"><?php echo $dashboard_data['curah_hujan']; ?></div>
        </div>
    </div>
    
    <!-- Peta GIS (Simulasi) -->
    <div class="bg-white rounded-xl shadow p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4">🗺️ Peta Digital Lahan Pertanian (SILEPBAH)</h2>
        <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center">
            <div class="text-center">
                <div class="text-6xl mb-4">🗺️</div>
                <p class="text-gray-500">[Integrasi Peta GIS - SILEPBAH]</p>
                <p class="text-sm text-gray-400 mt-2">Peta interaktif akan ditampilkan di sini</p>
            </div>
        </div>
        <div class="mt-4 flex justify-center space-x-4">
            <button class="btn-primary">🔍 Zoom In</button>
            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg">📥 Unduh Data GIS</button>
        </div>
    </div>
    
    <!-- Open Data -->
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">📂 Open Data Pertanian</h2>
        <p class="text-gray-600 mb-4">Unduh dataset dalam format CSV/JSON untuk keperluan analisis dan penelitian</p>
        <div class="space-y-3">
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span>Data Produksi Padi 2020-2025</span>
                <a href="#" class="text-primary hover:underline">Download CSV →</a>
            </div>
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span>Data Luas Lahan per Kecamatan</span>
                <a href="#" class="text-primary hover:underline">Download CSV →</a>
            </div>
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span>Data Harga Komoditas Harian</span>
                <a href="#" class="text-primary hover:underline">Download JSON →</a>
            </div>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
<?php 
$page_title = "SPBE & Transformasi Digital";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">🏛️ SPBE & Transformasi Digital</h1>
    <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Sistem Pemerintahan Berbasis Elektronik (SPBE) Kabupaten Batang dalam mendukung transformasi digital sektor pertanian</p>
    
    <!-- Capaian SPBE -->
    <div class="bg-gradient-to-r from-green-700 to-green-600 rounded-2xl p-8 mb-12 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">Capaian SPBE Kabupaten Batang</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div>
                <div class="text-4xl font-bold">3.92</div>
                <p class="text-sm">Indeks SPBE 2024</p>
            </div>
            <div>
                <div class="text-4xl font-bold">Sangat Baik</div>
                <p class="text-sm">Predikat</p>
            </div>
            <div>
                <div class="text-4xl font-bold">#1</div>
                <p class="text-sm">Se-Jateng</p>
            </div>
            <div>
                <div class="text-4xl font-bold">Top 10</div>
                <p class="text-sm">Nasional</p>
            </div>
        </div>
    </div>
    
    <!-- Peran IP2TP dalam SPBE -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold text-green-700 mb-4">📌 Peran IP2TP dalam SPBE</h2>
            <ul class="space-y-3">
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">✓</span>
                    <span>Penyedia data pertanian untuk Satu Data Indonesia</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">✓</span>
                    <span>Integrasi Dashboard Analitic dengan portal SPBE</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">✓</span>
                    <span>Digitalisasi layanan pertanian (e-extension)</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">✓</span>
                    <span>Implementasi API Gateway untuk interoperabilitas data</span>
                </li>
            </ul>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold text-green-700 mb-4">🔗 Integrasi Data</h2>
            <ul class="space-y-3">
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">→</span>
                    <span>Satu Data Batang (data.batangkab.go.id)</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">→</span>
                    <span>Dashboard Analitic Kabupaten Batang</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">→</span>
                    <span>GovTech Indonesia (INA Digital)</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">→</span>
                    <span>Sistem Informasi Harga Pangan (PIHPS)</span>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Regulasi -->
    <div class="bg-white rounded-xl shadow p-6 mb-8">
        <h2 class="text-xl font-bold text-green-700 mb-4 border-l-4 border-green-700 pl-3">📜 Regulasi Pendukung</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="p-2 bg-gray-50 rounded">✓ Perpres No. 95/2018 tentang SPBE</div>
            <div class="p-2 bg-gray-50 rounded">✓ Perpres No. 39/2019 tentang Satu Data Indonesia</div>
            <div class="p-2 bg-gray-50 rounded">✓ Perpres No. 132/2022 tentang Arsitektur SPBE</div>
            <div class="p-2 bg-gray-50 rounded">✓ Perpres No. 82/2023 tentang Percepatan Transformasi Digital</div>
        </div>
    </div>
    
    <!-- Target -->
    <div class="bg-blue-50 rounded-xl p-6 text-center">
        <h2 class="text-xl font-bold text-blue-800 mb-4">🎯 Target 2029</h2>
        <p class="text-gray-700 mb-4">Indonesia masuk <strong>Top 50 EGDI</strong> (E-Government Development Index) dunia</p>
        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-green-600 h-4 rounded-full" style="width: 65%"></div>
        </div>
        <p class="text-sm text-gray-500 mt-2">Indonesia saat ini: Peringkat #77 dari 193 negara (UN E-Government Survey 2024)</p>
    </div>
</section>

<?php include '../footer.php'; ?>
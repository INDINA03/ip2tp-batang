<?php 
$page_title = "Agrowisata IP2TP";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">🌿 Agrowisata IP2TP Batang</h1>
    <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Wisata edukasi pertanian modern, belajar sambil menikmati suasana pedesaan yang asri</p>
    
    <!-- Hero Agrowisata -->
    <div class="bg-gradient-to-r from-green-700 to-green-600 rounded-2xl p-8 mb-12 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">Kunjungi Kebun Percontohan IP2TP</h2>
        <p class="mb-6">Belajar teknologi pertanian modern langsung dari peneliti dan praktisi</p>
        <a href="#" class="bg-white text-green-700 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Pesan Tiket →</a>
    </div>
    
    <!-- Galeri -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-700 pl-3">📸 Galeri Agrowisata</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-gray-200 h-48 rounded-xl flex items-center justify-center card-hover">
            <div class="text-center">
                <div class="text-5xl mb-2">🌾</div>
                <p class="text-gray-500">Sawah Percontohan</p>
            </div>
        </div>
        <div class="bg-gray-200 h-48 rounded-xl flex items-center justify-center card-hover">
            <div class="text-center">
                <div class="text-5xl mb-2">🏡</div>
                <p class="text-gray-500">Greenhouse Modern</p>
            </div>
        </div>
        <div class="bg-gray-200 h-48 rounded-xl flex items-center justify-center card-hover">
            <div class="text-center">
                <div class="text-5xl mb-2">🚜</div>
                <p class="text-gray-500">Alat Pertanian Modern</p>
            </div>
        </div>
    </div>
    
    <!-- Info Kunjungan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold text-green-700 mb-4">🕒 Jam & Harga Tiket</h2>
            <table class="w-full">
                <tr class="border-b">
                    <td class="py-2">Hari Kunjungan</td>
                    <td class="py-2">: Selasa - Minggu</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2">Jam Operasional</td>
                    <td class="py-2">: 08:00 - 16:00 WIB</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2">Tiket Dewasa</td>
                    <td class="py-2">: Rp 15.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2">Tiket Anak</td>
                    <td class="py-2">: Rp 10.000</td>
                </tr>
                <tr>
                    <td class="py-2">Grup / Studi Tiru</td>
                    <td class="py-2">: Hubungi admin</td>
                </tr>
            </table>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold text-green-700 mb-4">🎯 Fasilitas & Aktivitas</h2>
            <ul class="space-y-2">
                <li>✓ ✓ Tur kebun percontohan dengan pemandu</li>
                <li>✓ ✓ Praktik menanam dan memanen</li>
                <li>✓ ✓ Workshop teknologi pertanian</li>
                <li>✓ ✓ Area foto dengan latar sawah</li>
                <li>✓ ✓ Kantin dan area istirahat</li>
                <li>✓ ✓ Toko souvenir produk pertanian</li>
            </ul>
        </div>
    </div>
    
    <!-- Produk Unggulan -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-green-700 pl-3">🛒 Produk Unggulan IP2TP</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🌾</div>
            <h3 class="text-lg font-bold text-gray-800">Bibit Padi Batang-1</h3>
            <p class="text-green-700 font-bold mt-2">Rp 75.000/kg</p>
            <button class="mt-3 bg-green-700 text-white px-4 py-1 rounded-lg text-sm">Beli</button>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🌽</div>
            <h3 class="text-lg font-bold text-gray-800">Bibit Jagung Batang-Maiz</h3>
            <p class="text-green-700 font-bold mt-2">Rp 65.000/kg</p>
            <button class="mt-3 bg-green-700 text-white px-4 py-1 rounded-lg text-sm">Beli</button>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🧴</div>
            <h3 class="text-lg font-bold text-gray-800">Pestisida Nabati</h3>
            <p class="text-green-700 font-bold mt-2">Rp 50.000/liter</p>
            <button class="mt-3 bg-green-700 text-white px-4 py-1 rounded-lg text-sm">Beli</button>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
\<?php 
$page_title = "Profil IP2TP";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">📋 Profil IP2TP Batang</h1>
        
        <!-- Sejarah -->
        <div class="bg-white rounded-xl shadow p-8 mb-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4 border-l-4 border-green-700 pl-3">Sejarah & Tugas</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                IP2TP (Instalasi Penelitian dan Pengkajian Teknologi Pertanian) Batang merupakan unit pelaksana teknis di bawah 
                Badan Penelitian dan Pengembangan Pertanian, Kementerian Pertanian RI. Didirikan pada tahun 2005, IP2TP Batang 
                bertugas melakukan penelitian, pengkajian, dan pengembangan teknologi pertanian yang adaptif dengan kondisi lokal 
                Kabupaten Batang dan sekitarnya.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Sejak tahun 2023, IP2TP Batang juga berperan aktif dalam mendukung transformasi digital pemerintah daerah melalui 
                integrasi data pertanian ke dalam ekosistem SPBE dan Satu Data Indonesia.
            </p>
        </div>
        
        <!-- Visi & Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white rounded-xl shadow p-8">
                <div class="text-4xl mb-4">🎯</div>
                <h2 class="text-2xl font-bold text-green-700 mb-4">Visi</h2>
                <p class="text-gray-700">Menjadi pusat unggulan penelitian dan inovasi teknologi pertanian digital yang mendukung ketahanan pangan dan kesejahteraan petani di Kabupaten Batang.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-8">
                <div class="text-4xl mb-4">📌</div>
                <h2 class="text-2xl font-bold text-green-700 mb-4">Misi</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Menghasilkan teknologi pertanian tepat guna yang mudah diadopsi petani</li>
                    <li>Mendiseminasikan hasil riset melalui platform digital</li>
                    <li>Mengintegrasikan data pertanian dalam ekosistem Satu Data Indonesia</li>
                    <li>Memberdayakan petani melalui layanan digital dan pelatihan</li>
                </ul>
            </div>
        </div>
        
        <!-- Struktur Organisasi -->
        <div class="bg-white rounded-xl shadow p-8 mb-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4 border-l-4 border-green-700 pl-3">🏛️ Struktur Organisasi</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <tr class="border-b">
                        <td class="py-3 font-semibold">Kepala IP2TP</td>
                        <td class="py-3">: Dr. Ir. Ahmad Suhada, M.Si</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 font-semibold">Koordinator Penelitian</td>
                        <td class="py-3">: Ir. Siti Aminah, M.P.</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 font-semibold">Koordinator Pengkajian</td>
                        <td class="py-3">: Dr. Budi Santoso, S.P., M.Si</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 font-semibold">Koordinator IT & Digital</td>
                        <td class="py-3">: Dian Purnomo, S.Kom</td>
                    </tr>
                    <tr>
                        <td class="py-3 font-semibold">Koordinator Penyuluhan</td>
                        <td class="py-3">: Nur Kholis, S.P.</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Capaian -->
        <div class="bg-white rounded-xl shadow p-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4 border-l-4 border-green-700 pl-3">🏆 Capaian & Penghargaan</h2>
            <ul class="space-y-3">
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">🏅</span>
                    <span>Penghargaan Inovasi Teknologi Pertanian 2023 dari Kementerian Pertanian RI</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">🏅</span>
                    <span>Predikat SPBE "Sangat Baik" bersama Diskominfo Batang 2024</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">🏅</span>
                    <span>Juara 1 Inovasi Digital Agriculture se-Jawa Tengah 2024</span>
                </li>
                <li class="flex items-start space-x-3">
                    <span class="text-green-500">🏅</span>
                    <span>ISO 9001:2015 Sertifikasi Manajemen Mutu (2024)</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
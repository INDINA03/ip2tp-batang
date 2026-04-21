<?php 
$page_title = "Profil";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">📋 Profil Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang</h1>
        
        <div class="bg-white rounded-xl shadow p-8 mb-8">
            <h2 class="text-2xl font-bold text-primary mb-4">Sejarah & Tugas</h2>
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
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow p-8">
                <h2 class="text-2xl font-bold text-primary mb-4">🎯 Visi</h2>
                <p class="text-gray-700">Menjadi pusat unggulan penelitian dan inovasi teknologi pertanian digital yang mendukung ketahanan pangan dan kesejahteraan petani di Kabupaten Batang.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-8">
                <h2 class="text-2xl font-bold text-primary mb-4">📌 Misi</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Menghasilkan teknologi pertanian tepat guna yang mudah diadopsi petani</li>
                    <li>Mendiseminasikan hasil riset melalui platform digital</li>
                    <li>Mengintegrasikan data pertanian dalam ekosistem Satu Data Indonesia</li>
                    <li>Memberdayakan petani melalui layanan digital dan pelatihan</li>
                </ul>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow p-8 mt-8">
            <h2 class="text-2xl font-bold text-primary mb-4">🏆 Capaian & Penghargaan</h2>
            <ul class="space-y-3">
                <li class="flex items-start space-x-3"><span class="text-green-500">🏅</span><span>Penghargaan Inovasi Teknologi Pertanian 2023 dari Kementan</span></li>
                <li class="flex items-start space-x-3"><span class="text-green-500">🏅</span><span>Predikat SPBE "Sangat Baik" bersama Diskominfo Batang 2024</span></li>
                <li class="flex items-start space-x-3"><span class="text-green-500">🏅</span><span>Juara 1 Inovasi Digital Agriculture se-Jawa Tengah 2024</span></li>
            </ul>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
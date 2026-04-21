<?php 
$page_title = "Layanan Digital";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">💡 Layanan Digital Instalasi Penelitian dan Pengkajian Teknologi Pertanian</h1>
    <p class="text-center text-gray-600 mb-8">Layanan berbasis teknologi untuk petani dan pemangku kepentingan</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Chatbot -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">💬</div>
            <h3 class="text-xl font-bold text-primary mb-2">TaniBot AI</h3>
            <p class="text-gray-600 text-sm mb-4">Chatbot 24/7 untuk konsultasi hama, pupuk, harga pasar, dan jadwal tanam.</p>
            <div class="flex justify-center space-x-3">
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm">Chat via Whats App</a>
                <a href="#" class="border border-primary text-primary px-4 py-2 rounded-lg text-sm">Web Chat</a>
            </div>
        </div>
        
        <!-- Kalender Tanam -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">📅</div>
            <h3 class="text-xl font-bold text-primary mb-2">Kalender Tanam Digital</h3>
            <p class="text-gray-600 text-sm mb-4">Rekomendasi waktu tanam berdasarkan data iklim, prediksi musim, dan kondisi lahan.</p>
            <a href="#" class="text-primary font-semibold">Lihat Kalender →</a>
        </div>
        
        <!-- Konsultasi Online -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">👨‍🌾</div>
            <h3 class="text-xl font-bold text-primary mb-2">Konsultasi Online</h3>
            <p class="text-gray-600 text-sm mb-4">Konsultasi langsung dengan penyuluh dan peneliti Instalasi Penelitian dan Pengkajian Teknologi Pertanian via video call atau form.</p>
            <a href="#" class="text-primary font-semibold">Ajukan Pertanyaan →</a>
        </div>
        
        <!-- e-Learning -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🎓</div>
            <h3 class="text-xl font-bold text-primary mb-2">e-Learning Petani</h3>
            <p class="text-gray-600 text-sm mb-4">Video tutorial pertanian modern, bisa diunduh untuk ditonton offline.</p>
            <a href="#" class="text-primary font-semibold">Akses Materi →</a>
        </div>
        
        <!-- Laporan Hama -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🐛</div>
            <h3 class="text-xl font-bold text-primary mb-2">Laporan Hama Online</h3>
            <p class="text-gray-600 text-sm mb-4">Laporkan serangan hama di lahan Anda, dapatkan solusi cepat dari tim Instalasi Penelitian dan Pengkajian Teknologi Pertanian.</p>
            <a href="#" class="text-primary font-semibold">Lapor Sekarang →</a>
        </div>
        
        <!-- Permohonan Uji Teknologi -->
        <div class="bg-white rounded-xl shadow p-6 text-center card-hover">
            <div class="text-5xl mb-4">🔬</div>
            <h3 class="text-xl font-bold text-primary mb-2">Uji Teknologi</h3>
            <p class="text-gray-600 text-sm mb-4">Ajukan permohonan uji coba teknologi pertanian di lahan Anda.</p>
            <a href="#" class="text-primary font-semibold">Ajukan Permohonan →</a>
        </div>
    </div>
    
    <!-- Informasi Kontak Darurat -->
    <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
        <div class="flex items-center">
            <div class="text-2xl mr-3">📞</div>
            <div>
                <p class="font-semibold">Layanan Pengaduan & Bantuan Teknis</p>
                <p class="text-sm text-gray-600">WhatsApp: 0812-3456-7890 | Senin-Jumat 08:00-16:00</p>
            </div>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
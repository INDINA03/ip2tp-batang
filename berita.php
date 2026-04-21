<?php 
$page_title = "Berita & Kegiatan";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">📰 Berita & Kegiatan IP2TP Batang</h1>
    <p class="text-center text-gray-600 mb-12">Informasi terbaru tentang kegiatan, penelitian, dan inovasi IP2TP Batang</p>
    
    <div class="max-w-4xl mx-auto space-y-6">
        <?php foreach($berita_list as $id => $berita): ?>
        <div class="bg-white rounded-xl shadow overflow-hidden card-hover">
            <div class="md:flex">
                <div class="md:w-48 h-40 bg-gray-300 flex items-center justify-center">
                    <span class="text-5xl">🌾</span>
                </div>
                <div class="p-6 flex-1">
                    <div class="text-sm text-gray-500 mb-2">
                        📅 <?php echo $berita['tanggal']; ?> 
                        <span class="ml-3 text-green-600">🏷️ <?php echo $berita['kategori'] ?? 'Kegiatan'; ?></span>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo $berita['judul']; ?></h2>
                    <p class="text-gray-600 mb-4"><?php echo potong_teks($berita['isi'], 120); ?></p>
                    <a href="detail-berita.php?id=<?php echo $id; ?>" class="text-green-700 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include '../footer.php'; ?>
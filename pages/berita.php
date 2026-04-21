<?php 
$page_title = "Berita";
include '../config.php';
include '../header.php'; 
?>

<section class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">📰 Berita & Kegiatan Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang</h1>
    
    <div class="max-w-3xl mx-auto space-y-6">
        <?php foreach($berita_list as $id => $berita): ?>
        <div class="bg-white rounded-xl shadow overflow-hidden card-hover">
            <div class="md:flex">
                <div class="md:w-48 h-40 bg-gray-300 flex items-center justify-center">
                    <span class="text-gray-500">[Gambar]</span>
                </div>
                <div class="p-6 flex-1">
                    <div class="text-sm text-gray-500 mb-2">📅 <?php echo $berita['tanggal']; ?></div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo $berita['judul']; ?></h2>
                    <p class="text-gray-600 mb-4"><?php echo substr($berita['isi'], 0, 150); ?>...</p>
                    <a href="detail-berita.php?id=<?php echo $id; ?>" class="text-primary font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include '../footer.php'; ?>
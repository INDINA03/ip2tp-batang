<?php 
$page_title = "Detail Berita";
include '../config.php';
include '../header.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$berita = isset($berita_list[$id]) ? $berita_list[$id] : null;

if(!$berita):
?>
    <div class="container mx-auto px-4 py-12 text-center">
        <h1 class="text-2xl font-bold text-red-500">Berita tidak ditemukan</h1>
        <a href="berita.php" class="text-primary mt-4 inline-block">← Kembali ke daftar berita</a>
    </div>
<?php else: ?>
<section class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="h-64 bg-gray-300 flex items-center justify-center">
                <span class="text-gray-500">[Gambar Header]</span>
            </div>
            <div class="p-8">
                <div class="text-sm text-gray-500 mb-4">📅 <?php echo $berita['tanggal']; ?></div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6"><?php echo $berita['judul']; ?></h1>
                <div class="text-gray-700 leading-relaxed space-y-4">
                    <p><?php echo $berita['isi']; ?></p>
                    <p>Untuk informasi lebih lanjut, silakan hubungi Instalasi Penelitian dan Pengkajian Teknologi Pertanian Batang melalui kontak yang tersedia.</p>
                </div>
                <div class="mt-8 pt-4 border-t">
                    <a href="berita.php" class="text-primary hover:underline">← Kembali ke daftar berita</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; include '../footer.php'; ?>
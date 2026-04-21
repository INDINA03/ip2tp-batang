<?php 
$page_title = "Detail Berita";
include '../config.php';
include '../header.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$berita = isset($berita_list[$id]) ? $berita_list[$id] : null;

if(!$berita):
?>
    <div class="container mx-auto px-4 py-12 text-center">
        <div class="text-6xl mb-4">📭</div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Berita tidak ditemukan</h1>
        <p class="text-gray-600 mb-4">Maaf, berita yang Anda cari tidak tersedia.</p>
        <a href="berita.php" class="bg-green-700 text-white px-6 py-2 rounded-lg hover:bg-green-800 transition">← Kembali ke Berita</a>
    </div>
<?php else: ?>
<section class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <!-- Breadcrumb -->
        <div class="text-sm text-gray-500 mb-4">
            <a href="berita.php" class="hover:text-green-700">Berita</a> > 
            <span class="text-gray-700"><?php echo $berita['judul']; ?></span>
        </div>
        
        <!-- Konten Berita -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="h-64 bg-gray-300 flex items-center justify-center">
                <span class="text-8xl">🌾</span>
            </div>
            <div class="p-8">
                <div class="text-sm text-gray-500 mb-4">
                    📅 <?php echo $berita['tanggal']; ?>
                    <span class="ml-3">✍️ <?php echo $berita['penulis'] ?? 'Admin IP2TP'; ?></span>
                    <span class="ml-3">👁️ <?php echo $berita['views'] ?? '0'; ?> views</span>
                </div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6"><?php echo $berita['judul']; ?></h1>
                <div class="text-gray-700 leading-relaxed space-y-4">
                    <p><?php echo $berita['isi']; ?></p>
                    <p>Untuk informasi lebih lanjut, silakan hubungi IP2TP Batang melalui kontak yang tersedia di website ini.</p>
                </div>
                <div class="mt-8 pt-4 border-t flex justify-between items-center">
                    <a href="berita.php" class="text-green-700 hover:underline">← Kembali ke daftar berita</a>
                    <div class="flex space-x-2">
                        <button class="bg-blue-500 text-white p-2 rounded-full w-8 h-8 text-xs">f</button>
                        <button class="bg-blue-400 text-white p-2 rounded-full w-8 h-8 text-xs">t</button>
                        <button class="bg-green-500 text-white p-2 rounded-full w-8 h-8 text-xs">w</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Berita Lainnya -->
        <div class="mt-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">📰 Berita Lainnya</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach($berita_list as $bid => $b): if($bid == $id) continue; ?>
                <a href="detail-berita.php?id=<?php echo $bid; ?>" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                    <div class="text-sm text-gray-500"><?php echo $b['tanggal']; ?></div>
                    <h4 class="font-semibold text-gray-800"><?php echo $b['judul']; ?></h4>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; include '../footer.php'; ?>
<?php
require_once '../../config/database.php';
require_once '../../includes/auth_check.php';

// Get user's PPDB status if any
$stmt = $pdo->prepare("SELECT * FROM ppdb WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$ppdb_status = $stmt->fetch(PDO::FETCH_ASSOC);

require_once '../../includes/header.php';
require_once '../../includes/navbar.php';
?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-blue-800 mb-6">Dashboard Pengguna</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Welcome Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-blue-800 mb-4">Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p class="text-gray-700 mb-4">Anda login sebagai pengguna biasa. Gunakan menu untuk mengakses fitur yang tersedia.</p>
            <a href="/ppdb.php" class="inline-block bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Daftar PPDB
            </a>
        </div>
        
        <!-- PPDB Status Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-blue-800 mb-4">Status PPDB</h2>
            
            <?php if ($ppdb_status): ?>
                <div class="space-y-3">
                    <div>
                        <p class="text-gray-600">Nama Lengkap</p>
                        <p class="font-medium"><?php echo htmlspecialchars($ppdb_status['full_name']); ?></p>
                    </div>
                    
                    <div>
                        <p class="text-gray-600">Tanggal Pendaftaran</p>
                        <p class="font-medium"><?php echo date('d F Y', strtotime($ppdb_status['registration_date'])); ?></p>
                    </div>
                    
                    <div>
                        <p class="text-gray-600">Status</p>
                        <p class="font-medium">
                            <span class="<?php 
                                echo $ppdb_status['status'] === 'approved' ? 'bg-green-100 text-green-800' : 
                                      ($ppdb_status['status'] === 'rejected' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800');
                            ?> px-2 py-1 rounded-full text-sm">
                                <?php 
                                echo $ppdb_status['status'] === 'approved' ? 'Diterima' : 
                                     ($ppdb_status['status'] === 'rejected' ? 'Ditolak' : 'Menunggu Verifikasi');
                                ?>
                            </span>
                        </p>
                    </div>
                    
                    <?php if ($ppdb_status['status'] === 'approved'): ?>
                        <div class="mt-4 bg-green-50 border border-green-200 text-green-700 p-3 rounded-md">
                            <p class="font-semibold">Selamat! Pendaftaran Anda diterima.</p>
                            <p class="text-sm mt-1">Silakan hubungi admin untuk informasi lebih lanjut.</p>
                        </div>
                    <?php elseif ($ppdb_status['status'] === 'rejected'): ?>
                        <div class="mt-4 bg-red-50 border border-red-200 text-red-700 p-3 rounded-md">
                            <p class="font-semibold">Maaf, pendaftaran Anda ditolak.</p>
                            <p class="text-sm mt-1">Silakan hubungi admin untuk informasi lebih lanjut.</p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <p class="text-gray-600 mb-4">Anda belum mendaftar PPDB.</p>
                <a href="/ppdb.php" class="inline-block bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Daftar Sekarang
                </a>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Information Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold text-blue-800 mb-4">Informasi Terkini</h2>
        
        <?php
        $stmt = $pdo->query("SELECT * FROM information WHERE is_active = 1 ORDER BY created_at DESC LIMIT 3");
        $informations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <?php if ($informations): ?>
            <div class="space-y-4">
                <?php foreach ($informations as $info): ?>
                    <div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                        <h3 class="font-semibold text-blue-700"><?php echo htmlspecialchars($info['title']); ?></h3>
                        <p class="text-gray-700 mt-1"><?php echo htmlspecialchars($info['content']); ?></p>
                        <p class="text-sm text-gray-500 mt-2"><?php echo date('d F Y', strtotime($info['created_at'])); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-gray-600">Tidak ada informasi terbaru saat ini.</p>
        <?php endif; ?>
    </div>
    
    <!-- Gallery Preview -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-blue-800 mb-4">Galeri Terbaru</h2>
        
        <?php
        $stmt = $pdo->query("SELECT * FROM gallery ORDER BY created_at DESC LIMIT 4");
        $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <?php if ($gallery): ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php foreach ($gallery as $item): ?>
                    <div class="bg-gray-100 rounded-md overflow-hidden">
                        <div class="h-32 bg-gray-300 flex items-center justify-center text-gray-500">
                            [Foto]
                        </div>
                        <div class="p-2">
                            <p class="text-sm font-medium truncate"><?php echo htmlspecialchars($item['title']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-4 text-right">
                <a href="#" class="text-blue-800 hover:underline">Lihat semua →</a>
            </div>
        <?php else: ?>
            <p class="text-gray-600">Belum ada foto di galeri.</p>
        <?php endif; ?>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
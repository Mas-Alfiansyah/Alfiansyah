<?php
require_once '../../config/database.php';
require_once '../../includes/auth_check.php';

// Ensure only admin can access
if ($_SESSION['role'] !== 'admin') {
    header("Location: /user/dashboard.php");
    exit();
}

// Get counts for dashboard
$stmt = $pdo->query("SELECT COUNT(*) as total FROM users");
$users_count = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM ppdb");
$ppdb_count = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM information");
$info_count = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM gallery");
$gallery_count = $stmt->fetch()['total'];

require_once '../../includes/header.php';
require_once '../../includes/navbar.php';
?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-blue-800 mb-6">Dashboard Admin</h1>
    
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600">Total Pengguna</p>
                    <h3 class="text-2xl font-bold text-blue-800"><?php echo $users_count; ?></h3>
                </div>
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600">Pendaftar PPDB</p>
                    <h3 class="text-2xl font-bold text-blue-800"><?php echo $ppdb_count; ?></h3>
                </div>
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600">Informasi</p>
                    <h3 class="text-2xl font-bold text-blue-800"><?php echo $info_count; ?></h3>
                </div>
                <div class="bg-yellow-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-yellow-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600">Galeri Foto</p>
                    <h3 class="text-2xl font-bold text-blue-800"><?php echo $gallery_count; ?></h3>
                </div>
                <div class="bg-purple-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent PPDB Registrations -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold text-blue-800 mb-4">Pendaftaran PPDB Terbaru</h2>
        
        <?php
        $stmt = $pdo->query("SELECT p.*, u.username FROM ppdb p JOIN users u ON p.user_id = u.id ORDER BY p.registration_date DESC LIMIT 5");
        $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <?php if ($registrations): ?>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-2 px-4 text-left">Nama</th>
                            <th class="py-2 px-4 text-left">Orang Tua</th>
                            <th class="py-2 px-4 text-left">Telepon</th>
                            <th class="py-2 px-4 text-left">Status</th>
                            <th class="py-2 px-4 text-left">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registrations as $reg): ?>
                            <tr class="border-t border-gray-200 hover:bg-gray-50">
                                <td class="py-2 px-4"><?php echo htmlspecialchars($reg['full_name']); ?></td>
                                <td class="py-2 px-4"><?php echo htmlspecialchars($reg['parent_name']); ?></td>
                                <td class="py-2 px-4"><?php echo htmlspecialchars($reg['parent_phone']); ?></td>
                                <td class="py-2 px-4">
                                    <span class="<?php 
                                        echo $reg['status'] === 'approved' ? 'bg-green-100 text-green-800' : 
                                              ($reg['status'] === 'rejected' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800');
                                    ?> px-2 py-1 rounded-full text-xs">
                                        <?php 
                                        echo $reg['status'] === 'approved' ? 'Diterima' : 
                                             ($reg['status'] === 'rejected' ? 'Ditolak' : 'Menunggu');
                                        ?>
                                    </span>
                                </td>
                                <td class="py-2 px-4"><?php echo date('d/m/Y', strtotime($reg['registration_date'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-right">
                <a href="/admin/ppdb.php" class="text-blue-800 hover:underline">Lihat semua →</a>
            </div>
        <?php else: ?>
            <p class="text-gray-600">Belum ada pendaftaran PPDB.</p>
        <?php endif; ?>
    </div>
    
    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="/admin/information.php" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-blue-800">Kelola Informasi</h3>
                    <p class="text-sm text-gray-600">Tambah/edit informasi running text</p>
                </div>
            </div>
        </a>
        
        <a href="/admin/gallery.php" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-purple-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-blue-800">Kelola Galeri</h3>
                    <p class="text-sm text-gray-600">Upload/edit foto galeri</p>
                </div>
            </div>
        </a>
        
        <a href="/admin/ppdb.php" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center space-x-4">
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-blue-800">Kelola PPDB</h3>
                    <p class="text-sm text-gray-600">Verifikasi pendaftar baru</p>
                </div>
            </div>
        </a>
    </div>
</main>

<?php require_once '../../includes/footer.php'; ?>
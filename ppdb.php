<?php
session_start();
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Only allow logged in users to submit PPDB form
    if (!isset($_SESSION['user_id'])) {
        $error = "Anda harus login terlebih dahulu untuk mendaftar PPDB.";
    } else {
        $full_name = $_POST['full_name'] ?? '';
        $birth_date = $_POST['birth_date'] ?? '';
        $birth_place = $_POST['birth_place'] ?? '';
        $address = $_POST['address'] ?? '';
        $parent_name = $_POST['parent_name'] ?? '';
        $parent_phone = $_POST['parent_phone'] ?? '';
        $previous_school = $_POST['previous_school'] ?? '';
        
        // Validate required fields
        if (empty($full_name) || empty($birth_date) || empty($birth_place) || 
            empty($address) || empty($parent_name) || empty($parent_phone)) {
            $error = "Semua field wajib diisi kecuali sekolah sebelumnya!";
        } else {
            try {
                $stmt = $pdo->prepare("INSERT INTO ppdb (user_id, full_name, birth_date, birth_place, address, parent_name, parent_phone, previous_school) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([
                    $_SESSION['user_id'],
                    $full_name,
                    $birth_date,
                    $birth_place,
                    $address,
                    $parent_name,
                    $parent_phone,
                    $previous_school
                ]);
                
                $success = "Pendaftaran PPDB berhasil! Kami akan menghubungi Anda melalui nomor telepon yang terdaftar.";
            } catch (PDOException $e) {
                $error = "Gagal mendaftar: " . $e->getMessage();
            }
        }
    }
}
?>

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Penerimaan Peserta Didik Baru (PPDB)</h1>
        
        <?php if ($success): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php elseif ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Persyaratan Pendaftaran</h2>
                <ul class="list-disc pl-5 text-gray-700 space-y-1">
                    <li>Mengisi formulir pendaftaran secara lengkap</li>
                    <li>Fotokopi akta kelahiran</li>
                    <li>Fotokopi kartu keluarga</li>
                    <li>Pas foto 3x4 (2 lembar)</li>
                    <li>Fotokopi rapor terakhir (bagi siswa pindahan)</li>
                </ul>
            </div>
            
            <h2 class="text-xl font-semibold text-blue-700 mb-4">Formulir Pendaftaran</h2>
            
            <?php if (!isset($_SESSION['user_id'])): ?>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6">
                    <p>Anda harus <a href="/login.php" class="text-blue-800 font-semibold hover:underline">login</a> terlebih dahulu untuk mengisi formulir pendaftaran. Jika belum memiliki akun, silakan <a href="/register.php" class="text-blue-800 font-semibold hover:underline">daftar</a>.</p>
                </div>
            <?php endif; ?>
            
            <form method="POST" <?php echo !isset($_SESSION['user_id']) ? 'onsubmit="event.preventDefault();"' : ''; ?>>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap Siswa</label>
                        <input type="text" id="full_name" name="full_name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="birth_date" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir</label>
                        <input type="date" id="birth_date" name="birth_date" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="birth_place" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir</label>
                        <input type="text" id="birth_place" name="birth_place" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="parent_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Orang Tua/Wali</label>
                        <input type="text" id="parent_name" name="parent_name" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="parent_phone" class="block text-gray-700 text-sm font-bold mb-2">No. Telepon Orang Tua/Wali</label>
                        <input type="tel" id="parent_phone" name="parent_phone" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="previous_school" class="block text-gray-700 text-sm font-bold mb-2">Sekolah Asal (Jika ada)</label>
                        <input type="text" id="previous_school" name="previous_school"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat Lengkap</label>
                    <textarea id="address" name="address" rows="3" required
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-800 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
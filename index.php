<?php
session_start();
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<main class="container mx-auto px-4 py-8 flex-grow">
    <!-- Running text/information -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6 overflow-hidden">
        <div class="text-center font-semibold text-lg mb-2 text-blue-800">INFORMASI TERKINI</div>
        <div class="border-t border-b border-blue-200 py-2">
            <marquee behavior="scroll" direction="left" class="text-gray-700">
                <?php
                $stmt = $pdo->query("SELECT * FROM information WHERE is_active = 1 ORDER BY created_at DESC LIMIT 5");
                $infos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                if ($infos) {
                    $infoTexts = array_map(function($info) {
                        return $info['title'] . ': ' . $info['content'];
                    }, $infos);
                    echo implode(' | ', $infoTexts);
                } else {
                    echo "Tidak ada informasi terbaru saat ini.";
                }
                ?>
            </marquee>
        </div>
    </div>

    <!-- Main content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Video Section -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Sumpulan Video</h2>
            <div class="space-y-4">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <h3 class="font-semibold text-blue-700">SMIK AL-MUJTAMA'</h3>
                    <div class="mt-2 bg-gray-200 h-40 flex items-center justify-center text-gray-500">
                        [Video Player Placeholder]
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo Section -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Foto</h2>
            <div class="grid grid-cols-2 gap-2">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="bg-gray-200 h-24 flex items-center justify-center text-gray-500">
                        Foto <?php echo $i; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Programs Section -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Program Unggulan</h2>
            <div class="space-y-3">
                <div class="bg-gray-100 p-3 rounded-lg">
                    <h3 class="font-semibold text-blue-700">Pengembangan Perangkat Lunak</h3>
                    <p class="text-sm text-gray-600 mt-1">Program unggulan dalam bidang teknologi informasi</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <h3 class="font-semibold text-blue-700">Game</h3>
                    <p class="text-sm text-gray-600 mt-1">Pengembangan game dan multimedia</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <h3 class="font-semibold text-blue-700">Tata Busana</h3>
                    <p class="text-sm text-gray-600 mt-1">Program keterampilan tata busana</p>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require_once 'includes/footer.php'; ?>
<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-pink-700 to-pink-500 text-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3 mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">TATA BUSANA (TBS)</h1>
                    <p class="text-lg md:text-xl">Membentuk siswa menjadi ahli dalam desain dan produksi busana yang kreatif dan kompetitif.</p>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="/assets/images/tbs-icon.png" alt="Icon TBS" class="h-40 w-auto">
                </div>
            </div>
        </div>

        <!-- Profil Jurusan -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-pink-800 mb-4 border-b pb-2">Profil Jurusan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-gray-700 mb-4">Jurusan Tata Busana (TBS) di SMK Al-Mujtama' memfokuskan pada pembekalan kompetensi di bidang desain dan produksi busana.</p>
                    <p class="text-gray-700">Lulusan jurusan ini dibekali dengan kemampuan mendesain, membuat pola, menjahit, dan menyelesaikan busana siap pakai yang kreatif dan berkualitas.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Kompetensi Keahlian:</h3>
                    <ul class="list-disc pl-5 text-gray-700 space-y-1">
                        <li>Desain Busana</li>
                        <li>Pembuatan Pola</li>
                        <li>Teknik Menjahit</li>
                        <li>Pengetahuan Bahan Tekstil</li>
                        <li>Penyelesaian Busana</li>
                        <li>Fashion Design</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Kurikulum -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-pink-800 mb-4 border-b pb-2">Kurikulum</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-3 px-4 text-left">Kelas</th>
                            <th class="py-3 px-4 text-left">Mata Pelajaran Produktif</th>
                            <th class="py-3 px-4 text-left">Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">X</td>
                            <td class="py-3 px-4">
                                <ul class="list-disc pl-5">
                                    <li>Dasar Desain Busana</li>
                                    <li>Pengetahuan Bahan Tekstil</li>
                                    <li>Dasar-dasar Menjahit</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Dasar-dasar desain dan teknik menjahit</td>
                        </tr>
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">XI</td>
                            <td class="py-3 px-4">
                                <ul class="list-disc pl-5">
                                    <li>Pembuatan Pola Dasar</li>
                                    <li>Teknik Pembuatan Busana</li>
                                    <li>Desain Busana Kreatif</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Pembuatan pola dan busana dasar</td>
                        </tr>
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">XII</td>
                            <td class="py-3 px-4">
                                <ul class="list-disc pl-5">
                                    <li>Pembuatan Busana Jadi</li>
                                    <li>Penyelesaian Busana</li>
                                    <li>Kewirausahaan Tata Busana</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Produksi busana siap pakai dan kewirausahaan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Prospek Karir -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-pink-800 mb-4 border-b pb-2">Prospek Karir</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Fashion Designer</h3>
                    <p class="text-sm text-gray-700">Mendesain busana untuk berbagai kebutuhan dan acara.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Pattern Maker</h3>
                    <p class="text-sm text-gray-700">Membuat pola busana untuk produksi massal.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Tailor</h3>
                    <p class="text-sm text-gray-700">Menjahit busana sesuai pesanan pelanggan.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Textile Designer</h3>
                    <p class="text-sm text-gray-700">Mendesain motif dan tekstur bahan tekstil.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Fashion Entrepreneur</h3>
                    <p class="text-sm text-gray-700">Memiliki usaha di bidang fashion dan busana.</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <h3 class="font-semibold text-pink-800 mb-2">Costume Designer</h3>
                    <p class="text-sm text-gray-700">Mendesain kostum untuk film, teater, atau acara khusus.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
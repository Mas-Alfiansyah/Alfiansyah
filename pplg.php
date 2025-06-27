<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="max-w-6xl mx-auto">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-blue-800 to-blue-600 text-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/3 mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">PENGEMBANGAN PERANGKAT LUNAK DAN GIM (PPLG)</h1>
                    <p class="text-lg md:text-xl">Membentuk siswa menjadi ahli dalam pengembangan software, aplikasi, dan game yang kompeten di era digital.</p>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="/assets/images/pplg-icon.png" alt="Icon PPLG" class="h-40 w-auto">
                </div>
            </div>
        </div>

        <!-- Profil Jurusan -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 border-b pb-2">Profil Jurusan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-gray-700 mb-4">Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK Al-Mujtama' memfokuskan pada pembekalan kompetensi di bidang pengembangan software, aplikasi, dan game.</p>
                    <p class="text-gray-700">Lulusan jurusan ini dibekali dengan kemampuan pemrograman, pengembangan aplikasi web dan mobile, serta pembuatan game yang siap bersaing di industri kreatif digital.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Kompetensi Keahlian:</h3>
                    <ul class="list-disc pl-5 text-gray-700 space-y-1">
                        <li>Pemrograman Dasar</li>
                        <li>Pengembangan Aplikasi Web</li>
                        <li>Pengembangan Aplikasi Mobile</li>
                        <li>Game Development</li>
                        <li>Basis Data</li>
                        <li>UI/UX Design</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Kurikulum -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 border-b pb-2">Kurikulum</h2>
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
                                    <li>Pemrograman Dasar</li>
                                    <li>Sistem Komputer</li>
                                    <li>Komputer dan Jaringan Dasar</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Dasar-dasar pemrograman dan sistem komputer</td>
                        </tr>
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">XI</td>
                            <td class="py-3 px-4">
                                <ul class="list-disc pl-5">
                                    <li>Pemrograman Berorientasi Objek</li>
                                    <li>Pemrograman Web</li>
                                    <li>Basis Data</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Pengembangan aplikasi web dan manajemen database</td>
                        </tr>
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4 font-medium">XII</td>
                            <td class="py-3 px-4">
                                <ul class="list-disc pl-5">
                                    <li>Pemrograman Mobile</li>
                                    <li>Pengembangan Gim</li>
                                    <li>Proyek Pengembangan Perangkat Lunak</li>
                                </ul>
                            </td>
                            <td class="py-3 px-4">Pengembangan aplikasi mobile dan game</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Prospek Karir -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 border-b pb-2">Prospek Karir</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Web Developer</h3>
                    <p class="text-sm text-gray-700">Mengembangkan dan memelihara website dan aplikasi web.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Mobile App Developer</h3>
                    <p class="text-sm text-gray-700">Membuat aplikasi untuk perangkat mobile.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Game Developer</h3>
                    <p class="text-sm text-gray-700">Merancang dan mengembangkan game digital.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">UI/UX Designer</h3>
                    <p class="text-sm text-gray-700">Mendesain antarmuka pengguna yang menarik dan fungsional.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Database Administrator</h3>
                    <p class="text-sm text-gray-700">Mengelola dan memelihara sistem basis data.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">Software Engineer</h3>
                    <p class="text-sm text-gray-700">Mengembangkan perangkat lunak untuk berbagai kebutuhan.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
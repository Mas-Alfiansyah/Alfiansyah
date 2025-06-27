<?php
session_start();
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<main class="container px-4 py-8 flex-grow">
    <div class="max-w-4xl ">
        <h1 class="text-3xl font-bold text-lime-800 mb-6 text-left">PROFIL SMK AL-MUJTAMA'</h1>
        
        <!-- Sekilas Info -->
        
            <h2 class="text-2xl font-semibold text-lime-800 mb-4 border-b pb-2">Sekilas Tentang Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <img src="assets/images/foto.jpg" alt="Gedung SMK Al-Mujtama'" class="w-full h-auto rounded-lg shadow-sm">
                </div>
                <div class="text-gray-700">
                    <p class="mb-4">SMK Al-Mujtama' adalah lembaga pendidikan kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten, berakhlak mulia, dan siap bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
                    <p class="mb-4">Didirikan pada tahun 2010, kami telah mencetak banyak lulusan yang sukses di berbagai bidang industri dan wirausaha.</p>
                    <div class="space-y-2">
                        <p><span class="font-semibold">Alamat:</span> Jl. Pendidikan No. 123, Kota Pendidikan</p>
                        <p><span class="font-semibold">Telepon:</span> (021) 12345678</p>
                        <p><span class="font-semibold">Email:</span> info@smkalmujtama.sch.id</p>
                        <p><span class="font-semibold">Akreditasi:</span> A (Unggul)</p>
                    </div>
                </div>
            </div>
        
        
        <!-- Visi Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Visi -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-blue-800">Visi</h2>
                </div>
                <p class="text-gray-700 italic mb-2">"Menjadi SMK Unggul yang menghasilkan lulusan berkompeten, berkarakter Islami, dan siap bersaing di era global."</p>
            </div>
            
            <!-- Misi -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-yellow-100 p-3 rounded-full mr-4">
                        <svg class="w-6 h-6 text-yellow-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-blue-800">Misi</h2>
                </div>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>Menyelenggarakan pendidikan kejuruan yang berkualitas dengan berbasis teknologi informasi</li>
                    <li>Membentuk peserta didik yang berakhlak mulia dan berkarakter Islami</li>
                    <li>Mengembangkan kompetensi siswa sesuai kebutuhan dunia usaha dan industri</li>
                    <li>Menjalin kerjasama yang baik dengan dunia usaha dan industri</li>
                    <li>Menciptakan lingkungan belajar yang kondusif dan menyenangkan</li>
                </ul>
            </div>
        </div>
        
        <!-- Program Keahlian -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 border-b pb-2">Program Keahlian</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Teknik Komputer Jaringan -->
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-blue-100 p-2 rounded-full mr-3">
                            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-blue-800">Teknik Komputer dan Jaringan</h3>
                    </div>
                    <p class="text-sm text-gray-700">Membekali siswa dengan kemampuan merancang, membangun, dan mengelola jaringan komputer.</p>
                </div>
                
                <!-- Rekayasa Perangkat Lunak -->
                <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-purple-100 p-2 rounded-full mr-3">
                            <svg class="w-5 h-5 text-purple-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-purple-800">Rekayasa Perangkat Lunak</h3>
                    </div>
                    <p class="text-sm text-gray-700">Mengembangkan kemampuan siswa dalam pembuatan aplikasi dan pengembangan software.</p>
                </div>
                
                <!-- Tata Busana -->
                <div class="bg-pink-50 rounded-lg p-4 border border-pink-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-pink-100 p-2 rounded-full mr-3">
                            <svg class="w-5 h-5 text-pink-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-pink-800">Tata Busana</h3>
                    </div>
                    <p class="text-sm text-gray-700">Membekali siswa dengan keterampilan mendesain dan membuat busana kreatif.</p>
                </div>
            </div>
        </div>
        
        <!-- Fasilitas -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4 border-b pb-2">Fasilitas Sekolah</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center">
                    <div class="bg-gray-100 p-4 rounded-full inline-block mb-2">
                        <svg class="w-8 h-8 text-blue-800 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <p class="text-sm font-medium">Lab Komputer</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 p-4 rounded-full inline-block mb-2">
                        <svg class="w-8 h-8 text-blue-800 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <p class="text-sm font-medium">Perpustakaan</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 p-4 rounded-full inline-block mb-2">
                        <svg class="w-8 h-8 text-blue-800 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </div>
                    <p class="text-sm font-medium">Lab Bahasa</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 p-4 rounded-full inline-block mb-2">
                        <svg class="w-8 h-8 text-blue-800 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <p class="text-sm font-medium">Masjid</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
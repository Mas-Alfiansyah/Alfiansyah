<!-- Gabungan Banner Info dan Navbar -->
<div class="bg-lime-900 text-white text-sm py-1 hidden md:block">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Phone -->
            <div class="flex items-center mb-1 md:mb-0">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span>(031) 85166852</span>
            </div>
            
            <!-- Email -->
            <div class="flex items-center mb-1 md:mb-0">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>smkamt@gmail.com</span>
            </div>
            
            <!-- Address -->
            <div class="flex items-center mb-1 md:mb-0">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Jl. Pegantenan Km. 09 Pamekasan</span>
            </div>
            
            <!-- Time -->
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span id="current-time">jam</span>
            </div>
        </div>
    </div>
</div>

<nav class="bg-white text-white shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                <img src="assets/images/amt.png" width="120" class="rounded" alt="">
            </div>
            <h1 class="text-green-900 text-2xl font-bold">SMK <span class="text-green-900">AL-MUJTAMA'</span></h1>
        </div>
        
        <div class="hidden md:flex items-center space-x-6">
            <a href="index.php" class="font-bold text-green-800 hover:text-yellow-300">Beranda</a>
            <a href="profil.php" class="font-bold text-green-800 hover:text-yellow-300">Profil</a>
            
            <!-- Dropdown Jurusan Desktop -->
            <div class="relative group">
                <button class="font-bold text-green-800 hover:text-yellow-300 flex items-center focus:outline-none">
                    Jurusan
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
                    <a href="pplg.php" class="block px-4 py-2 text-gray-800 hover:bg-green-100">PPLG</a>
                    <a href="tbs.php" class="block px-4 py-2 text-gray-800 hover:bg-green-100">Tata Busana</a>
                </div>
            </div>
            
            <a href="#" class="font-bold text-green-800 hover:text-yellow-300">Informasi</a>
            <a href="#" class="font-bold text-green-800 hover:text-yellow-300">Absensi</a>
            <a href="#" class="font-bold text-green-800 hover:text-yellow-300">Program</a>
            <a href="ppdb.php" class="font-bold text-green-800 hover:text-yellow-300">PPDB</a>
        </div>
        
        <!-- Mobile menu button - DIUBAH AGAR LEBIH TERLIHAT -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-green-800 focus:outline-none p-2 rounded-md hover:bg-green-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-green-900 border-t border-gray-200 px-4 py-2">
        <a href="index.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Beranda</a>
        <a href="profil.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Profil</a>
        
        <!-- Dropdown Jurusan Mobile -->
        <div class="relative">
            <button id="mobile-jurusan-button" class="w-full text-left py-2 text-green-100 hover:bg-green-800 rounded px-2 flex justify-between items-center">
                Jurusan
                <svg id="mobile-jurusan-icon" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-jurusan-dropdown" class="hidden pl-4">
                <a href="pplg.php" class="bg-green-100 block py-2 text-green-800 hover:bg-green-200 rounded px-2">PPLG</a>
                <a href="tbs.php" class="bg-green-100 block py-2 text-green-800 hover:bg-green-200 rounded px-2">Tata Busana</a>
            </div>
        </div>
        
        <a href="#" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Informasi</a>
        <a href="#" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Absensi</a>
        <a href="#" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Program</a>
        <a href="ppdb.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">PPDB</a>
        
            <a href="logout.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Logout</a>
            <a href="login.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Login</a>
            <a href="register.php" class="block py-2 text-green-100 hover:bg-green-800 rounded px-2">Daftar</a>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Toggle jurusan dropdown in mobile menu
    document.getElementById('mobile-jurusan-button').addEventListener('click', function() {
        const dropdown = document.getElementById('mobile-jurusan-dropdown');
        const icon = document.getElementById('mobile-jurusan-icon');
        
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });

    // Update time every second
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', {
            hour12: false,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('current-time').textContent = timeString;
    }
    
    // Initial call
    updateTime();
    
    // Update every second
    setInterval(updateTime, 1000);
</script>
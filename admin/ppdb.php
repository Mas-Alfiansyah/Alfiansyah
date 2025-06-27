<div class="bg-[#1B5E20] text-white w-64 min-h-screen p-4">
    <div class="text-center py-4">
        <h1 class="text-2xl font-bold">Admin Panel</h1>
        <p class="text-sm text-gray-300"><?php echo $_SESSION['name']; ?></p>
    </div>
    
    <nav class="mt-8">
        <ul>
            <li class="mb-2">
                <a href="dashboard.php" class="flex items-center px-4 py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'bg-[#4CAF50]' : 'hover:bg-[#4CAF50]'; ?> rounded-lg transition">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="students.php" class="flex items-center px-4 py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'students.php' ? 'bg-[#4CAF50]' : 'hover:bg-[#4CAF50]'; ?> rounded-lg transition">
                    <i class="fas fa-users mr-3"></i>
                    Data Siswa
                </a>
            </li>
            <li class="mb-2">
                <a href="attendance.php" class="flex items-center px-4 py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'attendance.php' ? 'bg-[#4CAF50]' : 'hover:bg-[#4CAF50]'; ?> rounded-lg transition">
                    <i class="fas fa-clipboard-check mr-3"></i>
                    Absensi
                </a>
            </li>
            <li class="mb-2">
                <a href="new-students.php" class="flex items-center px-4 py-2 <?php echo basename($_SERVER['PHP_SELF']) == 'new-students.php' ? 'bg-[#4CAF50]' : 'hover:bg-[#4CAF50]'; ?> rounded-lg transition">
                    <i class="fas fa-user-plus mr-3"></i>
                    Pendaftaran Baru
                </a>
            </li>
            <li class="mb-2">
                <a href="../logout.php" class="flex items-center px-4 py-2 hover:bg-[#4CAF50] rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</div>
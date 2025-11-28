<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">
    <a href="index.php" class="sidebar-brand">
        Kejora<span class="text-secondary">.</span>
    </a>
    
    <ul class="sidebar-menu">
        <li class="menu-header small text-uppercase text-white-50 px-3 mb-2 mt-3">Utama</li>
        <li>
            <a href="admin-dashboard.php" class="<?php echo ($page == 'admin-dashboard.php') ? 'active' : ''; ?>">
                <i class="fa fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="index.php" target="_blank">
                <i class="fa fa-globe"></i> Ke Website Utama
            </a>
        </li>
        
        <li class="menu-header small text-uppercase text-white-50 px-3 mb-2 mt-3">Data Master</li>
        <li>
            <a href="admin-admins.php" class="<?php echo ($page == 'admin-admins.php') ? 'active' : ''; ?>">
                <i class="fa fa-user-shield"></i> Data Admin
            </a>
        </li>
        <li>
            <a href="admin-lokasi.php" class="<?php echo ($page == 'admin-lokasi.php') ? 'active' : ''; ?>">
                <i class="fa fa-map-marker-alt"></i> Lokasi (Prov/Kota)
            </a>
        </li>
        <li>
            <a href="admin-kategori.php" class="<?php echo ($page == 'admin-kategori.php') ? 'active' : ''; ?>">
                <i class="fa fa-tags"></i> Kategori & Jenis
            </a>
        </li>

        <li class="menu-header small text-uppercase text-white-50 px-3 mb-2 mt-3">Manajemen User</li>
        <li>
            <a href="admin-pelamar.php" class="<?php echo ($page == 'admin-pelamar.php') ? 'active' : ''; ?>">
                <i class="fa fa-users"></i> Data Pelamar
            </a>
        </li>
        <li>
            <a href="admin-perusahaan.php" class="<?php echo ($page == 'admin-perusahaan.php') ? 'active' : ''; ?>">
                <i class="fa fa-building"></i> Data Perusahaan
            </a>
        </li>

        <li class="menu-header small text-uppercase text-white-50 px-3 mb-2 mt-3">Transaksi</li>
        <li>
            <a href="admin-lowongan.php" class="<?php echo ($page == 'admin-lowongan.php') ? 'active' : ''; ?>">
                <i class="fa fa-briefcase"></i> Lowongan Kerja
            </a>
        </li>
        <li>
            <a href="admin-lamaran.php" class="<?php echo ($page == 'admin-lamaran.php') ? 'active' : ''; ?>">
                <i class="fa fa-file-alt"></i> Data Lamaran
            </a>
        </li>

        <li class="menu-header small text-uppercase text-white-50 px-3 mb-2 mt-3">Akun Saya</li>
        <li>
            <a href="admin-settings.php" class="<?php echo ($page == 'admin-settings.php') ? 'active' : ''; ?>">
                <i class="fa fa-cog"></i> Pengaturan Profil
            </a>
        </li>
        <li>
            <a href="logout.php" class="text-danger">
                <i class="fa fa-sign-out-alt"></i> Keluar
            </a>
        </li>
    </ul>
</div>
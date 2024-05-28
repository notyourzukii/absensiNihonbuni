<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../../../dist/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../dist/style/style.css">
    <link rel="stylesheet" href="../../../dist/style/switch.css">
    <title>Settings</title>
</head>
<body>
<div class="nav" id="nav">
        <nav class="nav__content">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-chevron-right' ></i>
            </div>
            <a href="#" class="nav__logo">
                <img src="../../../dist/image/logo.png" alt="" width="20px">
                <h1 class="nav__logo-name">Rekap</h1>
            </a>
            <div class="nav__list">
                <a href="../dashboard.php" class="nav__link ">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="../daftarAbsen.php" class="nav__link ">
                    <i class='bx bx-file'></i>
                    <span class="nav__name">Daftar Absen</span>
                </a>
                <a href="../daftarMember.php" class="nav__link">
                    <i class='bx bx-user'></i>
                    <span class="nav__name">Daftar Member</span>
                </a>    
                <a href="../daftarIzin.php" class="nav__link">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="nav__name">Log Absensi</span>
                </a>
                <a href="settings/settings.php" class="nav__link active-link">
                    <i class='bx bx-cog'></i>
                    <span class="nav__name">Setting</span>
                </a>
            </div>
        </nav>
    </div>
    <main class="container section">
        <h1>Pengaturan</h1>
        <div class="setting-list">
            <h3>Absensi</h3>
            <div class="setting-member">
                <div class="setting-action">
                    <div class="setting-desc">
                        <span class="option">Form Absensi</span>
                        <p>Buka sebelum kegiatan selesai, tutup kembali pada 2 jam setelahnya</p>
                    </div>
                    <div class="toggle">
                        <label class="switch">
                            <input type="checkbox" id="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="setting-action">
                    <div class="setting-desc">
                        <span class="option">Form Izin</span>
                        <p>Buka sebelum pengumuman dikirim, tutup bersamaan dengan Form Absensi</p>
                    </div>
                    <div class="toggle">
                        <label class="switch">
                            <input type="checkbox" >
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="setting-action">
                    <span class="option">Link Form Absensi</span>
                    <a href="">FormAbsensiJC.com</a>
                </div>
                <div class="setting-action">
                    <span class="option">Link Form Izin</span>
                    <a href="">FormIzinJC.com</a>
                </div>
            </div>
            <h3>Data Member</h3>
            <div class="setting-member">
                <div class="setting-action">
                    <div class="setting-desc">
                        <span class="option">Input Data Member</span>
                        <p>Gunakan fitur ini hanya setiap tahun ajaran baru</p>
                    </div>
                    <button class="green cursor-pointer">Input .csv</button>
                </div>
                <div class="setting-action">
                    <div class="setting-desc">
                        <span class="option">Import Data Member</span>
                        <p>Simpan file backup pada <b>folder</b> Google Drive Sekretaris sesuai bulan</p>
                    </div>
                    <button class="blue cursor-pointer">Import</button>
                </div>
                
                <div class="setting-action">
                    <div class="setting-desc">
                        <span class="important">Reset Data Member</span>
                        <p>Pastikan anda sudah menyimpan data lama di Google Drive dan Gunakan fitur ini hanya setiap tahun ajaran baru.</p>
                    </div>
                    <button class="red cursor-pointer">Reset</button>
                </div>
            </div>
        </div>
        
        <footer>
            <p> ⓘ Jika terdapat kendala bug ataupun error dalam mengoperasikan website absensi ini anda bisa membaca <a href="">panduan website</a> panduan website terlebih dahulu atau bisa menghubungi <a href="./wa.me/+6281222677093">nomor ini</a> </p>
            <br>
            <span><i>秘書 2024</i> ©</span>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../../../dist/js/script.js"></script>
    <script src="../../../dist/js/closeForm.js"></script>
</body>
</html>
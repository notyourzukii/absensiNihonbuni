<?php
    include('../../connection/connection.php');
    $query = $connect->prepare('SELECT * FROM data_member');
    $query->execute();
    $results = $query->get_result()->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../../dist/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../dist/style/style.css">
    <title>Daftar Absen</title>
</head>
<body>
<div class="nav" id="nav">
        <nav class="nav__content">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-chevron-right' ></i>
            </div>
            <a href="#" class="nav__logo">
                <img src="../../dist/image/logo.png" alt="" width="20px">
                <h1 class="nav__logo-name">Rekap</h1>
            </a>
            <div class="nav__list">
                <a href="dashboard.php" class="nav__link ">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="daftarAbsen.php" class="nav__link ">
                    <i class='bx bx-file'></i>
                    <span class="nav__name">Daftar Absen</span>
                </a>
                <a href="daftarMember.php" class="nav__link active-link">
                    <i class='bx bx-user'></i>
                    <span class="nav__name">Daftar Member</span>
                </a>    
                <a href="daftarIzin.php" class="nav__link">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="nav__name">Daftar Izin</span>
                </a>
                <a href="settings/settings.php" class="nav__link">
                    <i class='bx bx-cog'></i>
                    <span class="nav__name">Setting</span>
                </a>
            </div>
        </nav>
    </div>
    <main class="container section">
        <header>
            <h1>Daftar Member</h1>
            <div class="header-action">
                <a href="">Buka di Excel</a>
                <a href="daftar-member/tambah.php">Tambah Member</a>
            </div>
        </header>
        <table id="table" class="table table-striped display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Kelas Peminatan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($result['nama']); ?></td>
                        <td><?php echo htmlspecialchars($result['kelas']); ?></td>
                        <td><?php echo htmlspecialchars($result['kelas_peminatan']); ?></td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>    
                        </td>
                    </tr>
                <?php  endforeach; ?>

            </tbody>
        </table>    
    
        
    </main>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../../dist/js/script.js"></script>
</body>
</html>
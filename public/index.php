<?php
    include('connection/connection.php');
    $queryMember = "SELECT * FROM data_member";
    $result = mysqli_query($connect, $queryMember);
    
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../dist/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../dist/style/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="nav" id="nav">
        <nav class="nav__content">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-chevron-right'></i>
            </div>
            <a href="" class="nav__logo">
                <img src="../dist/image/logo.png" alt="" width="20px">
                <h1 class="nav__logo-name">Rekap</h1>
            </a>
            <div class="nav__list">
                <a href="index.php" class="nav__link active-link">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="../admin/home/daftarAbsen.php" class="nav__link ">
                    <i class='bx bx-file'></i>
                    <span class="nav__name">Daftar Absen</span>
                </a>
                <a href="../admin/home/daftarMember.php" class="nav__link ">
                    <i class='bx bx-user'></i>
                    <span class="nav__name">Daftar Member</span>
                </a>
                <a href="../admin/home/daftarIzin.php" class="nav__link">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="nav__name">Log Absensi</span>
                </a>
                <a href="../admin/home/settings/settings.php" class="nav__link">
                    <i class='bx bx-cog'></i>
                    <span class="nav__name">Setting</span>
                </a>
            </div>
        </nav>
    </div>
    <main class="container section">
        <h1>Dashboard</h1>
        <div class="dashboard-grid">
            <div class="box red">
                <i class='bx bx-user'></i>
                <?php
                if ($totalMember = mysqli_num_rows($result)) {
                    echo "<h2>$totalMember</h2>";
                } else {
                    echo "<h2>Tidak ada</h2>";
                }?>
                <p>Members</p>
            </div>
            <div class="box blue">
                <i class='bx bx-chart'></i>
                <h2>124</h2>
                <p>Members</p>
            </div>
            <div class="box yellow">
                <i class='bx bx-calendar'></i>
                <h2>Lor</h2>
                <p>Members</p>
            </div>
            <div class="box green">
                <i class='bx bx-file'></i>
                <h2>lor</h2>
                <p>Members</p>
            </div>
        </div>


    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../dist/js/script.js"></script>
</body>

</html>
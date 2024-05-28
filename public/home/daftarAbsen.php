<?php
    include('../../connection/connection.php');
    //data member
    $queryMember = $connect->prepare("SELECT * FROM data_member");
    $queryMember->execute();
    $resultsMember = $queryMember->get_result()->fetch_all(MYSQLI_ASSOC);
    //Kehadiran
    $queryKehadiran = $connect->prepare("SELECT * FROM data_kehadiran");
    $queryKehadiran->execute();
    $resultsKehadiran = $queryKehadiran->get_result()->fetch_all(MYSQLI_ASSOC);
    //Izin
    $queryIzin = $connect->prepare("SELECT * FROM data_izin");
    $queryIzin->execute();
    $resultsIzin = $queryIzin->get_result()->fetch_all(MYSQLI_ASSOC);

    $saturdays = [];
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["month"])) {
        $selectedMonth = intval($_GET["month"]);
        $startDate = new DateTime('2024-08-01');
        $endDate = new DateTime('2025-07-31');
        while ($startDate <= $endDate) {
            if ($startDate->format('n') == $selectedMonth && $startDate->format('N') === '6') {
                $saturdays[] = $startDate->format('Y-m-d');
            }
            $startDate->modify('+1 day');
        }
    }
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
            <a href="" class="nav__logo">
                <img src="../../dist/image/logo.png" alt="" width="20px">
                <h1 class="nav__logo-name">Rekap</h1>
            </a>
            <div class="nav__list">
                <a href="dashboard.php" class="nav__link ">
                    <i class='bx bx-grid-alt'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="daftarAbsen.php" class="nav__link active-link">
                    <i class='bx bx-file'></i>
                    <span class="nav__name">Daftar Absen</span>
                </a>
                <a href="daftarMember.php" class="nav__link ">
                    <i class='bx bx-user'></i>
                    <span class="nav__name">Daftar Member</span>
                </a>    
                <a href="daftarIzin.php" class="nav__link">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="nav__name">Log Absensi</span>
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
            <h1>Daftar Absen</h1>
            <a href="settings/converter.php">Buka di Excel</a>
        </header>
        
        <div class="select-month">
            <p>pilih bulan</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                    <div class="selector">
                        <select class="select2" name="month" style="width: 200px;">
                            <option value=8 <?php echo (isset($selectedMonth) && $selectedMonth == 8) ? 'selected' : ''; ?>>August</option>
                            <option value=9 <?php echo (isset($selectedMonth) && $selectedMonth == 9) ? 'selected' : ''; ?>>September</option>
                            <option value=10 <?php echo (isset($selectedMonth) && $selectedMonth == 10) ? 'selected' : ''; ?>>October</option>
                            <option value=11 <?php echo (isset($selectedMonth) && $selectedMonth == 11) ? 'selected' : ''; ?>>November</option>
                            <option value=12 <?php echo (isset($selectedMonth) && $selectedMonth == 12) ? 'selected' : ''; ?>>December</option>
                            <option value=1 <?php echo (isset($selectedMonth) && $selectedMonth == 1) ? 'selected' : ''; ?>>January</option>
                            <option value=2 <?php echo (isset($selectedMonth) && $selectedMonth == 2) ? 'selected' : ''; ?>>February</option>
                            <option value=3 <?php echo (isset($selectedMonth) && $selectedMonth == 3) ? 'selected' : ''; ?>>March</option>
                            <option value=4 <?php echo (isset($selectedMonth) && $selectedMonth == 4) ? 'selected' : ''; ?>>April</option>
                            <option value=5 <?php echo (isset($selectedMonth) && $selectedMonth == 5) ? 'selected' : ''; ?>>May</option>
                            <option value=6 <?php echo (isset($selectedMonth) && $selectedMonth == 6) ? 'selected' : ''; ?>>June</option>
                            <option value=7 <?php echo (isset($selectedMonth) && $selectedMonth == 7) ? 'selected' : ''; ?>>July</option>
                        </select>
                        <button type="submit">Submit</button>
                    </div>  
                </form>
            </div>
        </div>
        <?php if (!empty($saturdays)): ?>
            <table id="table" class="table table-striped display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Kelas Peminatan</th>
                        <?php foreach ($saturdays as $saturday): ?>
                            <th><?php echo htmlspecialchars(date('d', strtotime($saturday))); ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultsMember as $member): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($member['nama']); ?></td>
                            <td><?php echo htmlspecialchars($member['kelas']); ?></td>
                            <td><?php echo htmlspecialchars($member['kelas_peminatan']); ?></td>
                            <?php foreach ($saturdays as $saturday): ?>
                                <td class="attendance-value">
                                    <?php
                                    $attendanceFound = false;
                                    foreach ([$resultsKehadiran, $resultsIzin] as $data) {
                                        foreach ($data as $attendance) {
                                            if ($attendance['tanggal'] == $saturday && $attendance['id_member'] == $member['id']) {
                                                echo htmlspecialchars($attendance['kehadiran']);
                                                $attendanceFound = true;
                                                break 2;
                                            }
                                        }
                                    }
                                    echo $attendanceFound? '' : '&nbsp;';
                                ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>    
        <?php endif; ?>


    </main>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="../../dist/js/script.js"></script>
    <script src="../../dist/js/colorPicker.js"></script>
</body>
</html>
<?php
include('../../connection/connection.php');
if (isset($_POST['id_member']) && isset($_POST['kehadiran']) && isset($_POST['tanggal'])) {
    $id_member = htmlspecialchars($_POST['id_member']);
    $kehadiran = htmlspecialchars($_POST['kehadiran']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $check_stmt = mysqli_prepare($connect, "SELECT COUNT(*) FROM data_member WHERE id = ?");
    mysqli_stmt_bind_param($check_stmt, "s", $id_member);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_bind_result($check_stmt, $count);
    mysqli_stmt_fetch($check_stmt);
    mysqli_stmt_close($check_stmt);
    
    if ($count > 0) {
        $stmt = mysqli_prepare($connect, "INSERT INTO data_kehadiran (id_member, kehadiran, tanggal) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $id_member, $kehadiran, $tanggal);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('Location: index.php');
        } else {
            echo 'Input gagal cuy';
        }
        mysqli_stmt_close($stmt);
    } else {
        echo 'id_member tidak ditemukan';
    }
} else {
    echo 'Data tidak lengkap';
}
mysqli_close($connect);
?>

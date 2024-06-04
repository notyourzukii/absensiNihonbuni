<?php
include('../../connection/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_member = htmlspecialchars($_POST['id_member']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $kehadiran = htmlspecialchars($_POST['kehadiran']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    $check_stmt = $connect->prepare("SELECT COUNT(*) FROM data_member WHERE id =?");
    $check_stmt->bind_param("s", $id_member);
    $check_stmt->execute();
    $check_stmt->bind_result($count);
    $check_stmt->fetch();
    $check_stmt->close();

    if ($count > 0) {
        $stmt = $connect->prepare("INSERT INTO data_izin (id_member, kehadiran, tanggal, keterangan) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $id_member, $kehadiran, $tanggal, $keterangan);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: index.php');
        } else {
            echo 'Input gagal cuy';
        }
        $stmt->close();
    } else {
        echo 'id tidak ditemukan';
    }
}
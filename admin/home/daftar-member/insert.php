<?php
include('../../../connection/connection.php');
$id = htmlspecialchars($_POST['id']);
$nama = htmlspecialchars($_POST['nama']);
$kelas = htmlspecialchars($_POST['kelas']);
$kelas_peminatan = htmlspecialchars($_POST['kelas_peminatan']);
$stmt = mysqli_prepare($connect, "INSERT INTO data_member (id, nama, kelas, kelas_peminatan) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssss", $id, $nama, $kelas, $kelas_peminatan);
mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt) > 0) {
    header('Location:../daftarMember.php');
} else {
    echo 'Input gagal cuy';
}
?>